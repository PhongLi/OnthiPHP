<?php
include 'connection.php';
$MABD = $_POST['MABD'];
$MABD = $_POST['MACV'];
$sql = "DELETE FROM ct_bd where MABD = '{$MABD}' and MACV='{$MACV}'";
$stmt = $conn->exec($sql);
echo 'success';