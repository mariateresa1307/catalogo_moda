<?php include("../../vista/Secciones/header.php")?>
<body>


 <!-- Page Content Holder -->
 <div  id="content" class="ma-nav-mobile-container hidden-desktop hidden-sm hidden-md hidden-lg">


 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" id="sidebarCollapse" style="background-color: white;" class="btn btn-info navbar-btn">
            <span class="navbar-toggler-icon"></span>
            </button>
            </div>
  <a class="navbar-brand" href="#">Navbar w/ text</a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>
      
     



<div class="container">
  <div class="wrapper">
    <div class="col-12">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>My MODA </h3>
        </h3>
      </div>

      <ul class="list-unstyled components">
        <strong><p>CATALOG</p></strong>

        <li class="active">
          <a href="#menu">Temporada</a>
        </li>

        <li>
          <a href="#menu">Ilustración</a>
        </li>

        <li>
          <a href="#menu">Interacción</a>
        </li>
        
        <li>
          <a href="#">Blog</a>
        </li>
       
        <li>
          <a href="#">Acerca</a>
        </li>
       
        <li>
          <a href="#">contacto</a>
        </li>
      </ul>
    </nav>

   
  <?php include("../../vista/Secciones/footer.php")?>

