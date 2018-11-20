<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InjectionController extends Controller
{
    public function showMessage(){
        return "This is Laravel";
    }
}
