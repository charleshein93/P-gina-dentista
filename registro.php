 

<?php
$elim = filter_input(INPUT_POST, "elim");
$link = mysqli_connect("localhost", "root", "","horas") or die("Error " . mysqli_error($link));

$query4='select * from fechas';
$resulta=mysqli_query($link,$query4);
 error_reporting(E_ERROR);

if (!empty($elim)) {
    $id = $_POST[id];
    
    foreach ($id as $value) {
       
        $query = 'DELETE FROM fechas WHERE fechas.id='.$value.'';
        $resulta2=mysqli_query($link,$query);
        if ($resulta2) {
        $mensaje="Se elimino con exito";
         print "<script>alert('$mensaje')</script>";
        print("<script>window.location.replace('registro.php');</script>");
          
            
        }

       
    }
     error_reporting(E_ERROR);
}


?>

<!DOCTYPE html>
<html lang="es">
    
<head>
        
            <title>Clinica Barros Arana </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
             <link rel="stylesheet" href="css/stylesheet2.css">
        <link rel="stylesheet" href="css/stylesheet2.scss">
        <script src="scriptprincipal.js"></script>       
         <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
               
    </head>
    <body background="img/fondo3.jpg">
  
            <header>
               
                <nav>
                <hgroup>
                <h1><a href="index.html" ><IMG SRC="img/log.png" WIDTH=300 HEIGHT=75 ALIGN=left> </a></h1>
  
                </hgroup>
                    <ul>
                       <li><a href="registro.php" class="button"/>Registro de Horas</a></li>
                        <li><a href="agregarhoras.php" class="button"/>Agregar Horas</a></li>
                       
                      </ul>            
                </nav>
                </header>
       
       
        <form action="" method="post" name="frm" class="uno">
        <div id="horasf2">
            <table> 
    <thead>
        <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Nombre</th>
         <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
       <th>Rut</th>
        <th>Motivo</th>
        
        <th><input type="submit" value="eliminar" name="elim" align=center /></th>
        </tr>
    </thead>
    <tbody> 
        <?php
         while ( $row = $resulta->fetch_array() ):
            ?>
            <tr>        
            <td><?php echo $row[0]; ?> </td>
            <td><?php echo $row[1]; ?> </td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?> </td>
            <td><?php echo $row[4]; ?> </td>
            <td><?php echo $row[5]; ?> </td>
            <td><?php echo $row[6]; ?> </td>
            <td><?php echo $row[7]; ?> </td>
            <td><input type="checkbox"  name="id[]" value="<?php echo $row[8] ?>" /></td>
            </tr>
       <?php endwhile; ?>
    </tbody>
</table>
            </div>
         </form>
      
            
        
       <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        
        
        <script src="js/main.js"></script>

    </body>
   
</html>
