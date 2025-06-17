<?php

namespace App\Models\User;

use App\Models\Admin\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEnquiry extends Model
{
    use HasFactory;

    protected $table = 'productEnquiry'; 
    public function courseData(){
        return $this->hasOne(Course::class,'id','course_id');
    }
}
