<?php

namespace TresdTech\FinalProject\Observer\Frontend;

use Magento\Framework\Event\ObserverInterface;

class CustomerLogin implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        echo "Welcom ";
        $customer = $observer->getEvent()->getCustomer();
        
        echo $customer->getName(); //Get customer name
        exit;
    }
}