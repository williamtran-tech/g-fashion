<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ImagePath;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 
        'slug',
        'price',
        'cost',
        'quantity',
        'description',
        'category_id', 
        'cover_img'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image_paths(){
        return $this->hasMany(ImagePath::Class);
    }
}