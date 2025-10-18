<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Controlador únic per a la pàgina principal
    public function __invoke()
    {
        return redirect()->route('catalog.index');
    }
}
  