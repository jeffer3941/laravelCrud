@extends('layout.principal')
@section('nome', 'Crud Novo')

<html>
    <div class="principal1">
      <h2>Novo cliente</h2>

            <form action="{{route ('cliente.store')}}" method="POST">
                @csrf
                Nome:<input type="text" placeholder="Ex:joão" name="nome">
                <br>
                Telefone:<input type="tel" placeholder="Ex:(00) 0000-0000" maxlength="13" name="telefone">
                <br>
                <input type="submit" value="salvar">
            
            </form>
        <div id="footer">
            <a href="{{route ('cliente.index')}}">Voltar</a>   
        </div>
    </div>   
    
</html>

