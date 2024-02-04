<?php
include("conexion.php");
$con= conectar();

$sql="SELECT * FROM `imagenes` WHERE categoria=('textiles') AND subcategoria=('camisas')";
$resultado=mysqli_query($con,$sql);

$apple="SELECT * FROM `imagenes` WHERE categoria=('celulares') AND subcategoria=('apple')";
$app=mysqli_query($con,$apple);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>

<body>
<h1>Insertar y Mostrar Imagen en PHP y MYSQL</h1>
<form action="cargar.php" method="POST" enctype="multipart/form-data">
Imagen<br><input type="file" name="img"><br><br>
Nombre<br><input type="text" name="nombre"><br><br>
Precio Inicial<br><input type="text" name="inicial"><br><br>
Precio Final<br><input type="text" name="final"><br><br>
Categoria<br><input type="text" name="categoria"><br><br>
SubCategoria<br><input type="text" name="subcategoria"><br><br>
Descripcion<br><input type="text" name="descripcion"><br><br>
<input type="submit" value="Aceptar">
</form>
<hr>
<?php
while($data=mysqli_fetch_array($resultado))
{
	echo '<img src="'.$data['ruta'].'"  width="200px" height="200px">';
}
?>

<?php
while($appl=mysqli_fetch_array($app))
{
	echo '<img src="'.$appl['ruta'].'"  width="200px" height="200px">';
}
?>
</body>
</html>

