<?php

namespace pollo\Http\Controllers;

use pollo\User;
use pollo\Comment;
use pollo\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use pollo\Http\Controllers\Controller;
use pollo\Http\Requests\CreateCommentRequest;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = User::orderBy('created_at', 'DESC')->paginate(5);
        $comments = Comment::all();
        $total = count($comments);

        if (Auth::user())
        {
            $user = Auth::user();
            $comment = $user->comments;

        }else 
        {
            $comment = null;  
        }

        return view('comentarios.index', ['clientes' => $clientes, 'comment' => $comment, 'total' => $total]);
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
        
        Comment::create([
            'description' => $request['description'],
            'calification' => $request['calification'],
            'user_id' => $user->id,
        ]);

        return redirect('comentarios')->with('creado', 'Muchas Gracias!!! Tu comentario ha sido creado.');
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
        //
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
        
        $comment = Comment::findOrFail($id);

        $comment->description = $request['description'];
        $comment->calification = $request['calification'];
        $comment->save();

        return redirect('comentarios')->with('actualizado', 'Tu comentario se ha actualizado.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
