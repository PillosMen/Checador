
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>PilloSystems;</title>

    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/all.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
   
    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />

  </head>

 
    <div class="contain-to-grid">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="/dashboard/index.html"><strong>Pillos Systems;</strong></a></h1>
          </li>
          <li class="toggle-topbar menu-icon">
            <a href="#">
              <span>Menu</span>
            </a>
          </li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
          
              <li class=""><a href="login.php">Login</a></li>
          </ul>
        </section>
      </nav>
    </div>

    <div id="wrapper">
      <div class="hero">
  <div class="row">
    <div class="large-12 columns">
      <h1><img src="img/LogoCTA.png" />PillOS <span>Checador + Control de horas</span></h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <center>
      <div style="text-align:center;width:400px;padding:1em 0;"> <h2><span style="text-decoration:none;">Guadalajara, México</span></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&timezone=America%2FMexico_City" width="100%" height="150" frameborder="0" seamless></iframe></div>
    </center>
  </div>
</div>

<?php
# definimos los valores iniciales para nuestro calendario
$month=date("n");
$year=date("Y");
$diaActual=date("d");

//Cachar la hora actual y fecha---------
//$time = time();
//echo date("d-m-Y (H:i:s)", $time);
//--------------------------------------

# Obtenemos el dia de la semana del primer dia
# Devuelve 0 para domingo, 6 para sabado
$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
 
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>

<div class="calendario"><center>
  <table id="calendar">
    <caption><?php echo $meses[$month]." ".$year?></caption>
    <tr>
      <th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
      <th>Vie</th><th>Sab</th><th>Dom</th>
    </tr>
    <tr bgcolor="silver">
      <?php
      $last_cell=$diaSemana+$ultimoDiaMes;
      // hacemos un bucle hasta 42, que es el máximo de valores que puede
      // haber... 6 columnas de 7 dias
      for($i=1;$i<=42;$i++)
      {
        if($i==$diaSemana)
        {
          // determinamos en que dia empieza
          $day=1;
        }
        if($i<$diaSemana || $i>=$last_cell)
        {
          // celca vacia
          echo "<td>&nbsp;</td>";
        }else{
          // mostramos el dia
          if($day==$diaActual)
            echo "<td class='hoy'>$day</td>";
          else
            echo "<td>$day</td>";
          $day++;
        }
        // cuando llega al final de la semana, iniciamos una columna nueva
        if($i%7==0)
        {
          echo "</tr><tr>\n";
        }
      }
    ?>
    </tr>
  </table>

</div></center>

<div class="row">
  <div class="large-9 columns">
    
  </div>
</div>

<div class="row">
  <div class="large-12 columns">
    <center>
    <table width="700px" cellspacing="0">
        <tr>
            <th>Nombre</th>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>Adrian Everardo Segura Garcia</a></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Ponce Rodríguez Jotran Maximiliano</td>
            <td>Mar,18.Jul 2017 9:10:06 am</td>
            <td>Mar,18.Jul 2017 16:15:50 pm</td>
        </tr>
        <tr>
            <td>Melissa Aimeé Wade Laurent</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Romero Huerta Berenice Del Rocio</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Andrea Mejia Sebastian</td>
            <td></td>
            <td></td>
         </tr>
        <tr>
            <td>Hilario Ponce Fierros</td>
            <td></td>
            <td></td>
         </tr>
          <tr>
            <td>Erika Ivette Coronado Mendoza</td>
            <td></td>
            <td></td>
        </tr>
          <tr>
            <td>Jose Guadalupe Gonzalez Becerra</td>
            <td></td>
            <td></td>
        </tr>

    </table></center>

     
  </div>
</div>

    </div>

    <footer>
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-8 columns">
              <ul class="social">
  <li class="twitter"><a href="https://twitter.com/cutonala_udg">Follow us on Twitter</a></li>
  <li class="facebook"><a href="https://www.facebook.com/centrouniversitariodetonala">Like us on Facebook</a></li>
  <li class="google"><a href="https://www.youtube.com/user/cutonala">Add us to your G+ Circles</a></li>
</ul>

              <ul class="inline-list">
                <li><a href="https://www.apachefriends.org/blog.html">Blog</a></li>
                <li><a href="https://www.apachefriends.org/privacy_policy.html">Privacidad</a></li>
           

              </ul>
            </div>
            <div class="large-4 columns">
              <p class="text-right">Copyright (c) 2017, Pillos Systems;</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  
  </body>
</html>
