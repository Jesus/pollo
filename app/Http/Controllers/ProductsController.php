<?php

namespace pollo\Http\Controllers;

use pollo\Product;
use pollo\Http\Requests;
use Illuminate\Http\Request;
use pollo\Http\Controllers\Controller;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Product::orderBy('id')->paginate(10);
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('productos.crear')->with('creado', 'Producto creado correctamente.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'precio' => $request['precio']
        ]);

        return redirect('productos')->with('creado', 'Muchas Gracias!!! El producto ha sido creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Product::findOrFail($id);

        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->precio = $request['precio'];
        $product->save();

        return redirect('productos')->with('actualizado', 'Tu producto se ha actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete(); 
        
        return redirect('productos')->with('eliminado', 'El producto ha sido eliminado.');
    }
}