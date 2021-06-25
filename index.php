<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="img/logo.png" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Maviltex</title>

    <link rel="stylesheet" href="css/normalize.css">
    <!-- Cargamos fuentes -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
    <!-- Cargamos los estilos de nustro js datatable -->
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
    <!-- Cargamos las librerias de estilo de nuestros iconos -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <!-- Cargamos nuestros estilos de ultimos para que sean los ultimos cambios que tome -->   
    <link rel="preload" href="css/estilo.css" as="style">
    <link href="css/estilo.css" rel="stylesheet" >

    <!-- jquery invocaciones -->
    <!-- El jquery siempre debe ir de primero por las interaciones con otros diseños -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- estilos boostrap siempre deben ir debajo del jquery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Libreria para cargar el estilo de bisqueda de las tablas -->
    <script type="text/javascript" src="js/datatables.min.js"></script>
    <!-- Esta libreria es la que nos hace cargar los iconos de fontawesome -->
    <script type="text/javascript" src="js/all.js"></script>	
    <!-- Se cargar nuestros propias funciones js -->
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">      
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="logologin" src="img/logo.png" >              
            </div>
            <div>
                <h3 class="info text-center">Iniciar Sesión <br> Catalogo Maviltex</h3>
            </div>
            <div class="modal-login">
                <form>
                    <div class="form-box">
                      <input type="text" name="CodUsuario" class="caja-texto" placeholder="Codigo usuario" required>
                    </div>
                    <div class="form-box">
                      <input type="password" name="password" id="password" class="caja-texto" placeholder="Contraseña" required>
                    </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" >Ingresar</button>
            </div>          
      </div>
    </div>
  </div>

  <header class="encabezado"> 
      <div class="row">
          <div class="logo col-12 col-md-4 col-xl-4">
              <img src="img/Logo Maviltex-02-02.png">
          </div>
          <div class="col-12 col-md-4 col-xl-4">
              <h1> Tendencias </h1>
          </div>
          <div class="login text-right col-12 col-md-4 col-xl-4">  
              <button type="button" class="btn btn-outline-success"data-toggle="modal" data-target="#exampleModal3" >login</button>    
          </div>
      </div>
  </header>

  <section class="imagenes">
      <div class="container"> 
        <div class="row">
              <div class="col-12 col-md-3 col-xl-3 mt-2">
                <div class="card">
                  <div class="card-body">
                    <span class="text-center"><strong>tdg2xxxxx</strong></span>
                  </div>
                  <div class="row">
                    <div class="text-center col-12 mt-2 mb-2 width=350 height=500">                  
                      <img class="imgtendencias" src="img/TDV10006.jpg" alt="Card image">
                    </div>
                  </div>               
                </div>                
              </div> 
              <div class="col-12 col-md-3 col-xl-3 mt-2">
                <div class="card">
                  <div class="card-body">
                    <span class="text-center"><strong>tdg2xxxxx</strong></span>
                  </div>
                  <div class="row">
                    <div class="text-center col-12 mt-2 mb-2">                  
                      <img class="imgtendencias" src="img/TDV10006.jpg" alt="Card image">
                    </div>
                  </div>    
                </div>                
              </div>   
              <div class="col-12 col-md-3 col-xl-3 mt-2">
                <div class="card">
                  <div class="card-body">
                    <span class="text-center"><strong>tdg2xxxxx</strong></span>
                  </div>
                  <div class="row">
                    <div class="text-center col-12 mt-2 mb-2">                  
                      <img class="imgtendencias" src="img/TDV10006.jpg" alt="Card image">
                    </div>
                  </div>    
                </div>                
              </div>   
              <div class="col-12 col-md-3 col-xl-3 mt-2">
                <div class="card">
                  <div class="card-body">
                    <span class="text-center"><strong>tdg2xxxxx</strong></span>
                  </div>
                  <div class="row">
                    <div class="text-center col-12 mt-2 mb-2">                  
                      <img class="imgtendencias" src="img/TDV10006.jpg" alt="Card image">
                    </div>
                  </div>    
                </div>                
              </div>   
              <div class="col-12 col-md-3 col-xl-3 mt-2">
                <div class="card">
                  <div class="card-body">
                    <span class="text-center"><strong>tdg2xxxxx</strong></span>
                  </div>
                  <div class="row">
                    <div class="text-center col-12 mt-2 mb-2">                  
                      <img class="imgtendencias" src="img/TDV10006.jpg" alt="Card image">
                    </div>
                  </div>    
                </div>                
              </div>   
              <div class="col-12 col-md-3 col-xl-3 mt-2">
                <div class="card">
                  <div class="card-body">
                    <span class="text-center"><strong>tdg2xxxxx</strong></span>
                  </div>
                  <div class="row">
                    <div class="text-center col-12 mt-2 mb-2">                  
                      <img class="imgtendencias" src="img/TDV10006.jpg" alt="Card image">
                    </div>
                  </div>    
                </div>                
              </div>              
        </div>                  
      </div>    
  </section>

  <footer class="piedepagina">
      <small>Industrias Maviltex S.A.S © 2021 All Rights Reserved</small> 
  </footer>

</body>
</html>