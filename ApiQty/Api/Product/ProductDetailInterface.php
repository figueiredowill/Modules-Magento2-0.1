<?php


namespace Figueiredo\ApiQty\Api\Product;


interface ProductDetailInterface
{
    /**
     * @param string $sku
     * @return array
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getMaxMinQty($sku);

}
