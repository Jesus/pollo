<?php

namespace pollo\Http\Controllers;

use pollo\User;
use pollo\Pedido;
use pollo\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use pollo\Http\Controllers\Controller;

class PedidosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user())
        {
            if(Auth::user()->type == 'admin')
                {
                    $clientes = User::all();
                    $pedidos = Pedido::orderBy('id')->paginate(10);
                    return view('pedidos.index', ['pedidos' => $pedidos, 'clientes' => $clientes]);
                }

            $user = Auth::user();

            $pedidos = $user->pedidos;

            return view('pedidos.index', compact('pedidos'));
        }else {
            {
                return redirect('/');
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        Pedido::create([
            'cantidad' => $request['cantidad'],
            'description' => $request['description'],
            'status' => $request['status'],
            'user_id' => $user->id,
        ]);

        return redirect('pedidos')->with('creado', 'Muchas Gracias!!! Tu pedido ha sido creado, en unos minutos lo tendras en tu domicilio.');
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
        $pedido = Pedido::findOrFail($id);

        return view('pedidos.edit', compact('pedido'));
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
        $pedido = Pedido::findOrFail($id);

        $pedido->cantidad = $request['cantidad'];
        $pedido->description = $request['description'];
        $pedido->status = $request['status'];
        $pedido->save();

        return redirect('pedidos')->with('actualizado', 'Tu pedido se ha actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete(); 
        
        return redirect('pedidos')->with('eliminado', 'El pedido ha sido eliminado.');
    }
}
