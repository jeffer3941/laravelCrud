@extends('layout.principal')

@section('nome', 'Crud Cliente')

@section('parte1')
  
   <div class="principal">

        <div id="container">

            <h1>Clientes</h1>

           <a class="link" href="{{route('cliente.create')}}">Novo usuario</a>
       </div>    
       <div id="informacao" >                       
            @foreach ($cliente as $c) 
              <div class="formulario">
                   <p>Nome: {{ $c['nome'] }} | Telefone: {{ $c['telefone'] }}
                            <a class="linkEdit" href="{{route('cliente.edit', $c ['id'])}}">Editar</a>
                            <a class="link" href="{{route('cliente.show', $c ['id'])}}">Info</a> 
                          </p>                                      
                                          
                        <form action="{{route ('cliente.destroy', $c['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')                    
                            <input id="apagar" type="submit" value="Apagar">             
                        </form>  
                                            
                    @endforeach  
              </div>              
                  
        </div>        
                
           

       

    </div> 
@endsection



