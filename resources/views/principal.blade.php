@extends('layouts.master')
@section('content')
<div class="alert alert-danger" role="alert"  align="center">
      Bienvenidos al Hotel la Rivera
</div>

<div class="card" style="width: 580px;" >
  <img src="{{url('/assets/bootstrap/img/rivera.jpeg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">El mejor Hotel de la ciudad te espera, para brindarte la mejor comodidad y servicio </p>
  </div>
</div>
    
    @stop