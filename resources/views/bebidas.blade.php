<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chichilo</title>
    </head>
    

    <header>
        <img src="/img/l1.png" alt="Logo">
		<h1>Nuestras bebidas</h1>
	</header>

    <div class="button-container">
        <a href="/postres"><button class="button">Postres</button></a>
		<a href="/bebidas"><button class="button">Bebidas</button></a>
		<a href="/contactanos"><button class="button">Contactanos</button></a>
	</div>

	<body>

	<table>
  <thead>
    <tr>
      <th>Bebidas</th>
      <th>Precio</th>
      <th>  </th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>Vino argentino</td>
	  <td>$1540</td>
      <td><button class="button">+ AÑADIR</button></td>
    </tr>
    <tr>
      <td>Hesperidina</td>
	  <td>$82</td>
      <td><button class="button">+ AÑADIR</button></td>
    </tr>
	<tr>
      <td>Lágrima</td>
	  <td>$98</td>
      <td><button class="button">+ AÑADIR</button></td>
    </tr>
	<tr>
      <td>Tereré </td>
	  <td>$60</td>
      <td><button class="button">+ AÑADIR</button></td>
    </tr>
    <tr>
      <td>Té en Las Violetas</td>
	  <td>$35</td>
      <td><button class="button">+ AÑADIR</button></td>
    </tr>
  </tbody>
</table>


<div class="container mx-auto flex">
        <div class="img_container ">
            <img src="/img/p0.jpg" alt="" class="main_img">
         </div>

        <div class="thumbnail_container">
            <img class="thumbnail active" src="/img/p1.jpg" alt="">
            <img class="thumbnail" src="img/p2.jpg" alt="">
            <img class="thumbnail" src="/img/p3.jpg" alt="">
            <img class="thumbnail" src="/img/p4.jpg" alt=""> 
            
        </div>  
    </div>
    </body>


    <script>const main_img = document.querySelector('.main_img')
        const thumbnails = document.querySelectorAll('.thumbnail')
        thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function(){
        const active = document.querySelector('.active')
        active.classList.remove('active')
        thumb.classList.add('active')
        main_img.src = thumb.src
        })
    })</script>
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
    min-height: 100vh;
    background: #FA8444;
}

.container .img_container {
    width: 400px;
    height: 450px;
    margin-bottom: 30px;    
    margin-top: 160px;
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


table {
  border-collapse: collapse;
  width: 100%;
}

table th, table td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

table th {
  background-color: #E65907;
}
table tr {
  background-color: #FFB305;
}
</style>
</html>





