<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</head>
<body class="fondo">
    <?php
        include("conexion.php");
        $link = Conectarse();
        $result = mysqli_query($link, "select * from prueba");
    ?>

    <div>
        <center>            
            
            <div class="container-sm">
                <div class="row">
                    <div class="col align-self-center">
                        <h1>
                            <p><em>Consulta Personas</em></p>
                        </h1>
                    </div>
                </div>
                <table class="table table-dark table-striped">
                    <tr>
                        <td>Id prueba</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                    </tr>
                    <?php
                        while($row=mysqli_fetch_array($result)){
                            printf("<tr>
                                        <td>%s</td>
                                        <td>%s</td>
                                        <td>%s</td>
                                    </tr>",$row['ID_PRUEBA'], $row['NOMBRE'], $row['APELLIDO']);
                        }
                        mysqli_free_result($result);
                        mysqli_close($link);
                    ?>
                </table>
            </div>
        </center>
    </div>
    
</body>
</html>