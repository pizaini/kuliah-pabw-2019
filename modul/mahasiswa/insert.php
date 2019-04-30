<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 30/04/2019
 * Time: 15:29
 */
$nama = $_POST['nama'] ?? '';
$nim = $_POST['nim'] ?? '';
$ttl = $_POST['ttl'] ?? '';
$alamat = $_POST['alamat'] ?? '';


$q = 'INSERT INTO MAHASISWA (NIM, TTL, NAMA, ALAMAT) VALUES (:nim, :tglLahir, :nama, :alamat)';
$statement = $connection->prepare($q);
try{
    //Binding parameters
    $statement->execute([
        ':nim' => $nim,
        ':tglLahir' => $ttl,
        ':nama' => $nama,
        ':alamat' => $alamat
    ]);
    //redirect
    header('location: index.php?modul=mahasiswa');
}catch (Exception $exc){
    die($exc->getMessage());
}


?>

