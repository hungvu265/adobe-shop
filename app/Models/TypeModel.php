<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    use HasFactory;

    protected $table = 'type_model';

    protected $fillable = [
        'price',
        'name',
        'amount',
    ];

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'id', 'type_id');
    }
}
