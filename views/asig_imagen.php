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
            <div class="text-center col-12 col-md-4 col-xl-4">
                <h1> Asignacion de Imagen </h1>
            </div>
            <div class="login text-right col-12 col-md-4 col-xl-4">  
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal3" >Cerrar sesion</button>    
            </div>            
        </div>
    </header>


    <div class="container_asig_imagen">
         <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
               <div class="row col-12 col-md-12 col-xl.12 ml-4">                  
                    <form class="form_asig_imagen">
                        <div class="form-box">
                            <label type="text" class="text-left ">Referencia</label>
                            <input type="text" name="txt_referencia" class="caja-texto form-control" placeholder="Referencia" required>
                        </div>
                        <div class="form-box">
                            <label type="text" class="text-left ">Color</label>
                            <input type="text" name="txt_color" class="caja-texto form-control" placeholder="Color" required>
                        </div>
                    </form>                    
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mt-2 mb-3">
                <div class="row col-12 col-md-12 col-xl-12 ml-4">
                    <div class="card">
                        <img width="350" height="500" class="img_asig_imagen" src="../img/TDF10063.jpg" alt="Card image">  
                        <div class="card-body">
                            <span ><strong>tdg2xxxxx</strong></span>
                        </div>                 
                    </div>  
                    <div class="row">
                        <div class="col-12 col-md-12 col-xl-12 mt-2">
                            <button type="button" class="btn btn-success">Seleccionar</button>                
                        </div>                                  
                    </div>  
                </div>
            </div>                       
        </div>
        
        <div class="row">
            <div class="col-12 col-md-12 col-xl-12 text-center">
                <button type="button" class="btn btn-success">Guardar</button>
            </div>  
        </div>      
    </div>



    <footer class="piedepagina">
        <small>Industrias Maviltex S.A.S © 2021 All Rights Reserved</small> 
    </footer>

</body>
</html>
