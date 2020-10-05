<?php
/**
 *
 * @package     magento2
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 */

namespace Dhananjay\HelloWorld\Block;


use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function getText() {
        return "Hello World welcome to layout template";
    }
    public function getImagesUrl() {
        return 'pub/media/images/';
    }


}