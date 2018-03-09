<?php
namespace Krish\Employee\Block;
use Magento\Framework\View\Element\Template;

class Contactslist extends \Magento\Framework\View\Element\Template
{
    

     protected $_gridFactory; 
     
     public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Krish\Employee\Model\ContactFactory $gridFactory,
        array $data = []
     ) {
        $this->_gridFactory = $gridFactory;
        parent::__construct($context, $data);
        
        $collection = $this->_gridFactory->create()->getCollection();
        $this->setCollection($collection);
        $this->pageConfig->getTitle()->set(__('Employee Data'));
    }
  
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if ($this->getCollection()) {
           
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'krish.employee.record.pager'
            )->setCollection(
                $this->getCollection() 
            );
            $this->setChild('pager', $pager);
        }
        return $this;
    }
  
    /**
     * @return string
     */
    // method for get pager html
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}

