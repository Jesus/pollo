<?php

namespace pollo\Http\Controllers;

use pollo\User;
use pollo\Http\Requests;
use Illuminate\Http\Request;
use pollo\Http\Controllers\Controller;

class UsersController extends Controller
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
        $clientes = User::orderBy('name')->paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = User::find($id)->delete();

        return redirect('/clientes')->with('eliminado', 'Cliente eliminado correctamente');
    }
}
