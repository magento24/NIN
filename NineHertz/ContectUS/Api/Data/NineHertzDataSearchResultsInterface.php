<?php
declare(strict_types=1);

namespace NineHertz\ContectUS\Api\Data;

interface NineHertzDataSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get NineHertzData list.
     * @return \NineHertz\ContectUS\Api\Data\NineHertzDataInterface[]
     */
    public function getItems();

    /**
     * Set f_name list.
     * @param \NineHertz\ContectUS\Api\Data\NineHertzDataInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

