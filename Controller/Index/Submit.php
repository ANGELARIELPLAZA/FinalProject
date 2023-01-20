<?php
 
namespace TresdTech\FinalProject\Controller\Index;
 
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\Controller\ResultFactory;
 
class Submit extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    protected $_extensionFactory;
 
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \TresdTech\FinalProject\Model\ExtensionFactory ExtensionFactory $extensionFactory
    )
    {
        $this->_resultPageFactory = $resultPageFactory;
		$this->_extensionFactory = $extensionFactory;
        parent::__construct($context);
    }
 
    public function execute()
    {
        try {
            $data = (array)$this->getRequest()->getPost();
            if ($data) {
                $model = $this->_extensionFactory->create();
                $model->setData($data)->save();
                $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->_resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
 
    }
}