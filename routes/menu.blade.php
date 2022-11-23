<nav class="navbar navbar-expand-lg" style="background-color: #000";>
  
 <img src="imagenes/bl1.png" alt="Bootstrap" width="80" height="70">
 <img src="imagenes/SSSS.png" alt="Bootstrap" width="120" height="15">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"></a>

  <form class="d-flex position-absolute bottom-0 end-0" role="search">
  <div class="input-group mb-3">
  <input type="text" class="form-control rounded-pill me-2" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">

</div>
</form>

  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    

  <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link active text-white" aria-current="page" href="index.php?seccion=inicio">Genero</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?seccion=proyectos">Descarga</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?seccion=proyectos">Favoritos</a>
      </li>

      <?php
      session_start();
      if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'Admin' ){
    echo ' 
    <li class="nav-item">
    <a class="nav-link text-white" href="index.php?seccion=listaCanciones">Canciones</a>
  </li>';
}
?>

</ul>
</div>
  </div>
  </div>
</nav>
</nav>