<?php

declare(strict_types=1);

namespace Learning\ORM\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Index extends Action
{
    public function execute(){
    $this->_view->loadLayout();
    $this->_view->getLayout()->initMessages();
    $this->_view->renderLayout();
    }
     
}