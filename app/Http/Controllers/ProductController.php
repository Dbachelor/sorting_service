<?php

namespace App\Http\Controllers;

use App\Services\Catalogue;
use App\Services\LoadProducts;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $catalogue;
    public function __construct(){
        $request = new Request();
        $this->catalogue = new Catalogue(LoadProducts::staticData($request));
    }

    public function priceSort(){
        return $this->catalogue->getProducts($this->catalogue->productPriceSorter);
    }

    public function salesPerViewSort(){
        return $this->catalogue->getProducts($this->catalogue->productSalesPerViewSorter);
    }
}
