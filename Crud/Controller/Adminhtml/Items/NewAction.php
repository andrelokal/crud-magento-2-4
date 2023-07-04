<?php

namespace Andre\Crud\Controller\Adminhtml\Items;

class NewAction extends \Andre\Crud\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
