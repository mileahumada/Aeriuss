<?php
session_start();

include 'conexion.php';


$conn = new mysqli("localhost", "root", "", "aerius");

if (isset($_GET['q'])) {
    $q = $_GET['q'];
} else {
    $q = "";
}

$sql = "SELECT lugar FROM lugares WHERE lugar LIKE '%$q%' LIMIT 5";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<div class='opcion'>" . $row['lugar'] . "</div>";
}
?>