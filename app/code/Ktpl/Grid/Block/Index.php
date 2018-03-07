<?php
namespace Ktpl\Grid\Block;

use	Magento\Framework\View\Element\Template;

class Index extends Template
{
	protected $_gridFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Ktpl\Grid\Model\GridFactory $gridFactory,
        array $data = []
     ) {
        $this->_gridFactory = $gridFactory;
        parent::__construct($context, $data);
        //get collection of data 
        $collection = $this->_gridFactory->create()->getCollection();
        $this->setCollection($collection);
        $this->pageConfig->getTitle()->set(__('My Booking List'));
    }
  
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if ($this->getCollection()) {
            // create pager block for collection 
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'ktpl.grid.record.pager'
            )->setCollection(
                $this->getCollection() // assign collection to pager
            );
            $this->setChild('pager', $pager);// set pager block in layout
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