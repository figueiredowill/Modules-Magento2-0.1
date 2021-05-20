<?php

namespace Figueiredo\ApiQty\Model\Product;

use Figueiredo\ApiQty\Api\Product\ProductDetailInterface;
use Magento\Catalog\Api\ProductRepositoryInterface as ProductRepository;

class ProductDetail implements ProductDetailInterface
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * Api Qty constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(
        ProductRepository $productRepository
    ){
        $this->productRepository = $productRepository;
    }
    /**
     * @param string $sku
     * @return array
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getMaxMinQty($sku)
    {
        $product = $this->productRepository->get($sku);
        $productExt = $product->getExtensionAttributes();
        $stock = $productExt->getStockItem();
        $qtyMin = $stock->getMinSaleQty();
        $qtyMax = $stock->getMaxSaleQty();

        return [
            [
            'MinSaleQty' => $qtyMin,
            'MaxSaleQty' => $qtyMax
            ]
        ];
    }

}
