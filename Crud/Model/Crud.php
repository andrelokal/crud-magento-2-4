<?php

namespace Andre\Crud\Model;

use Magento\Framework\Model\AbstractModel;

class Crud extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Andre\Crud\Model\ResourceModel\Crud');
    }
}
