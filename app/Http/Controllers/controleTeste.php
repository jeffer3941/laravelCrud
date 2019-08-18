<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class controleTeste extends Controller
{
    private $clientes = [
       ['id'=> 1,'nome' => 'admir', 'telefone' => 98745281],
       
    ];

    public function __construct()
    {
        $clientes = session('clientes');
            if (!isset($clientes))
            session(['clientes' => $this->clientes]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
      $cliente = session ('clientes');  
      return view('clientes.index',compact(['cliente']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $clientes = session('clientes'); 
       $id = count($clientes) + 1; 
       $nome = $request->nome;
       $telefone = $request->telefone;
       $dados = ['id'=>$id, 'nome'=>$nome , 'telefone'=>$telefone];
       $clientes[] = $dados;
       session(['clientes' => $clientes]);
        return redirect()-> route('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id -1];
        return view ('clientes.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id -1];
        return view ('clientes.edit', compact(['cliente']));
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
        $clientes = session('clientes');
        $clientes[$id -1 ]['nome'] = $request->nome;
        $clientes[$id -1 ]['telefone'] = $request->telefone;
        session(['clientes' => $clientes]);
        return redirect()-> route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = session('clientes');
        $ids = array_column($clientes, 'id');
        $index = array_search($id, $ids);
        array_splice($clientes, $index, 1);
        session(['clientes' => $clientes]);
        return redirect()-> route('cliente.index');
    }
}
