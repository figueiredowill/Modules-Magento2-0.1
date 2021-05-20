<?php


namespace Figueiredo\PraticaPlugin\Plugin\Customer;

use Magento\Customer\Api\AccountManagementInterface as AccountManagement;
use Magento\Customer\Api\Data\CustomerInterface as Customer;


class AccountManagementPlugin
{
    /**
     * @param AccountManagement $subject
     * @param Customer $customer
     * @return Customer[]
     */
public function beforeCreateAccount(AccountManagement $subject, Customer $customer)
{
    $customer->setFirstname('William');
    return [$customer];
}

}
