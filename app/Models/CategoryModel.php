<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoryModel extends Model
{
    use HasFactory;

    public function getCategory(){
        $sql="SELECT * FROM category";
        $result=DB::select($sql);
        return $result;
    }
}
