<?php
$servidor = "localhost";
$baseDeDatos = "ruby";
$usuario = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);
// Check connection
if (!$enlace) {
    {

        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruby</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        
        <nav class="navbar navbar-expand-sm navbar-light ">
            <a class="navbar-brand" href="#"><h1>Ruby</h1></a>
            
            <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="navbar-nav ">
                
                <li class="nav-item">
                  <a class="nav-link" href="#modelo"><h3>Modelos</h3></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#acerca"><h3>Acerca de nosotros</h3></a>
                </li>
                
              </ul>
            </div>
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target= "#modalNuevo"><h3>Contatanos</h3></button>
          </nav>
    </header>
    <div>
        <main>
            <article id="modelo">
                <div class="container-fluid">
                    <div class="row">

                        ​<div class="pic col-md">
                            <picture>
    
                                <img src="/images/sueter.jpg" class="rounded center-block img-responsive" alt="Sueter">
                                <p>Este es un sueter con lana</p>
                            </picture>
                        </div>
                        ​<div class="pic col-md">
                            <picture>
    
                                <img src="/images/sw-raya.jpg" class="rounded center-block img-responsive" alt="Sueter">
                                <p>Este es un sueter de algodon</p>
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        ​<div class="pic col-md">
                            <picture>
    
                                <img src="/images/jean.jpg" class="rounded center-block img-responsive" alt="Sueter">
                                <p>Jeans vaqueros</p>
                            </picture>
                        </div>
                        ​<div class="pic col-md">
                            <picture>
    
                                <img src="/images/jeans.jpg" class="rounded center-block img-responsive" alt="Sueter">
                                <p>Tonos de jeans</p>
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        ​<div class="pic col-md">
                            <picture>
    
                                <img src="/images/ou3.jpg" class="rounded center-block img-responsive" alt="botas">
                                <p>Outfit con botas</p>
                            </picture>
                        </div>
                        ​<div class="pic col-md">
                            <picture>
    
                                <img src="/images/outfi.jpg" class="rounded center-block img-responsive" alt="tenis">
                                <p>Outfit con tenis</p>
                            </picture>
                        </div>
                    </div>
                </div>
                
                
            </article>
            <div id="acerca">
                <h1>Ruby</h1>
                <div class="row">
                    <div col-6>

                        <h2>¿Quiénes somos?</h2>
                        <p>Ruby es una empresa productora de ropa para dama 100% mexicana que se ha caracterizado por
                             adaptarse a las nuevas tendencias y satisfacer a sus clientes en todo momento como una 
                            forma de vida que alcanza mediante la excelente atención y la alta calidad de productos que ofrece a precios increíbles.</p>
                    </div>
                    <div col-6>

                        <h2>Misión</h2>
                        <p>La misión de Ruby es brindar todo momento a través de la excelente atención y la moda siempre al mejor precio, ofreciendo productos especialmente para dama confeccionados bajo los más altos estándares de calidad. Buscamos la evolución manteniendo nuestros diseños al paso de las últimas tendencias del mercado.
                            Ruby llenará tu guardarropa de modelos hermosos, cómodos, vanguardistas, distintivos y con mucho estilo que sigan proyectando a la mujer como una figura elegante, segura y femenina.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
  
      <!-- modal -->            
      </div>
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="laberNuevo">Nuevo cliente</h5>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="generales">
                  <h5>Generales</h5>
                  <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                    <input type="text" class="form-control" id="nombre" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  <div class="input-group input-group-sm mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Apellido Paterno:</span>
                      <input type="text" class="form-control" id="a_paterno" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido Materno:</span>
                        <input type="text" class="form-control" id="a_Materno" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    
                    <div class="row g-2 align-items-center">
                        
                        <div class="col-auto">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Edad:</span>
                                <input type="text" class="form-control" id="edad" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            
                        </div>
                        <div class="col-auto">
                            <div class="row">
                                <div class="col-auto">
                                    <span>Sexo:</span>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm">
                                        <option value="H">Hombre</option>
                                        <option value="M">Mujer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                          <span class="input-group-text" id="inputGroup-sizing-sm">correo</span>
                          <input type="text" class="form-control" id="nombre" aria-describedby="inputGroup-sizing-sm">
                        </div>
                  </div>
                </div>
                
    
                
                
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
              Agregar
              </button>
              
             
            </div>
          </div>
        </div>
      </div>


    <footer>
        <div class="d-flex flex-column align-items-center">
            <h4 class="mb-4">Siguenos</h4>
            <ul>
                <li>
                    <span class="social-icon social-google"><i class="fa fa-google"></i></span>
                </li>
                <li>
                    <span class="social-icon social-facebook"><i class="fa fa-facebook"></i></span>
                </li>
                <li>
                    <span class="social-icon social-linkedin"><i class="fa fa-linkedin"></i></span>
                </li>
                <li>
                    <span class="social-icon social-instagram"><i class="fa fa-instagram"></i></span>
                </li>
                <li>
                    <span class="social-icon social-twitter"><i class="fa fa-twitter"></i></span>
                </li>
            </ul>
        </div>
    </footer>
    
</body>
</html>

<?php
    if(isset($_POST('registro'))){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $elefono = $_POST["telefono"];
    }
    $insertardatos = "INSERT INTO datos VALUES ()";
    $ejecutar = mysqli_query($enlace,$insertardatos);
    if(!$ejecutar){echo "Error en sql"}
?>