@extends('layouts.master')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{url('/assets/bootstrap/img/mision.jpg')}}" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="{{url('/assets/bootstrap/img/vision.jpg')}}." class="d-block w-100" width="50px">
    </div>
    
  </div>
</div>
    @stop