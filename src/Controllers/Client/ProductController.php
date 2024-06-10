<?php

namespace Hoanh\WebsitePhone\Controllers\Client;

use Hoanh\WebsitePhone\Commons\Controller;
use Hoanh\WebsitePhone\Models\Product;

class ProductController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function detail($id)
    {
        $product = $this->product->findByID($id);

        $this->renderViewClient('product-detail', [
            'product' => $product
        ]);
    }

    public function productShow($id)
    {
        $product = $this->product->findByIDShow($id);

        $this->renderViewClient('product-show', [
            'product' => $product
        ]);
    }
}
