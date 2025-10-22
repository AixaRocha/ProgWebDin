<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class MaterialesController extends Controller
{   
    public function index_materiales ()
    {
        $materiales = Producto::all();
    return view ('materiales.index', compact ('materiales'));
}
public function show_materiales ($id)
{
    $material = Producto::findOrFail($id);
return view ('materiales.show', compact ('material'));
}
}