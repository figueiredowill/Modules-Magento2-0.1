<?php


namespace Figueiredo\DesafioObserver\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class NewOrder implements ObserverInterface
{
    public function _()
    {

    }
    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
       $data = $observer->getEvent()->getData('order');
       $orderId = $data->getEntityId();
       print_r("Order ID é: " . $orderId);
    }
}
