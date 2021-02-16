<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class seedersController extends Controller
{
    public function __invoke(Request $request)
    {
        return view("seeders");
    }
}

