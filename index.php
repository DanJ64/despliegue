<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/main.css">
    <link rel="stylesheet" href="style/css/cajaComentarios.css">
    
    <!--JS Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <title>Code Learning</title>
</head>
<body>

    <!--HEADER-->
    <?php require_once("includes/layout/header.inc");?>

    <!--NAVBAR-->
    <?php require_once("includes/layout/navbar.inc") ?>

    <!--CONTENIDO-->
    <?php require_once("includes/layout/section.inc"); ?>

    <!--COMENTARIO-->
    <?php
        
        if(isset($_GET['ctl'])){
            require_once("includes/controlador/comentarios.php");
        }
    ?>
    

    <!--FOOTER-->
    <?php require_once("includes/layout/footer.inc") ?>

</body>
</html>