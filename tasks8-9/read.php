<?php include "connection.php" ?>

<?php
$query = "SELECT * FROM employees";
$retrieve = $pdo->query($query); 
$dataBase = $retrieve->fetchAll(PDO::FETCH_ASSOC); 

echo json_encode($dataBase);
?>
