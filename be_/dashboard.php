<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Acceso</title>
    <link rel="icon" type="image/png" href="../assets/brand/img/cel.ico">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link src="">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
<header>

    </header>
<body>
<main class="justify-content-center">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-phone"></i> Sistema de ventas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html"><i class="bi bi-house-fill"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="catalogo.php?id=1"><i class="bi bi-receipt-cutoff"></i> Ventas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="envio.php"><i class="bi bi-geo-fill"></i> Envíos</a>
            </li>
          </ul>
          <!-- <a href="catalogo.php" class="btn btn-outline-light" type="buton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-cart-plus"></i> Carrito de compras</a> -->
          <a href="catalogo.php?id=1" class="btn btn-dark" type="buton" ><i class="bi bi-door-open-fill"></i> Salir</a>

      </div>
    </div>
  </nav>

  
  
  
    </main>

    <div class="container">
    <div class="row g-0">
         
        <div class="col-lg-6">
            <div class="card text-white bg-dark mb-3" style="width: 95%;height:12rem;">
                <!-- <div class="card-header">Header</div> -->
                    <div class="card-body p-5">
                        <h5 class="card-title"><i class="bi bi-receipt-cutoff"></i> Ventas</h5>
                        <p class="card-text">Revisar las ventas realizadas en el sistema.</p>
                </div>
            </div>
        </div>
         
        <div class="col-lg-6">
            <div class="card text-white bg-dark mb-3" style="width: 95%;height:12rem;">
                <!-- <div class="card-header">Header</div> -->
                    <div class="card-body p-5">
                        <h5 class="card-title"><i class="bi bi-geo-fill"></i> Envíos</h5>
                        <p class="card-text">Revisar el estatus de los envíos por paquetería.</p>
                </div>
            </div>
        </div>
         
        <div class="col-lg-6">
            <div class="card text-white bg-dark mb-3" style="width: 95%;height:12rem;">
                <!-- <div class="card-header">Header</div> -->
                    <div class="card-body p-5">
                        <h5 class="card-title"><i class="bi bi-cloud-plus-fill"></i> Cargar catálogo</h5>
                        <p class="card-text">Cargar catálogo de productos en el sistema.</p>
                </div>
            </div>
        </div>
         
        <div class="col-lg-6">
            <div class="card text-white bg-primary mb-3" style="width: 95%;height:12rem;">
                <!-- <div class="card-header">Header</div> -->
                    <div class="card-body p-5">
                        <h5 class="card-title"><i class="bi bi-door-open-fill"></i> Salir</h5>
                        <p class="card-text">Salir del sistema.</p>
                </div>
            </div>
        </div>

     </div>
    </div>

    
</body>
</html>