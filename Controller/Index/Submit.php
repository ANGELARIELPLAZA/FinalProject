<?php 
namespace TresdTech\FinalProject\Controller\Index;
use TresdTech\FinalProject\Model\ExtensionFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
class Submit extends \Magento\Framework\App\Action\Action{
    protected $_dataExample;
    protected $resultRedirect;
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \TresdTech\FinalProject\Model\ExtensionFactory  $dataExample,
    \Magento\Framework\Controller\ResultFactory $result){
        parent::__construct($context);
        $this->_dataExample = $dataExample;
        $this->resultRedirect = $result;
    }
	public function execute(){


        try {
            $data = (array)$this->getRequest()->getPost();
            if ($data) {
                $model = $this->_dataExample->create();
                $model->setData($data)->save();
                $this->messageManager->addSuccess( __('Insert Record Successfully !') );
            }
        } catch (\Exception $e) {
            $this->messageManager->addError($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;

	}
}
 ?>