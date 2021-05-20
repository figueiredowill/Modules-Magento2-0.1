<?php

namespace Figueiredo\PraticaPlugin\Plugin\Catalog\Model;

use Magento\Catalog\Api\ProductRepositoryInterface as ProductRepository;
use Magento\Catalog\Api\Data\ProductInterface as Product;

class ProductRepositoryPlugin
{
    /**
     * @param ProductRepository $subject
     * @param Product $product
     * @return string
     */
 public function afterGet(ProductRepository $subject, Product $product)
 {
     return $product->getName();
 }
}

