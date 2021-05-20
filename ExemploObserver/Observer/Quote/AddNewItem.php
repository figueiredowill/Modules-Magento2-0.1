<?php

namespace Figueiredo\ExemploObserver\Observer\Quote;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class AddNewItem implements ObserverInterface
{
/**
 *@param Observer $observer
 * @return float
*/
public function execute(Observer $observer): float
{
    $data = $observer->getEvent()->getData('quote_item');
    $originalPrice = $data->getPrice();

    if ($originalPrice > 100) {
    $data->setOriginalCustomPrice(100);
    }
    return $originalPrice;
    }
}
