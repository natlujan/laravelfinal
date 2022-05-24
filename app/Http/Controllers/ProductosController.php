<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("productos.index", ["productos"=>Productos::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("productos.crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Productos($request->input());
        $producto->saveOrFail();
        return redirect()->route("productos.index")->with(["mensaje" => "Producto creado"]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        return view("productos.editar");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    { 
        $id = $request->input('id');
        $producto = Productos::find($id);
        return view("productos.editar", ["producto" => $producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $producto)
    {
        //->update(($request->input()));
        $peticion = $request->input();
        $prod = Productos::find($peticion['id']);
        $prod->codigo = $peticion['codigo'];
        
        $prod->descripcion = $peticion['descripcion'];
        
        $prod->cantidad = $peticion['cantidad'];
        $prod->precio = $peticion['precio'];
        
        $prod->save();
        return redirect()->route("productos.index")->with(["mensaje" => "Producto actualizado"]);
    }
    /*  
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        Productos::find($id)->delete();
        return redirect()->route("productos.index")->with(["mensaje" => "Producto eliminado",
        ]);
    }
}
