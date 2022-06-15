<?php

namespace MagentoExercise\ProductsInRange\Controller\Result;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Registry;

class Result extends \Magento\Framework\App\Action\Action
{

     /**
     * @var Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    protected $resultJsonFactory; 
    protected $_coreRegistry;

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        JsonFactory $resultJsonFactory,
        Registry $coreRegistry
        )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory; 
        $this->_coreRegistry = $coreRegistry;
        return parent::__construct($context);
    }

    public function execute()
    {
        $LowRange = $this->getRequest()->getParam('lowrange');
        $HighRange = $this->getRequest()->getParam('highrange');
        $result = $this->resultPageFactory->create();
        $resultPage = $this->resultPageFactory->create();
        $low = $this->_coreRegistry->register('lowrangedata',  $LowRange);
        $high = $this->_coreRegistry->register('highrangedata', $HighRange);
        $block = $result->getLayout()
                ->createBlock('MagentoExercise\ProductsInRange\Block\Index')
                ->setTemplate('MagentoExercise_ProductsInRange::result.phtml')
                ->setData('lowrange', $LowRange)
                ->setData('highrange', $HighRange)
                ->toHtml();
        
        return $result;
    } 
}