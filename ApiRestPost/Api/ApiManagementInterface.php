<?php

namespace Figueiredo\ApiRestPost\Api;

use Magento\Catalog\Api\Data\ProductInterface;

interface ApiManagementInterface
{
     /**
     *@param \Magento\Catalog\Api\Data\ProductInterface $product
     *@return \Magento\Catalog\Api\Data\ProductInterface
      */
    public function postCreateProduct(\Magento\Catalog\Api\Data\ProductInterface $product);

    /**
     * @param string $sku
     * @return ProductInterface
     */
    public function putProductBySku(string $sku , ProductInterface $product);

    /**
     * @param string $sku
     * @return bool Will returned True if deleted
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\StateException
     */
    public function deleteById($sku);
}
