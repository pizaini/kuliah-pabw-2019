<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 30/04/2019
 * Time: 15:28
 */
$nim = $_GET['nim'] ?? '';
$q = 'select * from mahasiswa where nim = :nim';
$statement = $connection->prepare($q);
$result = null;
try{
    $statement->execute([
            ':nim' => $nim
    ]);
    $result = $statement->fetch(PDO::FETCH_OBJ);
}catch (Exception $ex){
    die($ex->getMessage());
}

?>
<h1>Edit form</h1>
<form action="index.php?modul=mahasiswa&action=update" method="post">
    <label>Nama</label>
    <p>
        <input name="nama" type="text" value="<?=$result->nama?>">
    </p>
    <label>NIM</label>
    <p>
        <input name="nim" type="text" maxlength="11" value="<?=$result->nim?>">
    </p>
    <label>Tgl Lahir</label>
    <p>
        <input name="ttl" type="date" value="<?=$result->ttl?>">
    </p>
    <label>Alamat</label>
    <p>
        <textarea name="alamat" rows="5">value="<?=$result->alamat?>"</textarea>
    </p>
    <button type="submit">Update</button>
</form>