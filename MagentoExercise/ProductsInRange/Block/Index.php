<?php

namespace MagentoExercise\ProductsInRange\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;

class Index extends Template
{

    public function __construct(Context $context,      
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {        
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getBaseUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl();
    }

    public function getLowRangeData()
    {
        return $this->getLowRange('lowrangedata');
        return $this->_coreRegistry->registry('lowrangedata');
    }

    public function getHighRangeData()
    {
        return $this->getHighRange('highrangedata');
       return $this->_coreRegistry->registry('highrangedata');
    }
}
