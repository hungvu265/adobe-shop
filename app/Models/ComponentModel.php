<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'product_id'
    ];

    public function product(){
        return $this->belongsTo(ProductModel::class,'product_id', 'id');
    }

}