<!DOCTYPE html>
<html>
<head>
<title>TIC2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<meta charset="utf-8">
</head>
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
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Proyectos</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Líneas de Investigación</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Eventos</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contactanos</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Investigadores <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Proyectos</a>
    <a href="#work" class="w3-bar-item w3-button">Líneas de Investigación</a>
    <a href="#pricing" class="w3-bar-item w3-button">Eventos</a>
    <a href="#contact" class="w3-bar-item w3-button">Contactanos</a>
    <a href="#" class="w3-bar-item w3-button">Buscar</a>
  </div>
</div>

<!-- Carrusel/Galeria -->
  <!--<div class="container" style="width:100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;">
    <!-- Indicators
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides
    <div class="carousel-inner">
      <div class="item active">
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

    <!-- Left and right controls --
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>-->
<!--
<div class="w3-display-container w3-animate-opacity">
  <img src="/Prueba/Fotos/ciencia.jpg" alt="boat" style="width:100%;min-height:350px;max-height:500px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">UPSIN</button>
  </div>
</div>
-->
<!-- Modal -->
<div>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>
</div>

<!-- Team Container -->
<div>
<div style="margin-top:50px"; class="w3-container w3-padding-80 w3-center" id="team">
  <br>
<h2>Líneas de Investigación</h2>
<p></p>
</div>


<div class="w3-container w3-center w3-teal">
  <br>
  <h2 style="text-shadow:1px 1px 0 #444"> Sistemas Distribuidos</h2>
  <div class="w3-container w3-center w3-large">
    <div class="w3-row"><br>
    <div class="w3-quarter">
      <div class="w3-card-4" style="width:70%; background-color:white; ">
      <img src="/Prueba/Fotos/ROstos.png" alt="Boss" style="width:55%" class="w3-circle w3-hover-opacity" >
        <h4> <b style="color:black"> Dr. Rodolfo Ostos </b> </h4>
          <p style="color:black">PTC</p>
      </div>
  </div>
    <div>
      <img src="/Prueba/Fotos/distribuidos3.png" alt="Boss" style="width:18%" class="w3-round w3-hover-opacity w3-right" >
      <aside style="width:75%" class="text-justify">Un sistema distribuido se define como una colección de computadores  conectados por una red, y con el software distribuido adecuado para que el sistema sea visto por los usuarios
        como una única entidad capaz de proporcionar facilidades de computación. Los sistemas distribuidos se implementan en diversas plataformas hardware, desde unas pocas estaciones de
          trabajo conectadas por una red de área local, hasta Internet, con una colección de redes  extensas interconectados, que en enlazan millones de ordenadores.</aside>
   </div>
   </div>
  </div>
</div>

<div class="w3-container w3-center ">
  <br>
  <h2 style="text-shadow:1px 1px 0 #444"> Tecnologías Educativas </h2>
  <div class="w3-container w3-center w3-large">
    <div class="w3-row"><br>
    <div class="w3-quarter">
      <div class="w3-card-4" style="width:70%; background-color:white; ">
      <img src="/Prueba/Fotos/VFelix.png" alt="Boss" style="width:55%" class="w3-circle w3-hover-opacity" >
        <h4> <b style="color:black"> Dr. Vanessa Félix </b> </h4>
          <p style="color:black">PTC</p>
      </div>
  </div>
    <div>
      <img src="/Prueba/Fotos/tecnologia.png" alt="Boss" style="width:18%" class="w3-round w3-hover-opacity w3-right" >
      <aside style="width:75%" class="text-justify">La tecnología educativa es la incorporación de las Tecnologías de la Información y Comunicación en la
         educación para apoyar los procesos de enseñanza y aprendizaje en distintos contextos de educación formal y educación no formal.</aside>
   </div>
   </div>
  </div>
</div>

<div class="w3-container w3-center w3-teal">
  <br>
  <h2 style="text-shadow:1px 1px 0 #444"> Minería de Datos </h2>
  <div class="w3-container w3-center w3-large">
    <div class="w3-row"><br>
    <div class="w3-quarter">
      <div class="w3-card-4" style="width:70%; background-color:white; ">
      <img src="/Prueba/Fotos/LMena.png" alt="Boss" style="width:55%" class="w3-circle w3-hover-opacity" >
        <h4> <b style="color:black"> Dr. Luis Javier Mena </b> </h4>
          <p style="color:black">PTC</p>
      </div>
  </div>
    <div>
      <img src="/Prueba/Fotos/datos1.png" alt="Boss" style="width:18%" class="w3-round w3-hover-opacity w3-right" >
      <aside style="width:80%" class="text-justify">La minería de datos es el conjunto de técnicas y tecnologías que permiten explorar grandes bases de
         datos con el objetivo de encontrar patrones que nos puedan aportar información valiosa en la toma de
         futuras decisiones. El proceso de minería de datos tiene normalmente cuatro etapas principales:</aside>
      <p class="text-justify">
          - Determinación de los objetivos
            <br>
          - Procesamiento de los datos
            <br>
          - Determinación del modelo
            <br>
          - Análisis de los resultados
      </p>
   </div>
   </div>
  </div>
</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

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
