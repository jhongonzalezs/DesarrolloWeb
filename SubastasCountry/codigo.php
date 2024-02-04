<?php
session_start();
$user= $_SESSION['id'];
$uss=$_SESSION['Usuarios'];
$tf=$_SESSION['telef'];
$foto=$_SESSION['foto'];
$idimagen=$_SESSION['idimagen'];
$usuario2=$_SESSION['usuario123'];
$correo=$_SESSION['correo'];
include("conexion.php");
$imagen=$_SESSION['nombre'];
$con = conectar();

$enviar=$_SESSION['nombre'];
$cel=$_SESSION['cel'];

$valor=$_POST['valor'];
$inicial=$_SESSION['inicial'];
$final=$_SESSION['final'];
$prolongacion=$_SESSION['inicial']+10000;
$prologa=$_SESSION['inicial']+1000;
$post=$_SESSION['post'];


$select=mysqli_query($con, "SELECT * FROM `valores` WHERE imagen_id=$idimagen");
$mostrar=mysqli_fetch_array($select);
$_SESSION['nom']=$mostrar['nombre'];
$nom=$_SESSION['nom'];
$_SESSION['img']=$mostrar['imagen'];
$img=$_SESSION['img'];
$_SESSION['postales']=$mostrar['correo'];
$_SESSION['num']=$mostrar;
$num=$_SESSION['num'];
$_SESSION['valrs']=$mostrar['imagen_id'];
$val=$_SESSION['valrs'];
$_SESSION['valor']=$mostrar['valor'];
$lor=$_SESSION['valor'];
$nuevo=$_SESSION['valor']+1000;

$postal='Felicitaciones  Usuario: '.$usuario2.', Con este mensaje nos complace informarle que su articulo: '.$imagen.', ha sido vendido exitosamente al Usuario: '.$uss.', por un valor de $'.$valor.' COP, por favor, comuniquese con el comprador al correo: '.$correo.', o a su teléfono celular​: '.$tf.', para platinifar la entrega del articulo y a la vez del dinero.';

$mes='Felicitaciones  Usuario: '.$uss.', Con este mensaje nos complace informarle que usted es el ganador del articulo: '.$imagen.',  por la suma de $'.$valor.' COP, comuniquese con el subastador al correo: '.$post.', o a su teléfono celular​: '.$cel.',  para planificar la entrega del dinero y del articulo. ';


if($user!=$foto){


if($valor>=$final){
    if($num>0){
$mensajes=mysqli_query($con, "INSERT INTO `mensajes`(`id`, `id_mensaje`, `mensaje`, `mensajear`, `user`, `correo`) VALUES ('','$user','$postal','$mes', '$foto', '$correo')");
}
	$elimina=mysqli_query($con, "DELETE FROM `valores` WHERE imagen_id=$idimagen ");
	$eliminar=mysqli_query($con, "DELETE FROM `imagenes` WHERE id_imagen=$val");

	if($num>0){
			$cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        <font face="times new roman"  size="4">Felicitaciones  Usuario: <b>'.$uss.' </b>, Con este mensaje nos complace informarle que usted es el ganador del articulo: <b>'.$imagen.' </b>,  por la suma de <b> $'.$valor.' COP </b>, comuniquese con el subastador al correo: <b>'.$post.'</b>, o a su teléfono celular​:<b> '.$cel.' </b>,  para planificar la entrega del dinero y del articulo. </font>
        <br>
        <br>
        <br>
        <br>
        <font face="times new roman"  size="4">Siempre hay que ofrecer más de lo que el cliente espera.</font>
        <br>
        <font face="times new roman"  size="2"><b>Nelson Boswell</b></font>
        </body>
        </html>';
        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //dirección del remitente
        $headers .= "From: 'Subatas Country' <'SubastasCountry@gmail.com'>\r\n";
        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: 'SubastasCountry@gmail.com'\r\n";
        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        mail($_SESSION['postales'],'Subatas Country',$cuerpo,$headers);
    }

    if($num>0){
    $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        <font face="times new roman"  size="4">Felicitaciones  Usuario: <b>'.$usuario2.' </b>, Con este mensaje nos complace informarle que su articulo: <b> '.$imagen.' </b>, ha sido vendido exitosamente al Usuario: <b> '.$uss.' </b>, por un valor de <b> $'.$valor.' COP </b>, por favor, comuniquese con el comprador al correo: '.$correo.', o a su teléfono celular​: <b> '.$tf.' </b>, para platinifar la entrega del articulo y a la vez del dinero.</font>
        <br>
        <br>
        <br>
        <br>
        <font face="times new roman"  size="4">Siempre hay que ofrecer más de lo que el cliente espera.</font>
        <br>
        <font face="times new roman"  size="2"><b>Nelson Boswell</b></font>
        </body>
        </html>';
        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //dirección del remitente
        $headers .= "From: 'Subatas Country' <'SubastasCountry@gmail.com'>\r\n";
        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: 'SubastasCountry@gmail.com'\r\n";
        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        mail($_SESSION['post'],'Subatas Country',$cuerpo,$headers);
    }

	if (!$eliminar){

		echo '<script type="text/javascript"> alert("Lo sentimos, Para que su valor sea tomado enserio debe comenzar la subasta con un valor mas pequeño."); window.location="Visualizacion.php";</script>';
		}else{
		echo '<script type="text/javascript"> alert("Felicitaciones  Usuario: '.$uss.' , Es usted el ganador de este articulo."); window.location="notificacion.php";</script>';
	}

}else{


if($inicial>1000000){
	if($valor>$nuevo){
if ($valor>$inicial){
	if($valor>=$prolongacion){
		    		
	$elimina=mysqli_query($con, "DELETE FROM `valores` WHERE imagen_id=$idimagen  ");
	$insertar= "INSERT INTO `valores` VALUES ('','$valor', '$user', '$uss', '$idimagen','$correo','$enviar')";


	$result =mysqli_query($con,$insertar);

	if($num>0){
			$cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        <font face="times new roman"  size="4">Usuario <b> '.$nom.'</b>, el siguiente mensaje es para informarle que el valor: <b> $'.$lor.' COP </b>, con el que participo en el articulo: <b> '.$img.' </b> de la pagina de Subatas Country ha sido superado, si decea volver a participar para lograr convertirse en el ganador del articulo, entre a <b>http://subastascountry2019.000webhostapp.com/</b>y publique un valor más alto que el subastador anterior.</font>
        <br>
        <br>
        <br>
        <br>
        <font face="times new roman"  size="4">Siempre hay que ofrecer más de lo que el cliente espera.</font>
        <br>
        <font face="times new roman"  size="2"><b>Nelson Boswell</b></font>
        </body>
        </html>';
        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //dirección del remitente
        $headers .= "From: 'Subatas Country' <'SubastasCountry@gmail.com'>\r\n";
        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: 'SubastasCountry@gmail.com'\r\n";
        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        mail($_SESSION['postales'],'Subatas Country',$cuerpo,$headers);
    }

	if (!$result){

		echo '<script type="text/javascript"> alert("Lo sentimos, Para que su valor sea tomado enserio debe comenzar la subasta con un valor mas pequeño."); window.location="Visualizacion.php";</script>';
		}else{

		echo '<script type="text/javascript"> alert("Valor Posteado Correctamente"); window.location="Visualizacion.php";</script>';
	}

	}else{
		echo '<script type="text/javascript"> alert("El Valor Debe Ser $1.000 COP mayor "); window.location="Visualizacion.php";</script>';
}

}else{
	echo '<script type="text/javascript"> alert("El Valor Debe Ser  $100.000 COP  mayor al valor del subastador"); window.location="Visualizacion.php";</script>';}
}else{
	echo '<script type="text/javascript"> alert("El valor debe ser COP: $30.000 al del comprador anterior"); window.location="Visualizacion.php";</script>';
}
}else{
	if($valor>$nuevo){
	if ($valor>$inicial){

		if($valor>=$prologa){

		$elimina=mysqli_query($con, "DELETE FROM `valores` WHERE imagen_id=$idimagen  ");
		$insertar= "INSERT INTO `valores` VALUES ('','$valor', '$user', '$uss', '$idimagen','$correo','$enviar')";


	$result =mysqli_query($con,$insertar);

	if($num>0){
			$cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        <font face="times new roman"  size="4">Usuario <b> '.$nom.'</b>, el siguiente mensaje es para informarle que el valor: <b> $'.$lor.' COP </b>, con el que participo en el articulo: <b> '.$img.' </b> de la pagina de Subatas Country ha sido superado, si decea volver a participar para lograr convertirse en el ganador del articulo, entre a <b>http://subastascountry2019.000webhostapp.com/</b> y publique un valor más alto que el subastador anterior.</font>
        <br>
        <br>
        <br>
        <br>
        <font face="times new roman"  size="4">Siempre hay que ofrecer más de lo que el cliente espera.</font>
        <br>
        <font face="times new roman"  size="2"><b>Nelson Boswell</b></font>
        </body>
        </html>';
        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //dirección del remitente
        $headers .= "From: 'Subatas Country' <'SubastasCountry@gmail.com'>\r\n";
        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: 'SubastasCountry@gmail.com'\r\n";
        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        mail($_SESSION['postales'],'Subastas Country',$cuerpo,$headers);
    }

	if (!$result){

		echo '<script type="text/javascript"> alert("Lo sentimos, Para que su valor sea tomado enserio debe comenzar la subasta con un valor mas pequeño."); window.location="Visualizacion.php";</script>';
		}else{
		echo '<script type="text/javascript"> alert("Valor Posteado Correctamente "); window.location="Visualizacion.php";</script>';
	}

	}else{
echo '<script type="text/javascript"> alert("Su Valor Debe Ser $1.000 COP Mayor "); window.location="Visualizacion.php";</script>';
}


}else{
echo '<script type="text/javascript"> alert("El Valor Debe Ser Mayor al Precio Inicial"); window.location="Visualizacion.php";</script>';
}
}else{
echo '<script type="text/javascript"> alert("El valor debe ser $2.000 COP  mayor al apostador anterior"); window.location="Visualizacion.php";</script>';	
}
}
}
}else{
echo '<script type="text/javascript"> alert("Lo Sentimos, Por ser Usted el subastador del articulo, no tiene permitido participar en esta subasta."); window.location="Visualizacion.php";</script>';
}

//cerrar conexion
mysqli_close($con);


?>

</body>
</html>
