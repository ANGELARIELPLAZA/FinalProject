<?php
namespace TresdTech\FinalProject\Controller\Index;

class Crud extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{	$this->helper('TresdTech\FinalProject\Helper\Data')->flushCache();
		return $this->_pageFactory->create();
	}
}
