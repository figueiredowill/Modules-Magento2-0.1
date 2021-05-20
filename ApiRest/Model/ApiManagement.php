<?php

namespace Figueiredo\ApiRest\Model;

use Figueiredo\ApiRest\Api\ApiManagementInterface;
use Magento\Catalog\Api\ProductRepositoryInterface as ProductRepository;

class ApiManagement implements ApiManagementInterface
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * Api Management constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(
        ProductRepository $productRepository
    ){
        $this->productRepository = $productRepository;
    }
    /**
     * @param string $sku
     * @return \Magento\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductBySku(string $sku)
    {
        $product = $this->productRepository->get($sku);

        return $product;
    }
}
