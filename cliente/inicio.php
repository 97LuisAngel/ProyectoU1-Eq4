<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogos | Cliente</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
        body{
            font-family: sans-serif;
        }
        h1, h2{
            text-align: center;
            color: forestgreen;
            margin: 30px 0 50px;
        }
        .galeria{
            margin: 10px 50px;
        }
        .galeria img{
            width: 230px;
            padding: 5px;
            filter: grayscale(20%);
            transition: 1s;
        }
        .galeria img:hover{
            filter: grayscale(0);
            transform: scale(1.1);
        }
        .btn-accesar{
            background-color: #FF4A2E;
            color: white;
            outline: none;
            border: none;
            width: 180px;
            height: 60px;
            font-size: 22.5px;
            border-radius: 25px;
            margin-top: 50px;
            margin: 0 0 0 80px;
        }
        a{
            text-decoration: none;
            color: #EBEBEB;
            font-size: 20px;
        }
        img.fondo-cliente{
            float: right;
            width: 600px;
            height: 100vh;
        }
        .description{
            text-decoration: none;
            color: #F1F1F1;
            font-size: 20px;
        }
        .btn-seleccion{
            background-color: #421E05;
            color: white;
            outline: none;
            border: none;
            border-radius: 25px;
        }
        h1{
            color: #F1F1F1;
            font-weight: bold;
            font-size: 90px;
            margin-bottom: 40px;
            margin: 0 0 0 30px;
            text-shadow: 7px 2px #760E03;
        }
        *{
    margin: 0px;
    padding: 0px;
}
    
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../cliente/inicio.php">INICIO</a></li>
            <li><a href="../cliente/catálogo.php">CATÁLOGOS</a></li>
        </ul>
    </nav>
    <div>
    <h1>BIENVENIDO <br>USUARIO</h1>
    <p class="description">Siempre cerca de ti <br>En Nuestra Panadería queremos estar a tu lado y compartir tu día a día con nuestros panes. </p>
    </div>
    <button class="btn-accesar"><a href="../index.php">Cerrar sesión</button>
</body>
</html>