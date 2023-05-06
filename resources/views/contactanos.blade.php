<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chichilo</title>
    
    <style>
        /* Estilos para la página dividida en dos columnas */
        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        /* Estilos para el video */
        video {
            width: 100%;
            height: 100%;
        }

        /* Estilos para el iframe */
        iframe {
            width: 100%;
            height: 600px;
            border: none;
        }

        /* Estilos para la columna de la izquierda */
        .left-column {
            width: 50%;
        }

        /* Estilos para la columna de la derecha */
        .right-column {
            width: 50%;
        }
    </style>
</head>
    
<header>
    <img src="/img/l1.png" alt="Logo">
    <h1>Te queremos escuchar</h1>
</header>

<div class="button-container">
    <a href="/postres"><button class="button">Postres</button></a>
    <a href="/bebidas"><button class="button">Bebidas</button></a>
    <a href="/contactanos"><button class="button">Contactanos</button></a>
</div>

<body>
    <div class="container">
        <div class="left-column" id="video-container" >
            <video autoplay muted loop id="destinos">
                <source src="/img/ched.mp4" type="video/mp4">
                Tu navegador no admite videos HTML5.
            </video>
        </div>
        <div class="right-column">
            <iframe src="https://web.powerva.microsoft.com/environments/Default-8357d805-370a-48a6-901e-e5f30fd3f8c1/bots/new_bot_0d6a6d6e99244fe58be4d1af53bce56d/webchat"></iframe>
        </div>
    </div>
</body>
    <style>

header {
            background-color: black;
			color: orange;
			padding: 30px;
			text-align: center;
			font-size: 21px;
			font-weight: bold;
			text-shadow: 2px 2px #333;
			box-shadow: 0px 2px 5px #888;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			box-sizing: border-box;
			letter-spacing: 4px; 
            display: flex; /* Se utiliza la propiedad display flex para alinear horizontalmente el contenido del encabezado */
			align-items: center; /* Se alinea verticalmente el contenido del encabezado */
			justify-content: space-around   ; /* Se distribuye el espacio sobrante entre el contenido */
		}
    </style>
    <style>
        	header img {
            max-width: 150px; /* Se establece la imagen a una anchura máxima de 100px */
			height: auto; /* Se establece la altura de la imagen a automática para mantener la proporción */
			margin-right: auto; /* Se desplaza la imagen hacia la izquierda */
		}

        header h1 {
			font-style: italic; /* Se aplica cursiva al texto "Bienvenido" */
			margin: 0 auto; /* Se centra horizontalmente el texto */
		}
    </style>
    


<style>
		/* Estilos para los botones */
		.button {
			background-color: orange;
			color: black;
			padding: 8px;
			border: none;
			border-radius: 4px;
			font-size: 13px;
			margin-right: 8px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		/* Estilos para el contenedor de los botones */
		.button-container {
			position: absolute;
			top: 0;
			right: 0;
			margin: 10px;
		}
        .button:hover {
			background-color: red;
		}
        body {
    
             background: #FA8444;
        }

        #video-container {
         margin-top: 170px;
        }

	</style>


<style>
    * {
    margin: 10;
    padding: 0;
    box-sizing: border-box;
}

</style>
</html>





