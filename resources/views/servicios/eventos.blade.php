@extends('layouts.master')
@section('content')
<div class="media">
  <img src="{{url('/assets/bootstrap/img/evento.jpg')}}" class="align-self-start mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Eventos</h5>
    <p> Eventos {{$id}}</p>
  </div>
</div>
  
    @stop