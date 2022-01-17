<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;

use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        // Compact mete todos los productos en un array con clave productos
        return view('welcome', compact('productos'));
    }
}
