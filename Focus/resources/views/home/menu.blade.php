@extends('layouts.app')
@section('title', 'Focus')
@section('subtitle', 'Menu')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title></title>
    <meta name="description" content="" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./menu-desplegable-abierto.css" />

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
    <div class="menu-desplegable-abierto-div">
      <div class="rectangle-div156"></div>
      <img class="group-icon16" alt="" src="images/group-24.svg" /><img
        class="notificacion-4-icon3"
        alt=""
        src="images/notificacion-4@2x.png"
      /><img class="usuario-icon3" alt="" src="images/usuario@2x.png" /><img
        class="paciente-3-icon3"
        alt=""
        src="images/paciente-3@2x.png"
      /><img class="ejercicio-icon3" alt="" src="images/ejercicio@2x.png" /><img
        class="calendario-1-icon3"
        alt=""
        src="images/calendario-1@2x.png"
      /><img
        class="llamada-de-emergencia-icon3"
        alt=""
        src="images/llamadadeemergencia@2x.png"
      /><img
        class="servicio-al-cliente-icon3"
        alt=""
        src="images/servicioalcliente@2x.png"
      />
      <div class="notificaciones-div" href= "{{route ('home.index')}}">Notificaciones</div>
      <div class="pacientes-div" href= "{{route('user.index')}}">Pacientes</div>
      <div class="terapias-div">Terapias</div>
      <div class="progreso-div1">Progreso</div>
      <div class="mi-programacin-div">Mi programación</div>
      <div class="emergencia-div">EMERGENCIA</div>
      <div class="soporte-div">Soporte</div>
      <div class="mi-perfil-div">Mi perfil</div>
      <img class="crecimiento-icon" alt="" src="images/crecimiento@2x.png" />
      <div class="mi-programacin-div">Mi programación</div>
    </div>

    <script></script>
  </body>
</html>
@endsection