<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Admin extends BaseModel
{
    use HasFactory, HasApiTokens;

    protected $table = 'admins';

    protected $fillable = [
        'email',
        'password',
        'full_name',
        'type',
        'status',
    ];
}
