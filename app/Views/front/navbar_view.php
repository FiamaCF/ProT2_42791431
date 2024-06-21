
<!--navegacion-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <!--logo/marca de la empresa-->
        <img src="<?php echo base_url('assets/img/Fiama Creaciones logo.jpg')?>" alt="marca" width="75" height="30" class="img-fluid"/>
    </a> 
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quiénes somos</a></li>
        <li class="nav-item">
          <a class="nav-link" href='acercade'>Acerca de</a></li>
          <li class="nav-item">
          <a class="nav-link" href='registro'>Registrarse</a></li>
        <li class="nav-item">
        <a class="nav-link" href='login'>Login</a></li>
      </ul>
      <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Nuestro trabajo</button>
<ul class="dropdown-menu">
    <li><a class="dropdown item" href="#">Álbum 1</a></li>
    <li><a class="dropdown item" href="#">Álbum 2</a></li>
    <li><a class="dropdown item" href="#">Álbum 3</a></li>
</ul>
</div>  
      <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<!--fin barra de navegacion-->