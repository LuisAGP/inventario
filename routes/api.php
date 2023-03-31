<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaProductoController;



//INIT************************ RUTAS PRODUCTOS ****************************

Route::apiResource('productos', ProductoController::class);

//END************************* RUTAS PRODUCTOS ****************************



//INIT******************* RUTAS CATEGORIA PRODUCTO ************************

Route::apiResource('categorias_productos', CategoriaProductoController::class);

//END******************** RUTAS CATEGORIA PRODUCTO ************************
