<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class github extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'github_token',
        'github_refresh_token',
        'github_id',

    ];
}
