<?php

namespace TresdTech\FinalProject\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\TresdTech\FinalProject\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
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