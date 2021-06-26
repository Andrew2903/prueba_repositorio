<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="../img/logo.png" href="../img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Maviltex</title>

    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Cargamos fuentes -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
    <!-- Cargamos los estilos de nustro js datatable -->
    <link rel="stylesheet" type="text/css" href="../css/datatables.min.css"/>
    <!-- Cargamos las librerias de estilo de nuestros iconos -->
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <!-- Cargamos nuestros estilos de ultimos para que sean los ultimos cambios que tome -->   
    <link rel="preload" href="../css/estilo.css" as="style">
    <link href="../css/estilo.css" rel="stylesheet" >

    <!-- jquery invocaciones -->
    <!-- El jquery siempre debe ir de primero por las interaciones con otros diseños -->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <!-- estilos boostrap siempre deben ir debajo del jquery -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- Libreria para cargar el estilo de bisqueda de las tablas -->
    <script type="text/javascript" src="../js/datatables.min.js"></script>
    <!-- Esta libreria es la que nos hace cargar los iconos de fontawesome -->
    <script type="text/javascript" src="../js/all.js"></script>	
    <!-- Se cargar nuestros propias funciones js -->
    <script type="text/javascript" src="../js/main.js"></script>
</head>

    
</body>
    <header class="encabezado"> 
        <div class="row">
            <div class="logo col-12 col-md-4 col-xl-4">
                <img src="../img/Logo Maviltex-02-02.png">
            </div>
            <div class="col-12 col-md-4 col-xl-4">
                <h1> DashBoard </h1>
            </div>
            <div class="login text-right col-12 col-md-4 col-xl-4">  
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal3" >Cerrar sesion</button>    
            </div>            
        </div>
    </header>

    <div class="contenedor">
        <div class="card">
            <button type="button" class="boton-menu d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                <i class="fas fa-bars"></i>  
            </button>
            <div class="card-body">  
                <nav  id="menu-principal" class="collapse">
                    <ul>
                        <li><a href="#">item 1</a></li>
                        <li><a href="#">item 2</a>
                            <ul>
                                <li><a href="#">sub_item 1</a></li>
                                <li><a href="#">sub_item 2</a></li>
                                <li><a href="#">sub_item 3</a>
                                    <ul>
                                        <li><a href="#">Sub_subitem 1</a></li>
                                        <li><a href="#">Sub_subitem 2</a></li>
                                        <li><a href="#">Sub_subitem 3</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="#">sub_item 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">item 3</a></li>
                        <li><a href="#">item 4</a>
                            <ul>
                                <li><a href="#">Sub_subitem 1</a></li>
                                <li><a href="#">Sub_subitem 2</a>
                                    <ul>
                                        <li><a href="#">Sub_subitem 1</a></li>
                                        <li><a href="#">Sub_subitem 2</a></li>
                                        <li><a href="#">Sub_subitem 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sub_subitem 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">item 5</a></li>
                    </ul>        
                </nav> 
            </div>
        </div>       
    </div>    

    <footer class="piedepagina">
        <small>Industrias Maviltex S.A.S © 2021 All Rights Reserved</small> 
    </footer>

</body>
</html>
