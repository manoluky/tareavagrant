<?php
$servername = "mysql";  
$username = "myuser";  
$password = "mypassword"; 
$dbname = "mydatabase";  
 
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$sql = "SELECT id, nombre, pais FROM test WHERE continente= america";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>País</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["pais"]."</td><td>".$row["continente"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
