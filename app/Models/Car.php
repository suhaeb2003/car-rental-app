<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //`name`, `brand`, `model`, `year`, `total_car`,`price` `daily_rental_price`, `availability`, `car_status`, `image
    protected $fillable = [
        'name',
        'brand',
        'model',
        'year',
        'total_car',
        'price',
        'daily_rental_price',
        'availability',
        'car_status',
        'image'
    ];
}
