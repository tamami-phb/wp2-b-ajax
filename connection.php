<?php
$conn_string = "host=satao.db.elephantsql.com port=5432 " . 
    "dbname=beajxgfa user=beajxgfa " .
    "password=kkaCHFWCIBj_PspeTB1WoqeQ3C2n4_0T";
$conn = pg_connect($conn_string);

// if($conn) {
//     echo "Koneksi DB Berhasil";
// } else {
//     echo "Koneksi DB GAGAL";
// }
?>