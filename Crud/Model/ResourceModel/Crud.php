<?php

namespace Andre\Crud\Model\ResourceModel;

class Crud extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('andre_crud', 'crud_id');
    }
}
