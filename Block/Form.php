<?php
namespace TresdTech\FinalProject\Block;
class Form extends \Magento\Framework\View\Element\Template
{
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context, array $data = [])
	{
	    parent::__construct($context ,  $data);
	}

	public function getFormAction()
	{
        return $this->getUrl('finalproject/index/submit', ['_secure' => true]);
	}

}
