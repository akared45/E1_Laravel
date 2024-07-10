<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function category(){
        $cate=new CategoryModel();
        $category=$cate->getCategory();
        return view('shop',compact('category'));
    }

}
