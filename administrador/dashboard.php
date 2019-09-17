<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración | Clientes </title>
        <!-- ESTILOS DE LA PAGINA -->
        <style>
                /* Etiqueta de reset */
                *{
                    margin: 0px;
                    padding: 0px;
                    font-family: 'Open Sans';
                }
                header{
                    margin: 0px;
                    padding: 0px;
                }
                .encabezado{
                    width: 2000px;
                    height: 20%;
                    background-color: #E04106;
                }
                .logoMega{
                    width: 2px;
                    margin: -25px auto;
                }
                .bRoja{
                    position: fixed;
                    width: 250px;
                    height: 12%;
                    background-color: #A70202;
                }
                .texto1{
                    padding: 20px;
                    font-family: Arial, Helvetica, sans-serif;
                    color: azure;
                    font-size: 30px;
                }
                .logoAdmi{
                    padding: 50px;
                    margin: 40px auto;
                    display: block;
                    width: 150px; 
                }
                nav{
                    position: fixed;
                    width: 250px;
                    height: 100%;
                    background-color: #2E2E2D;
                }
                ul{
                    margin-top: 5px;
                    list-style: none;
                    display: block;
                }
                li{
                    width: 100%;
                    height:50px;
                    border-bottom: 1px solid #323232;
                    overflow: hidden;
                }
                p.menu{
                    position: relative;
                    padding: 16px;
                    padding-right:25px;
                    float: right;
                    color: white;
                    opacity: 1;
                    font-size: 1.2em;
                    -webkit-transition: opacity .2s;
                }
                div.barra{
                    position: absolute;
                    height: 50px;
                    width: 0px;
                    background-color: #A76302;
                    opacity: .5;
                    -webkit-transition: width .2s;
        
                }
                li:hover div.barra{
                    width: 250px;
                }
        
             .textheader{
                 padding: 0px;
                 width: 0px;
             }
             .informacion{
                width: 1400px;
                color: #323232;
                }
                .boton_1{
            text-decoration: none;
            padding: 3px;
            padding-left: 10px;
            padding-right: 10px;
            font-family: 'Open Sans';
            font-weight: 300;
            font-size: 18px;
            font-style: italic;
            color: white;
            background-color: #411A02;
            border-radius: 15px;
            border: 3px double #411A02;
        }
        .boton_1:hover{
            opacity: 0.6;
            text-decoration: none;
        }
        .boton_2{
            text-decoration: none;
            padding: 3px;
            padding-left: 10px;
            padding-right: 10px;
            font-family: 'Open Sans';
            font-weight: 300;
            font-size: 18px;
            font-style: italic;
            color: white;
            background-color: #411A02;
            border-radius: 15px;
            border: 3px double #411A02;
        }
        .boton_2:hover{
            opacity: 0.6;
            text-decoration: none;
        }
        .Buscador{
                    text-align: center;
                    height: 100%;
                    width: 100%;
                }
                .Buscador button{
                    text-decoration: none;
                    padding: 3px;
                    padding-left: 10px;
                    padding-right: 10px;
                    font-family: 'Open Sans';
                    font-weight: 300;
                    font-size: 15px;
                    font-style: italic;
                    color: white;
                    background-color: #411A02;
                    border-radius: 15px;
                    border: 3px double #411A02;
                }

        </style>
        <!-- END ESTILOS DE LA PAGINA -->
</head>
<body>
    <!-- -------------------------HEADER---------------------------- -->
        <header>
            <nav class="encabezado">
            </nav>
        </header>

    <!-- ----------------------------MENU----------------------------------- -->
    <nav>
        <nav class="bRoja">
            <p class="texto1">Administrador</p>
                </nav>
                    <div>
                        <img class="logoAdmi" src="../img/icons-admi.png" alt="">
                    </div>
                        <ul>
                            <a href="">
                                <li>
                                    <div class="barra"></div>
                                    <p class="menu">INFORMACION</p>
                                </li>
                            </a>
                
                            <a href="">
                                <li>
                                    <div class="barra"></div>
                                    <p class="menu">PEDIDOS</p>
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <div class="barra"></div>
                                    <p class="menu">CLIENTES</p>
                                </li>
                            </a>
                            <a href="">
                                <li>
                                    <div  class="barra"></div>
                                    <p class="menu">PRODUCTOS</p>
                                </li>
                            </a>
                            <a href="../index.php">
                                <li>
                                    <div class="barra"></div>
                                    <p class="menu">SALIR</p>
                                </li>
                            </a>
                        </ul>
            </nav>
            <!-- ---------------------------END-MENU----------------------------------- -->

    
    
</body>

</html>