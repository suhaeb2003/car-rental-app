<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function allcars(){
        return view('pages.AllCar');
    }
}
