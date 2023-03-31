<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;



//INIT************************ RUTAS PRODUCTOS ****************************

Route::apiResource('productos', ProductoController::class);

//END************************* RUTAS PRODUCTOS ****************************
