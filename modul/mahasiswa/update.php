<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 30/04/2019
 * Time: 19:57
 */
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
//lakukan query
$statement = $connection->prepare('UPDATE MAHASISWA SET TTL = :ttl, NAMA = :nama, ALAMAT = :alamat WHERE NIM = :nim');
try{
    //Binding parameters
    $statement->execute([
        ':nim' => $nim,
        ':ttl' => $ttl,
        ':nama' => $nama,
        ':alamat' => $alamat
    ]);
    //redirect
    header('location: index.php?modul=mahasiswa');
}catch (Exception $exc){
    die($exc->getMessage());
}