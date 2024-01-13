<?php

namespace App\Models;

use App\Traits\WithUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens, WithUuid;

    protected $table = 'admins';
    protected $guard = 'admin';
    protected $fillable = [
        'email',
        'password',
        'full_name',
        'type',
        'status',
    ];
}
