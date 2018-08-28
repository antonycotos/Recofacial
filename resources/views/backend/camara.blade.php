<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>foto con Javascript y PHP</title>
</head>
<body>


	<video id="video"></video>
	<br>
	<button id="boton">Tomar foto</button>
	<p id="estado"></p>
	<canvas id="canvas" style="display: none;"></canvas>
</body>
<script src="{{ asset('js/camara.js') }}"></script>
</html>


