<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AdminModel extends Model
{
    use HasFactory;

    public function getAdmin(){
        $sql = "SELECT product.category_id,category.name, product.name,product.price,product.img,product.description 
                FROM product INNER JOIN category 
                ON product.category_id = category.Id 
                ORDER BY product.category_id ASC";
        $result=DB::select($sql);
        return $result;
    }
}
