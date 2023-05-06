<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurante</title>
</head>

<body>
    <video autoplay muted loop id="myVideo">
        <source src="/img/comida.mp4" type="video/mp4">
    </video>
    <div class="content" id="content">
        <header>
            <img src="/img/logo.png" alt="Logo">

            <h1>Bienvenidos a Cantina Chichillo</h1>
        </header>

        <div class="button-container">
        <a href="/postres"><button class="button">Postres</button></a>
        <a href="/bebidas"><button class="button">Bebidas</button></a>
        <a href="/contactanos"><button class="button">Contáctanos</button></a>
        </div>

        <div class="container mx-auto flex">
            <div class="img_container">
                <img src="/img/main.jpg" alt="" class="main_img">
            </div>

            <div class="thumbnail_container">
            <img class="thumbnail active" src="/img/alfajores.jpg" alt="">
            <img class="thumbnail" src="img/bocadillomayo.jpg" alt="">
            <img class="thumbnail" src="/img/pionono.jpg" alt="">
            <img class="thumbnail" src="/img/carne.jpg" alt="">
            </div>
        </div>
    </div>

    <script>
        // Cambiar el color de fondo de la sección del menú cuando el usuario desplaza la página
        window.addEventListener("scroll", function () {
            var section = document.querySelector(".container");
            section.style.backgroundColor = "rgba(255, 255, 255, " + window.pageYOffset / 1000 + ")";
        });
        
        // Cambiar la imagen principal cuando el usuario hace clic en una miniatura
        var thumbnails = document.querySelectorAll(".thumbnail");
        for (var i = 0; i < thumbnails.length; i++) {
            thumbnails[i].addEventListener("click", function () {
                var current = document.querySelector(".active");
                current.classList.remove("active");
                this.classList.add("active");
                var mainImage = document.querySelector(".main_img");
                mainImage.src = this.src;
            });
        }
    </script>

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
	</style>

<style>
    * {
    margin: 10;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;

}

.container .img_container {
    width: 650px;
    height: 350px;
    margin-bottom: 30px;  
    margin-top: 150px;  
}


.container .img_container .main_img {
    width: 100%;
    height: 100%;
    border-radius: 5px;
    box-shadow: 0 5px 5px rgba(1, 23, 46, 0.6);
    object-fit: cover;
}

.container .thumbnail_container {
    height: 80px;
    display: flex;
    justify-content: space-between;
}


.container .thumbnail_container .thumbnail {
    width: 80px;
    height: 80px;
    border-radius: 5px;
    cursor: pointer;
    object-fit: cover;
    opacity: .7;
    transition: .3s;
}

.container .thumbnail_container .thumbnail:hover {
    opacity: 1;
}

.active {
    opacity:  1 !important;
    box-shadow: 0 5px 5px rgba(1, 23, 46, 0.6);
}
</style>

<style>
    #myVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 50px; 
      min-height: 50px;
      z-index: -1; /* Definimos un z-index menor para el video */
    }

    #content {
      position: relative;
      z-index: 1; /* Definimos un z-index mayor para el contenido */
    }
  </style>
</html>






