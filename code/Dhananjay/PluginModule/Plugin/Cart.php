<?php

namespace Dhananjay\PluginModule\Plugin;

class Cart
{
    public function afterAddProduct(\Magento\Checkout\Model\Cart $subject, $productInfo, $requestInfo=null)
    {
        $requestInfo['price'] = $requestInfo['price'] + 55;
        return array($productInfo, $requestInfo);
    }
}

?>