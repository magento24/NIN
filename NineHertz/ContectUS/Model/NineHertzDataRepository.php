<?php
declare(strict_types=1);

namespace NineHertz\ContectUS\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use NineHertz\ContectUS\Api\Data\NineHertzDataInterface;
use NineHertz\ContectUS\Api\Data\NineHertzDataInterfaceFactory;
use NineHertz\ContectUS\Api\Data\NineHertzDataSearchResultsInterfaceFactory;
use NineHertz\ContectUS\Api\NineHertzDataRepositoryInterface;
use NineHertz\ContectUS\Model\ResourceModel\NineHertzData as ResourceNineHertzData;
use NineHertz\ContectUS\Model\ResourceModel\NineHertzData\CollectionFactory as NineHertzDataCollectionFactory;

class NineHertzDataRepository implements NineHertzDataRepositoryInterface
{

    /**
     * @var NineHertzDataInterfaceFactory
     */
    protected $nineHertzDataFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var ResourceNineHertzData
     */
    protected $resource;

    /**
     * @var NineHertzData
     */
    protected $searchResultsFactory;

    /**
     * @var NineHertzDataCollectionFactory
     */
    protected $nineHertzDataCollectionFactory;


    /**
     * @param ResourceNineHertzData $resource
     * @param NineHertzDataInterfaceFactory $nineHertzDataFactory
     * @param NineHertzDataCollectionFactory $nineHertzDataCollectionFactory
     * @param NineHertzDataSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceNineHertzData $resource,
        NineHertzDataInterfaceFactory $nineHertzDataFactory,
        NineHertzDataCollectionFactory $nineHertzDataCollectionFactory,
        NineHertzDataSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->nineHertzDataFactory = $nineHertzDataFactory;
        $this->nineHertzDataCollectionFactory = $nineHertzDataCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(NineHertzDataInterface $nineHertzData)
    {
        try {
            $this->resource->save($nineHertzData);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the nineHertzData: %1',
                $exception->getMessage()
            ));
        }
        return $nineHertzData;
    }

    /**
     * @inheritDoc
     */
    public function get($nineHertzDataId)
    {
        $nineHertzData = $this->nineHertzDataFactory->create();
        $this->resource->load($nineHertzData, $nineHertzDataId);
        if (!$nineHertzData->getId()) {
            throw new NoSuchEntityException(__('NineHertzData with id "%1" does not exist.', $nineHertzDataId));
        }
        return $nineHertzData;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->nineHertzDataCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(NineHertzDataInterface $nineHertzData)
    {
        try {
            $nineHertzDataModel = $this->nineHertzDataFactory->create();
            $this->resource->load($nineHertzDataModel, $nineHertzData->getNinehertzdataId());
            $this->resource->delete($nineHertzDataModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the NineHertzData: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($nineHertzDataId)
    {
        return $this->delete($this->get($nineHertzDataId));
    }
}

