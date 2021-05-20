<?php

namespace Figueiredo\PraticaPlugin\Plugin\Customer\Model;

use Magento\Customer\Api\CustomerRepositoryInterface as CustomerRepository;
use Magento\Customer\Api\Data\CustomerInterface as Customer;


class CustomerRepositoryPlugin
{
    /**
    * @param CustomerRepository $subject
    * @param Customer $customer
    * @return string
     */
    public function afterGetById(CustomerRepository $subject, Customer $customer)
    {
        return $customer->getFirstname();
    }

}
