<?php
namespace Ktpl\Grid\Controller\Grid;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /**
     * @param \Magento\Framework\App\Action\Contex $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context	$context,
		\Magento\Framework\View\Result\PageFactory	$resultPageFactory
	) {								
		$this->resultPageFactory	=	$resultPageFactory;
		parent::__construct($context);
	  }

   
    public function execute()
    {
        return $this->resultPageFactory->create();  
    }

   
}
