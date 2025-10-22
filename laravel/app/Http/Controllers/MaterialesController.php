<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class MaterialesController extends Controller
{   
    public function index_materiales ()
    {
        $materiales = Producto::all();
    return view('vistas_materiales.index_materiales', compact ('materiales'));
}
public function show_materiales ($id)
{
    $material = Producto::findOrFail($id);
return view('vistas_materiales.show_materiales', compact('material'));
}
}