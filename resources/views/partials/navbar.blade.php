<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <a class="navbar-brand" href="{{url('/')}}">Hotel la Rivera</a>
    
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hotel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
          <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}">Mision y Vision</a>
          <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicacion</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
          <a class="dropdown-item" href="{{url('/servicios/eventos/{id}')}}">Eventos</a>
          
        </div>
      </li>
      
        <a class="nav-link" href="{{url('/reservas')}}">Reservas <span class="sr-only">(current)</span></a>
      
      
        <a class="nav-link" href="{{url('contactos')}}">Contactos</a>
     
     

  
  </div>
</nav>
