<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use Illuminate\Http\Request;

class CategoriaProductoController extends Controller
{
    
    /**
     * Función para mostar todas las categorías de productos
     * @author Luis GP
     * @return JSON
     */
    public function index()
    {
        return CategoriaProducto::all();
    }



    /**
     * Función para guardar una nueva categoría de producto
     * @author Luis GP
     * @return JSON
     */
    public function store(Request $request)
    {

        //INIT************************ VALIDACIÓN DE CAMPOS REQUERIDOS ****************************

        $request->validate([
            'nombre' => 'required'
        ]);

        //END************************* VALIDACIÓN DE CAMPOS REQUERIDOS ****************************


        //INIT***************************** CREACIÓN DE INSTANCIA *********************************

        $categoriaProducto         = new CategoriaProducto();
        $categoriaProducto->nombre = $request->nombre;

        $categoriaProducto->save();

        //END****************************** CREACIÓN DE INSTANCIA *********************************

        return $categoriaProducto;

    }


    
    /**
     * Función para mostrar la información de una categoría de producto
     * @author Luis GP
     * @return JSON
     */
    public function show(CategoriaProducto $categoriaProducto)
    {
        return $categoriaProducto;
    }



    /**
     * Función para actualizar información de una categoría de producto
     * @author Luis GP
     * @return JSON
     */
    public function update(Request $request, CategoriaProducto $categoriaProducto)
    {

        //INIT************************ VALIDACIÓN DE CAMPOS REQUERIDOS ****************************

        $request->validate([
            'nombre' => 'required'
        ]);

        //END************************* VALIDACIÓN DE CAMPOS REQUERIDOS ****************************


        //INIT************************** ACTUALIZACIÓN DE INSTANCIA *******************************

        $categoriaProducto         = new CategoriaProducto();
        $categoriaProducto->nombre = $request->nombre;

        $categoriaProducto->save();

        //END************************** ACTUALIZACIÓN DE INSTANCIA *******************************

        return $categoriaProducto;

    }



    /**
     * Función para eliminar un producto
     * @author Luis GP
     * @return JSON
     */
    public function destroy(CategoriaProducto $categoriaProducto)
    {

        $categoriaProducto->delete();

        return response()->json(['message' => "Se elimino el registro correctamente!"]);

    }

    
}
