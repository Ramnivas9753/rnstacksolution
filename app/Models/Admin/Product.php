<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productCategoryData(){
        return $this->hasOne(ProductCategory::class,'id','category_id');
    }

    public function staffData(){
        return $this->hasOne(Admin::class,'id','staff_id');
    }
}
