<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index(){
        return view('santri.index');
    }
}
