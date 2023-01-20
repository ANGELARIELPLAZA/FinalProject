<?php
namespace TresdTech\FinalProject\Model\ResourceModel\Extension;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('TresdTech\FinalProject\Model\Extension', 'TresdTech\FinalProject\Model\ResourceModel\Extension');
    }
}