<?php
require_once("../../db-connect.php");

$sql = "SELECT * FROM prd_material_cate";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($rows);
echo json_encode($rows,JSON_UNESCAPED_UNICODE	);

$conn->close();
?>