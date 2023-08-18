<?php
declare(strict_types=1);

namespace NineHertz\ContectUS\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface NineHertzDataRepositoryInterface
{

    /**
     * Save NineHertzData
     * @param \NineHertz\ContectUS\Api\Data\NineHertzDataInterface $nineHertzData
     * @return \NineHertz\ContectUS\Api\Data\NineHertzDataInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \NineHertz\ContectUS\Api\Data\NineHertzDataInterface $nineHertzData
    );

    /**
     * Retrieve NineHertzData
     * @param string $ninehertzdataId
     * @return \NineHertz\ContectUS\Api\Data\NineHertzDataInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($ninehertzdataId);

    /**
     * Retrieve NineHertzData matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \NineHertz\ContectUS\Api\Data\NineHertzDataSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete NineHertzData
     * @param \NineHertz\ContectUS\Api\Data\NineHertzDataInterface $nineHertzData
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \NineHertz\ContectUS\Api\Data\NineHertzDataInterface $nineHertzData
    );

    /**
     * Delete NineHertzData by ID
     * @param string $ninehertzdataId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($ninehertzdataId);
}

