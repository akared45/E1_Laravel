<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    use HasFactory;

    public function getProduct($category_id)
    {
        $sql = "SELECT product.name,product.img,product.price,product.description FROM product INNER JOIN category ON product.category_id = category.Id WHERE category.Id = $category_id";
        $result = DB::select($sql);
        return $result;
    }
}
