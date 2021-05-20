<?php

namespace Figueiredo\PraticaPlugin\Plugin\Sales\Model;

use Magento\Sales\Model\OrderRepository;
use Magento\Sales\Api\Data\OrderInterface as Order;

class OrderRepositoryPlugin
{
    /**
     * @param OrderRepository $subject
     * @param Order $order
     * @return int
     */
    public function afterGet(OrderRepository $subject, Order $order)
    {
        return $order->getEntityId();
    }
}
