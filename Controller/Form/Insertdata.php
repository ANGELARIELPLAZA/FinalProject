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
        print($post);
        if ($post) {
                //Your Code To perform Action On Post Data
                //To Display Data
                //To Insert Data In Database
                echo "Hello World";
		exit;
        }
    }
}