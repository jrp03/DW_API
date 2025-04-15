<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- estilos para la página -->
    <link rel="stylesheet" href="css/def.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/nav.css">

    
</head>
<body>
    
    <?php
        include "helper/header.php";
    ?>    

    <div class="container max-width">
        <?php include "helper/nav.php"; ?>
        <main class="main">
                <?php 
                    $get = $_GET["index"];
                    if(!isset($_GET["index"])){
                        echo "<script>window.location.replace('http://localhost/DW/?index')</script>";
                    }
                    switch ($get){
                    case "menu_asesor": 
                        include "views/vista_asesor.php";
                        
                    break;
                    case "registro_asesor":
                        include "views/registro_asesor.php";
                        break;
                    case "view_asesores": 
                        include "views/ver_registros_asesores.php";  
                    break;
                    case "registro_maestro": 
                        include "views/registro_maestro.php";  
                    break;
                    case "registro_solicitud": 
                        include "views/registro_solicitud.php";  
                    break;  
                    
                    default: 
                        include "views/vista_principal.php";
                } ?>
            
        </main>
    </div>

<script src="js/script.js"></script>
</body>
</html>