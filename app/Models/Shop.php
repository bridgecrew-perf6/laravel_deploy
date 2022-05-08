<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'shop_pref',
        'shop_city',
        'nearest_station',
        'create_user',
        'budget_min',
        'budget_max',
        'use_case',
        'food'
    ];
}
