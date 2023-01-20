<?php
namespace TresdTech\FinalProject\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Extension extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('tresdtech_finalproject_post', 'id');
    }
}