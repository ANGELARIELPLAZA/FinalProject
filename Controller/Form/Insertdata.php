<?php
namespace TresdTech\FinalProject\Controller\Form;
class Insertdata extends \Magento\Framework\App\Action\Action
{
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
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
}