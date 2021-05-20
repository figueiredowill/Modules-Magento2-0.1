<?php

namespace Figueiredo\ApiRest\Api;

interface ApiManagementInterface
{
    /**
     * @param string $sku
     * @return \Magento\Catalog\Api\Data\ProductInterface
     */
    public function getProductBySku(string $sku);
}
