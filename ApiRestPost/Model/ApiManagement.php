<?php

namespace Figueiredo\ApiRestPost\Model;

use Figueiredo\ApiRestPost\Api\ApiManagementInterface;
use Magento\Catalog\Api\ProductRepositoryInterface as ProductRepository;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Catalog\Model\ProductFactory;
use Exception;

class ApiManagement implements ApiManagementInterface
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @var ProductFactory
     */
    private $productFactory;

    /**
     * ApiManagement constructor.
     * @param ProductRepository $productRepository
     * @param ProductFactory $productFactory
     */
    public function __construct(
        ProductRepository $productRepository,
        ProductFactory $productFactory
    ){
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
    }

    /**
     * @param ProductInterface $product
     * @return ProductInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException;
     * @throws \Magento\Framework\Exception\InputException;
     * @throws \Magento\Framework\Exception\StateException;
     */
    public function postCreateProduct(ProductInterface $product)
    {
        $newProduct = $this->productFactory->create();

        $newProduct->setName($product->getName());
        $newProduct->setPrice($product->getPrice());
        $newProduct->setSku($product->getSku());
        $newProduct->setAttributeSetId($product->getAttributeSetId());

        return $this->productRepository->save($newProduct);
    }

    /**
     * @param string $sku
     * @return ProductInterface
     * @throws NoSuchEntityException
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\StateException
     * @throws \Magento\Framework\Exception\InputException
     */
    public function putProductBySku(string $sku, ProductInterface $product)
    {
        $putProduct = $this->productRepository->get($sku);

        $putProduct->setName($product->getName());
        $putProduct->setPrice($product->getPrice());

        return $this->productRepository->save($putProduct);
    }

    /**
     * @param string $sku
     * @return bool Will returned True if deleted
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\StateException
     */
    public function deleteById($sku)
    {
        $delete = $this->productRepository->get($sku);

        return $this->productRepository->delete($delete);
    }
}
