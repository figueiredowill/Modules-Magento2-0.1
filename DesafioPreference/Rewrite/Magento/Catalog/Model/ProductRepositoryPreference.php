<?php
declare(strict_types=1);

namespace Figueiredo\DesafioPreference\Rewrite\Magento\Catalog\Model;

class ProductRepositoryPreference
{
    public function get($sku, $editMode = false, $storeId = null, $forceReload = false)
    {
        return $sku;
    }
}
