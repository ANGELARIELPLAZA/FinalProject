<?php 
namespace TresdTech\FinalProject\Controller\Index;
use TresdTech\FinalProject\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
class Index extends \Magento\Framework\App\Action\Action{
    protected $_dataExample;
    protected $resultRedirect;
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \TresdTech\FinalProject\Model\DataExampleFactory  $dataExample,
    \Magento\Framework\Controller\ResultFactory $result){
        parent::__construct($context);
        $this->_dataExample = $dataExample;
        $this->resultRedirect = $result;
    }
	public function execute(){
        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
		$model = $this->_dataExample->create();
		$model->addData([
			'first_name'    => "Angel",
			'last_name' 	=> "Ariel",
			'email'      	=> 'admin@admin.com',
			'telephone'     => '9999999999'
			]);
        $saveData = $model->save();
        if($saveData){
            $this->messageManager->addSuccess( __('Insert Record Successfully !') );
        }
		return $resultRedirect;
	}
}
 ?>