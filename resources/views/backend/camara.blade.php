
@extends('backend.layout')
 
@section('content')
<!DOCTYPE html>
<html>
<head>
<title>Ejemplo de Tomarte una Foto con Javascript</title>
<meta charset="utf-8" />
<meta name="robots" content="noindex">
<link rel="stylesheet" href="{{ asset('css/camara.css')}}" media="all" />
</head>
<body>
<h3>Sonria a la camara! :)</h3>
 
<div class="container">
 
  <div class="app">
 
    <a href="#" id="start-camera" class="visible">Iniciar Demo</a>
    <video id="camera-stream"></video>
    <img id="snap">
 
    <p id="error-message"></p>
 
    <div class="controls">
      <a href="#" id="delete-photo" title="Eliminar Foto" class="disabled"><i class="material-icons">delete</i></a>
      <a href="#" id="take-photo" title="Tomar Foto"><i class="material-icons">camera_alt</i></a>
      <a href="#" id="download-photo" download="foto.jpg" title="Descargar Foto" class="disabled"><i class="material-icons">file_download</i></a>  
    </div>
 
    <canvas></canvas>
 
  </div>
 
</div>
<script src="{{ asset('js/camara.js')}}"></script>
</body>
</html>

@endsection