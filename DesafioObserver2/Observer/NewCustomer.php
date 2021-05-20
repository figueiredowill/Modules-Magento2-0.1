<?php

namespace Figueiredo\DesafioObserver2\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class NewCustomer implements ObserverInterface

{
    public function execute(Observer $observer)
    {
        $data = $observer->getEvent()->getData('customer');
        return($data);
       // $firstName = $data->getFirstName();
       // $lastName = $data->getLastName();
       // print_r("O nome do cliente logado é: " . $firstName . " " . $lastName);
       // die;
    }
}
