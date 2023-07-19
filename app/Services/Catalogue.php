<?php

namespace App\Services;

use App\Services\LoadProducts;
use Illuminate\Support\Collection;

class Catalogue{
    public $product, $productPriceSorter, $productSalesPerViewSorter;
    public function __construct($products){
      $this->productPriceSorter = Collect($products)->sortBy('price');
      $this->productSalesPerViewSorter = Collect($products)->sortByDesc(function (array $product, int $key) {
        return $product['sales_count'] * $product['views_count'];
    });
     
  
    }

    public function getProducts($sortedArr){
        return $sortedArr;
    }

}