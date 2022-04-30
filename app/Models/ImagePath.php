<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ImagePath extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 
        'image'
    ];

    public function products(){
        return $this->belongsTo(Product::Class);
    }
}