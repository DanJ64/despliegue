<?php
    if (isset($_POST['boton'])){
        $nombre = $_POST["nombre"];
        $comentario = $_POST["comentario"];
        $fecha = date('H:i:s d/m/Y');

        $conexion = mysqli_connect('localhost','root','','webdespliegue');
        $stmt = $conexion->stmt_init();
        $stmt->prepare("INSERT INTO web (nombre, comentario, fechahora) VALUES(?, ?, ?)");
        $stmt->bind_param("sss",$nombre,$comentario,$fecha);
        $stmt->execute();
        $conexion->close();
    }

?>
<div class="container-fluid text-center">  
    <form action="#" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Introduce tu nombre" required>
        </div>
        <label for="comentario">Comentario</label>
        <div class="form-group">
            <textarea rows="3" cols="215" name="comentario" id="comentario" placeholder="Introduzca tu comentario aqui" required>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="boton">Guardar Comentario</button>
    </form>
    <div id="padre">
          <?php 
            $conexion = mysqli_connect('localhost','root','','webdespliegue');
            $stmt = $conexion->stmt_init();
            $stmt->prepare("SELECT nombre, comentario, fechahora FROM web");
            $stmt->execute();

            $resultado = $stmt->get_result();
            while($fila = $resultado->fetch_assoc()){
                echo '<div id="hijo"><p>' . $fila['nombre'] . '</p>' .
                    '<p>' . $fila['comentario'] . '</p>' .
                    '<p>' .$fila['fechahora'] . '</p></div>';
            }
          ?>  
    </div>
</div>