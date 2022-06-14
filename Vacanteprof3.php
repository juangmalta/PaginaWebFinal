<?php

@include 'config.php'; // Base de datos

session_start();

$vacante1 = "SELECT * FROM vacantes WHERE ID_vacante = 3";
$query = mysqli_query($conn, $vacante1);

$row = mysqli_fetch_array($query);

if (isset($_POST['Aplicate3'])){ 
  $_SESSION['Vacante'] = $row['ID_vacante'];
  header('location:UsuProf2.php');
}
?>

<!DOCTYPE html>
<html>
  <!--  This source code is exported from pxCode, you can get more document from https://www.pxcode.io  -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/Vacanteprof.css" />

    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/px2code/posize/build/v1.00.5.js"></script>
  </head>

  <body style="display: flex; flex-direction: column">
    <div class="vacanteprof vacanteprof-block layout">
      <div class="vacanteprof-cover-group2 layout">
        <div class="vacanteprof-cover-group1 layout" >
          <img class="Oracle" src="./assets/getinsoft.jfif">
    
         
        </div>

      </div>
  
      <div class="vacanteprof-group1 layout">
        <h5 class="vacanteprof-highlights4-box layout">
          <pre class="vacanteprof-highlights4"><span class="vacanteprof-highlights4-span0">Descripción
</span><span class="vacanteprof-highlights4-span1">  <?php echo $row['descripcion']; ?> 

</span><span class="vacanteprof-highlights4-span2">Objetivo del puesto:</span><span class="vacanteprof-highlights4-span3"> <?php echo $row['obj_puesto']; ?>


</span><span class="vacanteprof-highlights4-span4">Perfil Deseado:
</span><span class="vacanteprof-highlights4-span5">
<?php echo $row['perf_deseado']; ?>


</span><span class="vacanteprof-highlights4-span6">Conocimientos:
</span><span class="vacanteprof-highlights4-span7">
<?php echo $row['conocimientos']; ?>


</span><span class="vacanteprof-highlights4-span8">Funciones:
</span><span class="vacanteprof-highlights4-span9">
<?php echo $row['funciones']; ?></span></pre>
        </h5>
      </div>
      <div class="vacanteprof-group layout3">
        <div class="vacanteprof-group layout2"><div class="vacanteprof-group layout1"></div></div>
        <div class="vacanteprof-group layout">
          <div class="vacanteprof-group layout">
            <div class="vacanteprof-group layout">
              <div class="vacanteprof-group layout">
                <h2 class="vacanteprof-medium-title1-box layout">
                  <pre class="vacanteprof-medium-title1">
Empresa:<?php echo $row['empresa']; ?>

Índice de referencia salarial: <?php echo $row['sueldo']; ?>

Ubicación: <?php echo $row['ubicacion']; ?>

Nivel profesional: <?php echo $row['nivel_prof']; ?>

Campo Profesional: <?php echo $row['campo_prof']; ?></pre
                  >
                  <br>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form action="" method="post">
      <!-- <div class="vacanteprof-cover-block layout"><a href = "UsuProf1.php" style="text-decoration: none;"><div class="vacanteprof-text-body1 layout1">Aplicar ahora</div></a></div> -->
      <div class="vacanteprof-cover-block layout"><input type = "submit" name ="Aplicate3" value="Aplicar ahora" 
      style=
      "text-decoration: none; 
      font: 14px/1.57 'Abel', Helvetica, Arial, serif; color: white;
      position: relative;
      height: -webkit-min-content;
      height: -moz-min-content;
      height: min-content;
      margin: 11px 20px 11px 15px; 
      border: 0px;
      background-color: #0e6dff;">
      </div>
      </form>
      <div class="vacanteprof-paragraph-body layout2">
      <?php echo $row['intro']; ?> 
      </div>
      <div class="vacanteprof-group layout4">
        <h3 class="vacanteprof-subtitle layout"><?php echo $row['nombre_vac']; ?></h3>
      </div>
      <div class="vacanteprof-text-body2 layout6">#software</div>
      <div class="vacanteprof-text-body2 layout7">#trabajo</div>
      <div class="vacanteprof-text-body2 layout8">#intern</div>
      <div class="vacanteprof-small-text-body layout1">Publicado hoy 08:30 AM</div>
      <px-posize
        x="1664fr 48px 16fr"
        y="7px 46px 1064px"
        absolute="true"
        lg-x="1664fr 48px 16fr"
        lg-y="6px 46px 809px"
        md-x="1664fr 48px 16fr"
        md-y="5px 46px 533px"
        sm-x="1664fr 48px 16fr"
        sm-y="5px 46px 297px"
        xs-x="1664fr 48px 16fr"
        xs-y="5px 46px 179px"
        xxs-x="1664fr 48px 16fr"
        xxs-y="5px 46px 61px"
        tn-x="1664fr 48px 16fr"
        tn-y="5px 46px 5px"
        ><a href = "IntUsuProf.php" style="text-decoration: none;"><div class="vacanteprof-icon8" style="--src:url(http://localhost/PaginaWebFinal/assets/c39743a94e40f92fbc033634223cd9fd.png)"></div
      ></a></px-posize>

      <px-posize
        x="476fr 17px 1235fr"
        y="52px 27px 1038px"
        absolute="true"
        lg-x="476fr 17px 1235fr"
        lg-y="44px 27px 790px"
        md-x="476fr 17px 1235fr"
        md-y="36px 27px 521px"
        sm-x="476fr 17px 1235fr"
        sm-y="29px 27px 290px"
        xs-x="476fr 17px 1235fr"
        xs-y="25px 27px 175px"
        xxs-x="476fr 17px 1235fr"
        xxs-y="22px 27px 60px"
        tn-x="476fr 17px 1235fr"
        tn-y="20px 27px 5px"
        ><div
          class="vacanteprof-image14"
          style="--src:url(http://localhost/PaginaWebFinal/assets/a51c9108a4402e7c5140055632e9aec0.png)"
        ></div></px-posize
      ><px-posize
        x="475fr 48px 1205fr"
        y="271px 16px 830px"
        absolute="true"
        lg-x="475fr 48px 1205fr"
        lg-y="212px 16px 633px"
        md-x="475fr 48px 1205fr"
        md-y="147px 16px 420px"
        sm-x="475fr 48px 1205fr"
        sm-y="92px 16px 237px"
        xs-x="475fr 48px 1205fr"
        xs-y="65px 16px 145px"
        xxs-x="475fr 48px 1205fr"
        xxs-y="37px 16px 54px"
        tn-x="475fr 48px 1205fr"
        tn-y="19px 16px 5px"
        ><div class="vacanteprof-image16" style="--src:url(http://localhost/PaginaWebFinal/assets/6114b2c347029943866dcbc63887c051.png)"></div
      ></px-posize>
    </div>
    <script type="text/javascript">
      AOS.init();
    </script>
  </body>
</html>