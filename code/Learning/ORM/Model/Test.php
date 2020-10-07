<?php
namespace Learning\ORM\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Learning\ORM\Model\ResourceModel\Test');
    }
}