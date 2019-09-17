<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogos | Cliente</title>
    <link rel="stylesheet" type="text/css" href="../css/">
    <style>
        *{
    margin: 10px;
    padding: 0px;
}
        body{
            font-family: sans-serif;
            background-image: url(../img/fondo-02.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'helvetica';
    margin: 0px;
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
            color: black;
            font-size: 20px;
        }
        .btn-seleccion{
            background-color: #421E05;
            color: white;
            outline: none;
            border: none;
            border-radius: 25px;
        }
        li a{
            text-decoration: none;
            color: #BD001A;
            font-size: 20px;
        }
        ul li{
            list-style-type: none;
            display: inline-block;
            padding-right: 50px;
        }

        li:hover{
        border-bottom: 3px solid #C7132C;
        transition: 0.6s;
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
    <h1>Catálogo <br>¡Realiza tu pedido¡</h1>
    <div class="galeria">
        <a class="description" href="../img/icons-pan-1.png"><button class="btn-seleccion">Seleccionar</button><img src="../img/icons-pan-1.png" alt="">Pan 1</a>
        <a class="description" href="../img/icons-pan-2.png"><button class="btn-seleccion">Seleccionar</button><img src="../img/icons-pan-2.png" alt="">Pan 2</a>
        <a class="description" href="../img/icons-pan-3.png"><button class="btn-seleccion">Seleccionar</button><img src="../img/icons-pan-3.png" alt="">Pan 3</a>
        <a class="description" href="../img/icons-pan-4.png"><button class="btn-seleccion">Seleccionar</button><img src="../img/icons-pan-4.png" alt="">Pan 4</a>
        <a class="description" href="../img/icons-pan-5.png"><button class="btn-seleccion">Seleccionar</button><img src="../img/icons-pan-5.png" alt="">Pan 5</a>
        <a class="description" href="../img/icons-pan-6.png"><button class="btn-seleccion">Seleccionar</button><img src="../img/icons-pan-6.png" alt="">Pan 6</a>
    </div>
    <br>
</body>
</html>