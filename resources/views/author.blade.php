@extends('layouts.app')

@section('title', 'Dojo 2')


@section('content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dojo #1</li>
        </ol>
</nav>
<div class="container">
      <div class="row">
        <div class="col-md-12">
        <form action="{{ route('author-post')  }}" method="post" >
        @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">
                  Ex: Input Joao Silva Neto |

                      Output: SILVA NETO , Joao
              </label>
                 <input name="nome" type="text" class="form-control"   placeholder="Digite aqui">
             
              </div>
    
            <button type="submit" class="btn btn-primary">Enviar</button>
           </form>      
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-md-12">
  
         
              <h1>{{$strNames}}</li>
         
     
        </div>
      </div>
  </div>    

 @endsection