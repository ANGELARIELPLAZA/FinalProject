<?php
namespace TresdTech\FinalProject\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\TresdTech\FinalProject\Model\PostFactory $postFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$post = $this->_postFactory->create();
		$collection = $post->getCollection();
		
		foreach($collection as $item){
			echo "<pre>";
			if ($item->getData()=== 0){
				echo "no data";
		}else{
			print_r($item->getData());
		}
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();
	}
}