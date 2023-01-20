<?php
namespace TresdTech\FinalProject\Block;
class Customer extends \Magento\Framework\View\Element\Template 
{

    protected $customer;
    
    public function __construct(
        \Magento\Customer\Model\Session $customer,
        \Magento\Framework\View\Element\Template\Context $context
    ){
        $this->customer = $customer;
        parent::__construct($context);
    }

    public function getCustomer()
    {
        $customer = $this->customer;
        $customerName =  $customer->getName(); 
        return "Welcome ".$customerName;
    }
}