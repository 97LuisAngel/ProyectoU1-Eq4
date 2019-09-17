<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="../css/main.css">
   </head>
   <body>
   <nav>
        <ul>
            <li><a href="../index.php">REGRESAR</a></li>
        </ul>
    </nav>
   <script  language=JavaScript> 
      function go(){
         if (document.form.password.value=='usuario' && document.form.login.value=='usuario'){ 
            document.form.submit(); 
         } 
         else{ 
            alert("INGRESE CORRECTAMENTE LOS DATOS DEL USUARIO"); 
         } 
      }      
   </script>
   <div id="login">
      <h1 class="h1-texto-login">INICIAR SESIÓN</h1>
      <form name=form action="../cliente/inicio.php">
         <center><label> Usuario</center>
         <input type="text" name="login"> <br>
         <center><label> Contraseña</center>
         <input type=password name=password> <br>
         <input onclick=go() type=button value="Iniciar Sesion"> 
      </form> 
   </div>
   </body>
</html>