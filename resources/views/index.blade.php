@extends('layouts.app')

@section('title', 'Desafio')


@section('content')
 
   <div class="container mt-3">
    <div class="row">
    <div class="col-md-12">
     <form action="{{ route('form-index')  }}" method="post">
        @csrf
        <fieldset>
         
            <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Nome do autor">
            </div>
         
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
           </fieldset>
        </form>
        </div>
       
               @foreach($names as $name)
                  <h1> {{ $name }} </h1>  
               @endforeach
             
        </div>
    </div>

    <div class="container mt-3">
    <div class="row">
    <div class="col-md-12">
     <form action="{{ route('phone-index')  }}" method="post">
        @csrf
        <fieldset>
         
            <div class="mb-3">
            <input type="text" name="phone" class="form-control" placeholder="Encontre o telefone">
            </div>
         
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
           </fieldset>
        </form>
        </div>
       
             
             
        </div>
    </div>

 @endsection