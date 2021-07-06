@extends('layouts.app')

@section('title', 'Desafio')


@section('content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dojo #2</li>
        </ol>
</nav>
<div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="{{ route('phone-post')  }}" method="post" >
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">
                  Ex: Input :1-HOME-SWEET-HOME |

                      Output:  1-4663-79338-4663
              </label>
              <input type="text" class="form-control" name="phone"  placeholder="Digite aqui">
             
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
  
           
              <h1>{{$strPhone}}</li>
         
     
        </div>
      </div>
  </div>    

 @endsection