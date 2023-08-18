<?php
declare(strict_types=1);

namespace NineHertz\ContectUS\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class NineHertzData extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('ninehertz_contectus_ninehertzdata', 'ninehertzdata_id');
    }
}

