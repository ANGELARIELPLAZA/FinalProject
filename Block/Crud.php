<?php
namespace TresdTech\FinalProject\Block;
use Magento\Framework\App\Action\Context;
use TresdTech\FinalProject\Model\ExtensionFactory;
use Magento\Framework\Controller\ResultFactory;

class Crud extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\TresdTech\FinalProject\Model\PostFactory $postFactory
	)
	{
		$this->_postFactory = $postFactory;
		parent::__construct($context);
	}

	public function crud()
	{
		return __('ESTE ES EL CRUD');
	}

	public function getPostCollection(){
		$post = $this->_postFactory->create();
		$this->messageManager->addSuccess( __('Insert Record Successfully !') );
		return $post->getCollection();
	}
}