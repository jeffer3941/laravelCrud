@extends('layout.principal')
@section('nome', 'Crud Edit')    

<html lang="pt-br">
    <body >

        <div class="principal1">

          <h2>Editar cliente</h2>

            <form action="{{route ('cliente.update', $cliente['id']) }}" method="POST">
                @csrf
                @method('PUT')
                Nome: <input type="text" name="nome" value="{{$cliente['nome']}}">
                <br>
                Telefone: <input type="tel" name="nome" data-mask="Ex:(00) 0000-0000" maxlength="13"  value="{{$cliente['telefone']}}">
                <br>
                <input class="salvar" type="submit" value="Salvar">
            
            </form>

            <div id="footer">
                <a href="{{route ('cliente.index')}}">Voltar</a>
            </div>    
            

        </div>

     
  </body>
</html>






