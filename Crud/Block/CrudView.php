<?php

namespace Andre\Crud\Block;

use Magento\Framework\View\Element\Template\Context;
use Andre\Crud\Model\CrudFactory;
use Magento\Cms\Model\Template\FilterProvider;
/**
 * Crud View block
 */
class CrudView extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Crud
     */
    protected $_crud;
    public function __construct(
        Context $context,
        CrudFactory $crud,
        FilterProvider $filterProvider
    ) {
        $this->_crud = $crud;
        $this->_filterProvider = $filterProvider;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Andre Crud Module View Page'));

        return parent::_prepareLayout();
    }

    public function getSingleData()
    {
        $id = $this->getRequest()->getParam('id');
        $crud = $this->_crud->create();
        $singleData = $crud->load($id);
        if($singleData->getCrudId() && $singleData->getStatus() == 1){
            return $singleData;
        }else{
            return false;
        }
    }
}
