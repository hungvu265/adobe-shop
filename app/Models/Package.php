<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'category_id',
        'name',
        'status',
        'amount',
        'price',
    ];

    public function category()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'package_id', 'id');
    }
}
