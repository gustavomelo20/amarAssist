@extends('layouts.app')

@section('title', 'Desafio')


@section('content')
 
    <div class="container mt-3">
    <div class="row">
    <div class="col-md-12">  
   @foreach($phone as $format)
         
         {{$format}}
            
   @endforeach
     
     </div>
     </div>
     </div>

 @endsection