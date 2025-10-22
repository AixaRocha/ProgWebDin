<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';
    protected $fillBLE=['NOMBRE','DESCRIPCION','PRECIO','STOCK'];
}