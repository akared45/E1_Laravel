<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($category_id)
    {
        $prod = new ProductModel();
        $product = $prod->getProduct($category_id);
        return view('product.name', compact('product'));
    }
}
