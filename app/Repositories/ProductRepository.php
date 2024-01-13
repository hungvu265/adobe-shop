<?php

namespace App\Repositories;

use App\Models\ProductModel;

class ProductRepository extends BaseRepository
{
    public function model(): string
    {
        return ProductModel::class;
    }
}
