<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    /**
     * Función para mostar todos los productos
     * @author Luis GP
     * @return JSON
     */
    public function index()
    {
        return Producto::all();
    }



    /**
     * Función para guardar un nuevo registro
     * @author Luis GP
     * @return JSON
     */
    public function store(Request $request)
    {
        
        //INIT************************ VALIDACIÓN DE CAMPOS REQUERIDOS ****************************

        $request->validate([
            'id_categoria' => 'required',
            'sku' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'estado' => 'required'
        ]);

        //END************************* VALIDACIÓN DE CAMPOS REQUERIDOS ****************************
        

        //INIT***************************** CREACIÓN DE INSTANCIA *********************************

        $producto               = new Producto();
        $producto->id_categoria = $request->id_categoria;
        $producto->sku          = $request->sku;
        $producto->nombre       = $request->nombre;
        $producto->descripcion  = $request->descripcion;
        $producto->precio       = $request->precio;
        $producto->cantidad     = $request->cantidad;
        $producto->estado       = $request->estado;

        $producto->save();

        //END****************************** CREACIÓN DE INSTANCIA *********************************

        return $producto;

    }



    /**
     * Función para mostrar la información de un producto
     * @author Luis GP
     * @return JSON
     */
    public function show(Producto $producto)
    {
        return $producto;
    }
    


    /**
     * Función para actualizar información de un prodcuto
     * @author Luis GP
     * @return JSON
     */
    public function update(Request $request, Producto $producto)
    {

        //INIT************************ VALIDACIÓN DE CAMPOS REQUERIDOS ****************************

        $request->validate([
            'id_categoria' => 'required',
            'sku' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'estado' => 'required'
        ]);

        //END************************* VALIDACIÓN DE CAMPOS REQUERIDOS ****************************
        

        //INIT************************** ACTUALIZACIÓN DE INSTANCIA *******************************

        $producto->id_categoria = $request->id_categoria;
        $producto->sku          = $request->sku;
        $producto->nombre       = $request->nombre;
        $producto->descripcion  = $request->descripcion;
        $producto->precio       = $request->precio;
        $producto->cantidad     = $request->cantidad;
        $producto->estado       = $request->estado;

        $producto->update();

        //END*************************** ACTUALIZACIÓN DE INSTANCIA *******************************

        return $producto;

    }



    /**
     * Función para eliminar un producto
     * @author Luis GP
     * @return JSON
     */
    public function destroy(Producto $producto)
    {

        $producto->delete();

        return response()->json(['message' => "Se elimino el registro correctamente!"]);

    }



}
