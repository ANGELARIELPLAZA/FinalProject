<?php

namespace TresdTech\FinalProject\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;

	public function __construct(\TresdTech\FinalProject\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.1.1', '<')) {
			$data = [
				'first_name'    => "Angel",
				'last_name' 	=> "Ariel",
				'email'      	=> 'admin@admin.com',
				'telephone'     => '9999999999',
			];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
	}
}
