<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $injectionController;

    public function __construct(InjectionController $injectionController)
    {
        $this->injectionController = $injectionController;
    }

    public function show($id){
        $message = $this->injectionController->showMessage();
        return $message;
    }
}