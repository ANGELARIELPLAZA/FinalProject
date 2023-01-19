<?php
namespace TresdTech\FinalProject\Block;
class Form extends \Magento\Framework\View\Element\Template
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

	public function form()
	{
		return __('ESTE ES EL Form');
	}

}