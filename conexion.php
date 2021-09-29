
<?php
    function Conectarse(){
        if (!($link = mysqli_connect("localhost","root","", "webuno"))) {
              echo "Error de conexion ";
        exit();
            }
        return $link;
    }

    $link = Conectarse();
?>
