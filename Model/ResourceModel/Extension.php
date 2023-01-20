<?php 
namespace TresdTech\FinalProject\Model\ResourceModel;
class Extension extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
 public function _construct(){
 $this->_init("tresdtech_finalproject_post","id");
 }
}
 ?>
