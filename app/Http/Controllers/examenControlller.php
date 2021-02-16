<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class examenControlller extends Controller
{
    public function __invoke(Request $request)
    {
        Artisan::call('migrate');
        return view("migraciones");
    }
}
