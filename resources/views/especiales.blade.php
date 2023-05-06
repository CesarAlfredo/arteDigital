<!DOCTYPE html>
<html>
<head >
	<title>Cantina Chichilo</title>
	<style>
		h4 {
			text-align: center;
			font-style: italic;
			font-weight: bold;
			color: black;
			font-size: 55px;
			margin-top: -30px;
		}
		h2 {
			text-align: center;
			font-style: italic;
			font-weight: bold;
			color: black;
			font-size: 30px;
			margin-top: -60px;
		}
		h3 {
			text-align: center;
			font-style: italic;
			font-weight: bold;
			color: white;
			font-size: 33px;
			animation: parpadeo 2s infinite;
		}
		@keyframes parpadeo {
			0% {
				opacity: 1;
			}
			50% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		.btn-animacion {
			margin-top: 30px;
    		margin-right: 5px;
    		margin-bottom: 30px;
    		margin-left: 5px;
			font-weight: bold;
			font-style: oblique;
			background-color: #d96100; /* Color de fondo */
			color: white; /* Color del texto */
			padding: 15px 30px; /* Espaciado */
			border: none; /* Borde */
			border-radius: 8px; /* Radio de borde */
			position: relative; /* Posición */
			overflow: hidden; /* Ocultar el contenido que sale de la caja */
			

		}

		header {
			
			padding: 15px;
			text-align: center;
			font-size: 30px;
			font-weight: bold;
		}
		
		.btn-animacion:after {
			content: ""; /* Contenido */
			background: #2c1a0b; /* Nuevo color de fondo */
			display: block; /* Mostrar como bloque */
			position: absolute; /* Posición absoluta */
			padding-top: 300%; /* Espaciado superior */
			padding-left: 350%; /* Espaciado izquierdo */
			margin-left: -20px !important; /* Margen izquierdo */
			margin-top: -120%; /* Margen superior */
			border-radius: 70%; /* Radio de borde */
			opacity: 0; /* Opacidad inicial */
			transition: all 0.8s /* Duración de la transición */
		}
		
		.btn-animacion:active:after {
			padding: 0; /* Espaciado */
			margin: 0; /* Margen */
			opacity: 1; /* Opacidad */
			transition: 0s; /* Duración de la transición */
		}
		.menu-izquierdo {
			background-color: #8F330C; /* Color de fondo */
			height: 150%; /* Altura */
			width: 200px; /* Ancho */
			position: fixed; /* Posición fija */
			top: 0; /* Margen superior */
			left: 0; /* Margen izquierdo */
			overflow-x: hidden; /* Ocultar contenido que sobrepasa el ancho */
			padding-top: 30px; /* Espaciado superior */
		}

		input[type="radio"] {
 		 display: none;
		}

		input[type="radio"]:checked + label {
  		font-weight: bold;
		}

		#radio1:checked ~ #imagen1,
		#radio2:checked ~ #imagen2 {
  		display: block;
		}

		#imagen1, #imagen2 {
  		display: none;
		}
		
	</style>
</head>
<body>
	    <header>  
                <h4 >
                    Especiales  
                </h4>
        </header>
		
		<div>
  		<img id="imagen1" src="/img/b2.jpg" alt="Imagen 1">
  		<img id="imagen2" src="/img/b3.jpg" alt="Imagen 2">

		</div>

<div>
  <input type="radio" id="radio1" name="imagenes" checked>
  <label for="radio1">Imagen 1</label>

  <input type="radio" id="radio2" name="imagenes">
  <label for="radio2">Imagen 2</label>
</div>
</body>

	<div class="menu-izquierdo ">
		<h3 >MENU</h3>
		<hr>
		<a href="/especiales">
		<button class="btn-animacion font-black text-center text-2xl mb-10">ESPECIALES</button>
		</a>
		<hr>
		<a href="/postres">
		<button class="btn-animacion">POSTRES</button>
		</a>
		<hr>
		<a href="/bebidas">
		<button class="btn-animacion">BEBIDAS</button>
		</a>
		<hr>
	 </div>
</html>