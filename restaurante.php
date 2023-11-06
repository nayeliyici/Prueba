<?php header('Access-Control-Allow-Origin: *');
// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "conhambre";
$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
/*
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}else{
  echo "conexión exitosa";
}*/

$sql = "SELECT * FROM Restaurante";
$datos = mysqli_query($conn, $sql);
$arrayDatos = array();

while ($data = mysqli_fetch_assoc($datos)){
    $arrayDatos[] = $data;
};
echo(json_encode($arrayDatos, JSON_UNESCAPED_UNICODE));

?>
