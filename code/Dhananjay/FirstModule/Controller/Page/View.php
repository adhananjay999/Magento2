<?php

declare(strict_types=1);

namespace Dhananjay\FirstModule\Controller\Page;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class View extends Action
{
    public function execute()
    {  
        /** @var Json $jsonResult */
       print("json result is");
        $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
    
        $jsonResult->setData([
            'message' => 'My First Module'
        ]);
        
        return $jsonResult;
        
    }
}