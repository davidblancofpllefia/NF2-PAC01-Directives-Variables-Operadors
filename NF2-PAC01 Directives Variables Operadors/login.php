<?php
session_unset();
?>
<html>
 <head>
  <title>Please Log In</title>
 </head>
 <body>
  <form method="post" action="principal.php">
   <p>Pon tu usuario: 
    <input type="text" name="user"/>
   </p>
   <p>Pon tu contraseña: 
    <input type="password" name="pass"/>
   </p>
   <p>Pon tu email: 
    <input type="text" name="email"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>

