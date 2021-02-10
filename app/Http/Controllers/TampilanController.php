<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanController extends Controller
{
    public function tampilan(Type $var = null)
    {
        return view('tampilan');
    }
    public function tampilan2(Type $var = null)
    {
        return view('tampilan2');
    }
}
