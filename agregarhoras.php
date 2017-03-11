<?php
$elim = filter_input(INPUT_POST, "elim");
$link = mysqli_connect("localhost", "root", "","horas") or die("Error " . mysqli_error($link));
$fecha = filter_input(INPUT_POST, "fecha");
$hora = filter_input(INPUT_POST, "tiempo");
$fecha1 = filter_input(INPUT_POST, "fecha1");
$hora1 = filter_input(INPUT_POST, "tiempo1");
$fecha2 = filter_input(INPUT_POST, "fecha2");
$hora2 = filter_input(INPUT_POST, "tiempo2");
$agregar = filter_input(INPUT_POST, "Agregar");
 error_reporting(E_ERROR);
 
 $query4='select * from `fechas libres`';
 
$resulta=mysqli_query($link,$query4);
 error_reporting(E_ERROR);


 
 
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
        <div id="ahoras">
             <form action="" method="post" name="frm">
                 
          <ul>
                <li>Fecha <input type="date" name="fecha"  required></li>
                
                <li>Hora<input type="time" name="tiempo"  required></li>
                <li>Fecha <input type="date" name="fecha1"  required></li>
                
                <li>Hora<input type="time" name="tiempo1"  required></li>
                <li>Fecha <input type="date" name="fecha2"  required></li>
                
                <li>Hora<input type="time" name="tiempo2"  required></li>
                <li><input type="submit" value="Agregar" name="Agregar" class="button" /></li>
                      
                      </ul>
             </form>
        </div>
           <form action="" method="post" name="frm" class="uno">
        <div id="horas2">
            <table> 
    <thead>
        <tr>
        <th>Fecha</th>
        <th>Hora</th>
     
        
        <th><input type="submit" value="eliminar" name="elim" align=center /></th>
        </tr>
    </thead>
    <tbody> 
        <?php
         while ( $row = $resulta->fetch_array() ):
            ?>
            <tr>

            <td><?php echo $row[1]; ?> </td>
            <td><?php echo $row[2]; ?> </td>
       
            <td><input type="checkbox"  name="id[]" value="<?php echo $row[0] ?>" /></td>
            </tr>
       <?php endwhile; ?>
    </tbody>
</table>
            </div>
            
        
       <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        
        
        <script src="js/main.js"></script>

    </body>
   
</html>
<?php
if(!empty($agregar)){
    $query = "INSERT INTO  `fechas libres`(fecha,hora) VALUE ('$fecha','$hora') ";
     $query2 =" INSERT INTO  `fechas libres`(fecha,hora) VALUE ('$fecha1','$hora1') ";
     $query3 =" INSERT INTO  `fechas libres`(fecha,hora) VALUE ('$fecha2','$hora2') ";
   $result = mysqli_query($link,$query);
    $result1 = mysqli_query($link,$query2);
     $result2 = mysqli_query($link,$query3);
    if ($result && $result1 && $result2){
        $mensaje="Su hora se registro con exito";
        
     // echo"<script>alert('$mensaje')</script>";
    print "<script>alert('$mensaje')</script>";
 print("<script>window.location.replace('agregarhoras.php');</script>");
   
    }else{
       echo mysqli_error($link);
   }
}
if (!empty($elim)) {
    $id = $_POST[id];
    
    foreach ($id as $value) {
       
        $query = 'DELETE FROM `fechas libres` WHERE `fechas libres`.id='.$value.'';
        $resulta2=mysqli_query($link,$query);
        if ($resulta2) {
        $mensaje="Se elimino con exito";
         print "<script>alert('$mensaje')</script>";
        print("<script>window.location.replace('agregarhoras.php');</script>");
          
            
        }

       
    }
     error_reporting(E_ERROR);
}