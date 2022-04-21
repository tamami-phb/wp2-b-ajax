<?php
require_once "../connection.php";

$raw = file_get_contents('php://input');
$data = json_decode($raw);

$sql = "update mahasiswa set " .
    "nama='" . $data->nama . "', " .
    "kelas='" . $data->kelas . "' " .
    "where nim='" . $data->nim . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$resp = new stdClass();
if($row > 0) {
    $resp->status = "ok";
} else $resp->status = "fail";

echo json_encode($resp);
?>