@extends('layout.principal')

@section('nome', 'Crud Info')
    

<html>
    <div class="principal1">
        <h3>Informaçãoes do cliente</h3>

        <p>ID: {{$cliente['id']}}</p>
        <p>Nome:  {{$cliente['nome']}}</p>
        <p>Telefone: {{$cliente ['telefone']}}</p>

        <a href="{{route('cliente.index')}}">Voltar</a>  

    </div>

</html>


