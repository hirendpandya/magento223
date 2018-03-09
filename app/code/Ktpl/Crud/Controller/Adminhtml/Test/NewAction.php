<?php
namespace Krish\Employee\Controller\Adminhtml\Test;
use Magento\Backend\App\Action;
use Krish\Employee\Model\Contact as Contact;

class NewAction extends \Magento\Backend\App\Action
{
    /**
     * Edit A Contact Page
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Redirect
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
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
        $resultPage->getConfig()->getTitle()->prepend(__('Add Employee'));
        $this->_view->loadLayout();
        $this->_view->renderLayout();
        
        $contactDatas = $this->getRequest()->getParam('contact');

        if(is_array($contactDatas)) {
            $contact = $this->_objectManager->create(Contact::class);
            if($contactDatas['city']){
                $contactDatas['city'] = implode(',',$contactDatas['city']);
            }

            try 
            {
                $contact->setData($contactDatas)->save();
                $this->messageManager->addSuccess(__('Data has been saved successfully.'));
            } 
            catch (\Exception $e) 
            {
                $this->messageManager->addError(__($e->getMessage()));
            }

            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/index');
        }
    }
}