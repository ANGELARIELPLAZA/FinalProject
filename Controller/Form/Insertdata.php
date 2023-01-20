<?php
namespace TresdTech\FinalProject\Controller\Form;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class Insertdata implements InstallDataInterface
{	protected $_postFactory;

    public function __construct(\TresdTech\FinalProject\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}
 
    public function execute()
    {
        $post = $this->getRequest()->getPost();
        print_r($post);
        if ($post) {
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