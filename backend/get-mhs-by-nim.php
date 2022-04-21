<?php
require_once "../connection.php";

$raw = file_get_contents('php://input');
$data = json_decode($raw);

$sql = "select * from mahasiswa where nim='" . $data->nim . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);

echo json_encode(pg_fetch_assoc($result,0));
?>