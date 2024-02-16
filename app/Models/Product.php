<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
      'package_id',
      'name',
      'short_description',
      'description',
      'image',
    ];

    public function package(){
        return $this->belongsTo(Package::class, 'id', 'package_id');
    }

    public function productSliders(){
        return $this->hasMany(ProductSlider::class, 'product_id', 'id');
    }

}
