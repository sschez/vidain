@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title></title>
    <meta name="description" content="" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./pantalla-princial-3.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Helvetica Neue:wght@100;300;400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=MontserratRoman-SemiBold:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="pantalla-princial-3-div">
      <div class="rectangle-div35"></div>
      <div class="rectangle-div36"></div>
      <div class="rectangle-div37"></div>
      <b class="mis-pacientes-b">Mis pacientes</b>
      <div class="rectangle-div38"></div>
      <img
        class="focus-removebg-preview-icon3"
        alt=""
        src="images/focusremovebgpreview3@2x.png"
      /><img class="group-icon" alt="" src="images/group-24.svg" /><img
        class="notificacion-4-icon"
        alt=""
        src="images/notificacion-4@2x.png"
      /><img class="usuario-icon" alt="" src="images/usuario@2x.png" /><img
        class="paciente-3-icon"
        alt=""
        src="images/paciente-3@2x.png"
      /><img class="ejercicio-icon" alt="" src="images/ejercicio@2x.png" /><img
        class="calendario-1-icon"
        alt=""
        src="images/calendario-1@2x.png"
      /><img
        class="llamada-de-emergencia-icon"
        alt=""
        src="images/llamadadeemergencia@2x.png"
      /><img
        class="servicio-al-cliente-icon"
        alt=""
        src="images/servicioalcliente@2x.png"
      />
      <div class="rectangle-div39"></div>
      <div class="rectangle-div40"></div>
      <div class="bucar-por-nombre">Bucar por nombre</div>
      <img class="lupa-icon" alt="" src="images/lupa@2x.png" />
      <div class="rectangle-div41"></div>
      <div class="bucar-por-nombre">Bucar por nombre</div>
      
      ><img
        class="flecha-hacia-abajo-para-navega-icon2"
        alt=""
        src="images/flechahaciaabajoparanavegar2@2x.png"
      /><img
        class="flecha-hacia-abajo-para-navega-icon3"
        alt=""
        src="images/flechahaciaabajoparanavegar2@2x.png"
      />
      <div class="ordenar-por">Ordenar por</div>
      <div class="rectangle-div42"></div>
      <div class="rectangle-div43"></div>
      <div class="filtrar-por-div">Filtrar por</div>
      <a href = "{{route('user.create')}}"><div class="aadir-paciente">Añadir paciente</div>
      
     
      <div class="group-div11">
        <div class="rectangle-div44"></div>
        <img class="path-809-icon" alt="" src="images/path-809.svg" /><img
          class="group-icon1"
          alt=""
          src="images/group-18@2x.png"
        /><img class="path-809-icon1" alt="" src="images/path-809.svg" /><img
          class="group-icon2"
          alt=""
          src="images/group-16@2x.png"
        /><b class="pacientes-activos-b">Pacientes activos</b>
        <div class="group-div12"><div class="group-div13"></div></div>
        <div class="group-div14">
          <img class="path-809-icon2" alt="" src="images/path-809.svg" /><img
            class="group-icon3"
            alt=""
            src="images/group-4@2x.png"
          /><img class="ellipse-icon" alt="" src="images/ellipse-5.svg" />
          <div class="div51">1</div>
          <div class="rectangle-div45"></div>
          <div class="edelmira-snchez-div">Edelmira Sánchez</div>
        </div>
        <img class="ellipse-icon1" alt="" src="images/ellipse-51.svg" />
        <div class="div52">2</div>
        <div class="rectangle-div46"></div>
        <div class="martha-duque-div">Martha Duque</div>
        <img class="ellipse-icon2" alt="" src="images/ellipse-51.svg" />
        <div class="div53">1</div>
        <div class="rectangle-div47"></div>
        <div class="jorge-ramirz-div">Jorge Ramiréz</div>
      </div>
      <div class="div54">+</div>
    </div>

    <script></script>
  </body>
</html>
@endsection