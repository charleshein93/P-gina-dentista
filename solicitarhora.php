<?php
$buscarboton = filter_input(INPUT_POST, "buscar");
  $nombre = filter_input(INPUT_POST, "nombre");
  $direc = filter_input(INPUT_POST, "direccion");
  $tel = filter_input(INPUT_POST, "telefono");
  $rut = filter_input(INPUT_POST, "rut");
  $mail = filter_input(INPUT_POST, "mail");
  $dia = filter_input(INPUT_POST, "dias");
  $moti = filter_input(INPUT_POST, "motivo");
  
$link = mysqli_connect("localhost", "root", "","horas") or die("Error " . mysqli_error($link));
    $diafinal = explode("/","$dia");
    $query4='select * from `fechas libres`';
    $resulta=mysqli_query($link,$query4);




?>
<!DOCTYPE html>


    
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
                <h1><a href="index.html" ><IMG SRC="img/log.png" WIDTH=270 HEIGHT=68 ALIGN=left> </a></h1>
  
                </hgroup>
                    <ul>
                        <li><a href="proyecto.html">Quienes somos</a></li>
                        <li><a href="proyecto.html">Tecnologia</a></li>
                       <li><a href="facilpago.html">Facilidades de pagos</a></li>
                        <li><a href="facilpago.html">Convenios</a> </li>
                        <li><a href="tratamientos.html">Tratamientos</a></li>
                        <li><a href="solicitarhora.php" class="button"/>Solicita tu Hora</a></a></li>
                       
                      </ul>            
                </nav>
                </header>
       
        <div id="textoPr2">
                       <div class="li1">
                        <hgroup>
                             
                       <li><a href="index.html">Inicio</a></li>
                        <li><a href="proyecto.html">Tecnologia</a></li>
                       <li><a href="facilpago.html">Facilidades de pagos</a></li>
                        <li><a href="facilpago.html">Convenios</a> </li>
                        <li><a href="tratamientos.html">Tratamientos</a></li>
                        
                       
                                 
                        </hgroup>
                           </div>
                        <div class="li2">
                         <li><a href="https://www.facebook.com/Cl%C3%ADnica-Dental-Barros-Arana-Osorno-865294843563254/?fref=ts"><IMG SRC="img/fac.png" WIDTH=100 HEIGHT=100 ALIGN=left></a></li>
                        <li><a href="proyecto.html"><IMG SRC="img/ins.png" WIDTH=100 HEIGHT=100 ALIGN=left></a></li>
                        <li><a href="servicios.html"><IMG SRC="img/t2.png" WIDTH=100 HEIGHT=100 ALIGN=left></a></li>
                       
                        </div>
                                           
                    </div>
        <form action="" method="post" name="frm" class="uno">
        <div id="horasf">
            <ul>
                <li  >Nombres y Apellidos <input type="text" name="nombre" placeholder='Escribe su nombre completo' required></li>
                
                <li>Dirección<input type="text" name="direccion" placeholder='Escriba su direccion' required></li>
                <li>Telefono <input type="tel" name="telefono" placeholder='Digite su numero celular'required></li>
                <li>Rut<input type="text" name="rut" placeholder='Escriba su rut' required></li>
                <li>E-mail <input type="email" name="mail" placeholder='Escriba su correo'  required></li>
                <li>Motivo<input type="text" name="motivo" placeholder='Escriba su motivo principal' required></li>
                
                <li>Selecciona algunos de los dias disponibles<select  name="dias" required>
                      
                        <option  value="ninguno"> Ningun horario seleccionado</option>
                     <?php while ( $row = $resulta->fetch_array() ) { ?>
                         
                        <option  value="<?php printf ("%s / %s\n", $row[1], $row[2]);?>"> <?php printf ("%s / %s\n", $row[1], $row[2]);?> </option>
                     <?php   }   ?>
                    </select></li>              
                <li> <input type="submit" value="Solicitar" name="buscar" class="button" /></li>
            </ul></div>
            </form>
      <footer>
            
                    <div class="valores">            
                        <a>Podría interesarte</a>
                       
                        <li><p><a href="podriainteresarte.html">3 cosas sobre salud bucal que debes saber si estás embarazada</a></p></li>
                        <li><p><a href="podriainteresarte.html">¿Por qué mis dientes tienen sensiblidad?</a></p></li>
                        <li><p><a href="podriainteresarte.html">3 razones para cambiar tu cepillo de dientes</a></p></li>
                    </div>
                    <div class="info1">  
                      
                      <a>Acerca de nosotros</a>
                      <li><a href="proyecto.html"><p>Especialistas</p></a></li>
                      <li><a href="tecnologia.html"><p>Nuevas tecnologías</p></a></li>
                     </div>
                    <div class="normas">
                        <a>Especialidades</a>
                        <p ><a href="tratamientos.html">Ortodoncia</a></p>
                        <p ><a href="tratamientos.html">Endodoncia</a></p>
                        </div>
            <h1><a href="login.php" ><IMG SRC="img/log.png" WIDTH=300 HEIGHT=75 ALIGN=right></a></h1>
        </footer>   
            
        
       <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        
        
        <script src="js/main.js"></script>

    </body>
   

</html>
<?php
 
  

   
  // $link = mysqli_connect("localhost", "root", "","horas") or die("Error " . mysqli_error($link));
    //$diafinal = explode(" ","$dia");
    //$query4='select * from `fechas libres`';
    //$resulta=mysqli_query($link,$query4);
 
         
     
   
if(!empty($buscarboton)){
   // if (empty($nombre) || empty($direc) || empty($tel) || empty($rut) || empty($mail) || $dia == "dia1" || empty($moti)) {
     //          echo"<script>alert('rellene correctamente el formulario)</script>";
       //         exit;

   $query = "INSERT INTO  fechas(fecha,hora,nombre,direccion,telefono,correo,rut,motivo) VALUE ('$diafinal[0]','$diafinal[1]','$nombre','$direc','$tel','$mail','$rut','$moti')";
   $result = mysqli_query($link,$query);
   $query2 = "DELETE FROM `fechas libres` WHERE fecha='$diafinal[0]' AND hora='$diafinal[1]'";
   $result2 = mysqli_query($link,$query2);

    if ($result && $result2){
        $mensaje="Su hora se registro con exito";
        
     // echo"<script>alert('$mensaje')</script>";
    print "<script>alert('$mensaje')</script>";
 print("<script>window.location.replace('solicitarhora.php');</script>");
   
    }else{
       echo mysqli_error($link);
   }
        
}


