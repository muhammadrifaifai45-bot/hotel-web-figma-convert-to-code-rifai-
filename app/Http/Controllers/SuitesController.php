<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuitesController extends Controller
{
    public function index(){
        return view('suites');
    }
}
