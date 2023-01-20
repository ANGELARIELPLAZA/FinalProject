<?php
namespace TresdTech\FinalProject\Controller\Form;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use TresdTech\FinalProject\Model\ExtensionFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
class Insertdata extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    protected $extensionFactory;
 
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ExtensionFactory $extensionFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->extensionFactory = $extensionFactory;
        parent::__construct($context);
    }
 
    public function execute()
    {
        try {
            $data = (array)$this->getRequest()->getPost();
            if ($data) {
                $model = $this->extensionFactory->create();
                $model->setData($data)->save();
                $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
 
    }
}