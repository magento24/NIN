<?php
declare(strict_types=1);

namespace NineHertz\ContectUS\Model\ResourceModel\NineHertzData;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'ninehertzdata_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \NineHertz\ContectUS\Model\NineHertzData::class,
            \NineHertz\ContectUS\Model\ResourceModel\NineHertzData::class
        );
    }
}

