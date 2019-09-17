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
         if (document.form.password.value=='administrador' && document.form.login.value=='administrador'){ 
            document.form.submit(); 
         } 
         else{ 
            alert("INGRESE CORRECTAMENTE LOS DATOS DEL ADMINISTRADOR"); 
         } 
      }      
   </script>
   <div id="login">
      <h1 class="h1-texto-login">INICIAR SESIÓN</h1>
      <form name=form action="../administrador/dashboard.php">
         <center><label> Usuario</center>
         <input type="text" name="login"> <br>
         <center><label> Contraseña</center>
         <input type=password name=password> <br>
         <input onclick=go() type=button value="Iniciar Sesion"> 
      </form> 
   </div>
   </body>
</html>