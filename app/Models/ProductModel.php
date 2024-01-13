<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'product_models';

    protected $fillable = [
      'name',
      'type',
      'description',
      'status'
    ];

    public function productType(){
        return $this->hasOne(TypeModel::class, 'id', 'type_id');
    }
    public function component(){
        return $this->hasMany(ComponentModel::class, 'product_id', 'id');
    }

}
