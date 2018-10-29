<!DOCTYPE html>
<html>
<title>TIC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="/TIC" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Inicio</a>
  <a href="/TIC/proyectos.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Proyectos</a>
  <a href="/TIC/lineas.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Lineas de Investigación</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Eventos</a>
  <a href="/TIC/publicaciones-y-congresos.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Publicaciones y Congresos</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Investigadores <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Dr. Ostos</a>
      <a href="#" class="w3-bar-item w3-button">Dr. Félix</a>
      <a href="#" class="w3-bar-item w3-button">Dr. Mena</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Proyectos</a>
    <a href="#work" class="w3-bar-item w3-button">Ciencia</a>
    <a href="#pricing" class="w3-bar-item w3-button">Eventos</a>
    <a href="#contact" class="w3-bar-item w3-button">Contactanos</a>
    <a href="#" class="w3-bar-item w3-button">Buscar</a>
  </div>
</div>

  <!-- Image Header -->
    <!--
  <div class="w3-display-container w3-animate-opacity">
    <img src="/TIC/Fotos/mca2.png" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  </div>-->
  <br><br>
  <div class="container" style="width:100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" >
        <img src="/TIC/Fotos/portadaTIC2.jpg" style="margin-left: auto;margin-right: auto;">
      </div>
      <div class="item">
        <img src="/TIC/Fotos/sala.jpg" style="margin-left: auto;margin-right: auto;">
      </div>
      <div class="item">
        <img src="/TIC/Fotos/gal1.jpg" style="margin-left: auto;margin-right: auto;">
      </div>
      <div class="item">
        <img src="/TIC/Fotos/gal2.jpg" style="margin-left: auto;margin-right: auto;">
      </div>
      <div class="item">
        <img src="/TIC/Fotos/gal3.jpg" style="margin-left: auto;margin-right: auto;">
      </div>
      <div class="item">
        <img src="/TIC/Fotos/gal4.jpg" style="margin-left: auto;margin-right: auto;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <!--Publicaciones-->
<div style="width:100%;">
  <div class="w3-quarter" style="background-color:#088A68; width:100%;text-align:center;">
    <h1 style="color:white;">Publicaciones</h1>
  </div>
    <div class="w3-row">
      <div class="w3-quarter" style="margin:20px;margin-top: 5px;text-align: center;width:30%">
        <h3>“Outcome-Driven Thresholds for Ambulatory Pulse Pressure in 9938 Participants Recruited From 11 Populations”</h3>
        <p>Gu YM, Thijs L, Li Y, Asayama K, Boggia J, Hansen TW, Liu YP, Ohkubo T, Björklund-Bodegård K, Jeppesen J, Dolan E, Torp-Pedersen C, Kuznetsova T, Stolarz-Skrzypek K,  Tikhonoff V, Malyutina S, Casiglia E, Nikitin Y, Lind L, Sandoya E, Kawecka-Jaszcz K, Imai Y, Mena LJ, et al.</p>
        <p>Hypertension, vol.  63, pp. 229-237, 2014.</p>
        <p><a href="/TIC/PubConLink/2014 Outcome-Driven Thresholds for Ambulatory Pulse Pressure in 9938 People Recruited from 11 Populations.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
      <div class="w3-quarter" style="margin:20px;margin-top: 5px;text-align: center;width:30%">
        <h3>“How many measurements are needed to estimate blood pressure variability without loss of prognostic information?”</h3>
        <p>Mena LJ, et al.</p>
        <p>American Journal of Hypertension, vol. 27, no. 1, pp. 46-55, 2014</p>
        <p><a href="/TIC/PubConLink/2014 How Many Measurements are Needed to Estimate Blood Pressure Variability Without Loss of Prognostic Information.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
      <div class="w3-quarter" style="margin:20px;margin-top: 5px;text-align: center;width:30%">
        <h3>“Mobile personal health system for ambulatory blood pressure monitoring”</h3>
        <p>Mena LJ, Felix VG, Ostos R, Gonzalez JA, Cervantes A, Ochoa A, Ruiz C, Ramos R, Maestre GE.</p>
        <p>Computational and Mathematical Methods in Medicine, vol. 2013, pp. 1-12, 2013.</p>
        <p><a href="/TIC/PubConLink/2013 Mobile personal health system for ambulatory blood pressure monitoring.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-quarter" style="margin:20px;margin-top: 10px;width:10%;">
      </div>
      <div class="w3-quarter" style="margin:30px;margin-top: 10px;text-align: center;width:30%">
        <h3>“El m-learning como soporte para la construcción de conocimiento en la enseñanza de las ciencias”</h3>
        <p>Orozco EE, Montoya JV, Félix VG, Mena LJ.</p>
        <p>Tecnologías y Aprendizaje. Avances en Iberoamérica, vol. 1, pp. 20-27, 2013.</p>
        <p><a href="/TIC/PubConLink/2013 El m-Learning como soporte para la construcción de conocimiento en la enseñanza de las Ciencias.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>

      <div class="w3-quarter" style="margin:30px;margin-top: 10px;text-align: center;width:30%;">
        <h3>“Desarrollo de una aplicación de localización con recorrido virtual implementado tecnología móvil MTI” </h3>
        <p>Saucedo I, Briseño A, Mena LJ, Osuna G.</p>
        <p>Proceedings del Congreso Internacional de Investigación Academia Journals Cd. Juárez 2013, pp. 718-721, 2013.</p>
        <p><a href="/TIC/PubConLink/2013 Desarrollo de una aplicación de localización con recorrido virtual implementado tecnología móvil.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
      <div class="w3-quarter" style="margin:20px;margin-top: 10px;width:10%;" >
      </div>
    </div>
  </div>

  <!--Congresos-->

<div style="width:100%;">
  <div class="w3-quarter" style="background-color:#088A68; width:100%;text-align:center;">
    <h1 style="color:white;">Congresos</h1>
  </div>
    <div class="w3-row">
      <div class="w3-quarter" style="margin:30px;margin-top: 0px;text-align: center;width:28%;">
        <h3>“El m-learning como soporte para la construcción de conocimiento en la enseñanza de las ciencias”</h3>
        <p>Orozco EE, Montoya JV, Félix VG, Mena LJ.</p>
        <p>Conferencia Conjunta Iberoamericana sobre Tecnología y Aprendizaje 2013, Cancún, Quintana Roo, México, 2013.</p>
        <p><a href="/TIC/PubConLink/2013 El m-Learning como soporte para la construcción de conocimiento en la enseñanza de las Ciencias.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
      <div class="w3-quarter" style="margin:30px;margin-top: 0px;text-align: center;width:28%;">
        <h3>“Desarrollo de una aplicación móvil para el monitoreo ambulatorio de la presión arterial”</h3>
        <p>Félix VG, Mena LJ, Orozco EE, Ostos R.</p>
        <p>Congreso Interdisciplinario de Cuerpos Académicos 2013, Guanajuato, Guanajuato, México, 2013.</p>
        <p><a href="/TIC/PubConLink/2013 Desarrollo de una aplicación móvil para el monitoreo ambulatorio de la presión arterial.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
      <div class="w3-quarter" style="margin:30px;margin-top: 0px;text-align: center;width:28%;">
        <h3>“Dispositivos móviles una alternativa para el aprendizaje de personas con síndrome de Down”</h3>
        <p>Félix VG, Mena LJ, Orozco EE, Ostos R.</p>
        <p>Congreso Interdisciplinario de Cuerpos Académicos 2013, Guanajuato, Guanajuato, México, 2013.</p>
        <p><a href="/TIC/PubConLink/2013 Dispositivos móviles una alternativa para el aprendizaje de personas con síndrome de Down.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
    </div>
  <div>

  </div class="w3-container w3-padding-64 w3-center">
    <div class="w3-row">
      <div class="w3-quarter" style="margin:20px;margin-top: 10px;width:10%;">
      </div>
      <div class="w3-quarter" style="margin:30px;margin-top: 10px;text-align: center;width:30%;">
        <h3>“Prevalence, treatment and control of hypertension in elderly: the Maracaibo aging study”</h3>
        <p>Melgarejo JD, Mena LJ,  Chávez CA,  Maestre G.</p>
        <p>23rd European Meeting on Hypertension and Cardiovascular Prevention, Milan, Italia, 2013.</p>
        <p><a href="/TIC/PubConLink/2013 Prevalence, treatment and control of hypertension in elderly the Maracaibo aging study.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
      <div class="w3-quarter" style="margin:30px;margin-top: 10px;text-align: center;width:30%;">
        <h3>“Desarrollo de una aplicación de localización con recorrido virtual implementado tecnología móvil MTI”</h3>
        <p>Saucedo I, Briseño A, Mena LJ, Osuna G.</p>
        <p>Congreso Internacional de Investigación Academia Journals Cd. Juárez 2013, Cd. Juárez, Chihuahua, México, 2013.</p>
        <p><a href="/TIC/PubConLink/2013 Desarrollo de una aplicación de localización con recorrido virtual implementado tecnología móvil.pdf" target="_blank" class="btn btn-link" role="button" aria-pressed="true">Link</a></p>
      </div>
      <div class="w3-quarter" style="margin:20px;margin-top: 10px;width:10%;">
      </div>
    </div>
  </div>

<!-- Google Maps -->
<!--<div id="googleMap" style="width:100%;height:420px;"></div>-->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <center>
    <h4>Contactanos</h4>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
    <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  </center>
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>

</body>
</html>
