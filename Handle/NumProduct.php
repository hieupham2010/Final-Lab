<?php
require_once 'DatabaseAccess.php';
$query = "SELECT * FROM products";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$NumProduct = $result->num_rows;
?>