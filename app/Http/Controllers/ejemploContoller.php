<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejemploContoller extends Controller
{
    public function __invoke($name)
    {
        return view ('view2',['name'=>$name]);
    }
}
