<?php
require_once("../connection.php");

$raw = file_get_contents('php://input');
$data = json_decode($raw);

$sql = "insert into mahasiswa(nim, nama, kelas) values('" .
    $data->nim . "','" . $data->nama . "','" . $data->kelas . "')";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$resp = new stdClass();
if($row > 0) {
    $resp->status = "success";
} else {
    $resp->status = "failed";
}
echo json_encode($resp);
?>