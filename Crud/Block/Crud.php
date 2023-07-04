<?php

namespace Andre\Crud\Block;

/**
 * Crud content block
 */
class Crud extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Andre Crud Module'));

        return parent::_prepareLayout();
    }
}
