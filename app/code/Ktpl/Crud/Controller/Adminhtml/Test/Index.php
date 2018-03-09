<?php
namespace Krish\Employee\Controller\Adminhtml\Test;
use Magento\Backend\App\Action;

class Index extends \Magento\Backend\App\Action
{
	private $resultPageFactory;

	public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }


    public function execute()
    {

    	$resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Krish_Employee');
        $resultPage->getConfig()->getTitle()->prepend(__('Employee List'));
		$this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}