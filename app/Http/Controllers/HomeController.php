<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use Faker\Generator as Faker;

class HomeController extends Controller
{
    public function index(Faker $faker) {

        
        return view('home');
    }

    
}