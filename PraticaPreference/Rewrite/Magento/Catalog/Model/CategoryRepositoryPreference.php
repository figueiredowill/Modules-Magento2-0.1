<?php

declare(strict_types=1);

namespace Figueiredo\PraticaPreference\Rewrite\Magento\Catalog\Model;

use Magento\Catalog\Model\CategoryRepository;

class CategoryRepositoryPreference extends CategoryRepository
{
    public function get($categoryId, $storeId = null)
    {
     return $categoryId;
    }
}
