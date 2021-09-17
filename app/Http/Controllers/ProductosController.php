<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    { $producto = producto::all();
      return view('pages.producto.index', dashboard('producto'));
    }
}
