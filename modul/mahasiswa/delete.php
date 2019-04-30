<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 29/04/2019
 * Time: 12:37
 */
//query data berdasarkan NIM, jika NIM tidak tersedia, default 0
$nim = $_GET['nim'] ?? 0;
try{
    $statement = $connection->prepare('SELECT count(*) from MAHASISWA where NIM = :nim');
    $statement->execute([
        ':nim' => $nim
    ]);
    //hitung jumlah kolom yang diperoleh
    $result = $statement->fetchColumn();
    //Jika ROW ditemukan, delete
    if($result == 1){
        $statement = $connection->prepare('DELETE from MAHASISWA where NIM = :nim');
        $statement->execute([
            ':nim' => $nim
        ]);
        //redirect
        header('location: index.php?modul=mahasiswa');
    }else{
        echo 'Maaf NIM "'.$nim,'" tidak tersedia ';
    }
}catch (Exception $exception){
    die($exception->getMessage());
}