<?php
//Reanudamos la sesión 
session_start(); 
//Libera Todas las variables de session
session_unset();
//Literalmente la destruimos 
unset($_SESSION['correo']);
session_destroy(); 
//Redireccionamos a index.php (al inicio de sesión) 
header("Location: Login.php");
exit(); 

?>
<!--https://www.youtube.com/watch?v=LqLcnuBNsfM
https://www.youtube.com/watch?v=Ymqo1TSGqU0
https://www.youtube.com/watch?v=TCOq7Vv10N0
https://www.youtube.com/watch?v=_k7TUEzJgMA
https://www.youtube.com/watch?v=gsTaRQ-grPg


https://www.youtube.com/watch?v=T8wDAQIwNC4
https://www.youtube.com/watch?v=LXbW8IMs_gw-->