<?php
namespace TresdTech\FinalProject\Controller\Form;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class Insertdata extends \Magento\Framework\App\Action\Action
{	protected $_postFactory;

    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }
 
    public function execute()
    {
        $post = $this->getRequest()->getPost();
        print_r($post->getData());
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
}