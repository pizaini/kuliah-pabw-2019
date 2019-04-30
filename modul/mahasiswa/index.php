<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 30/04/2019
 * Time: 14:57
 */
?>
<h1>Mahasiswa</h1>
<?php
//Query seluruh data mahasiswa
$q = 'select * from mahasiswa';
$statement = $connection->prepare($q);
$result = null;
try{
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);
}catch (Exception $ex){
    die($ex->getMessage());
}

?>
<p><a href="index.php?modul=mahasiswa&action=insert_form">Insert new</a> </p>
<table>
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Edit/Del</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $r): ?>
        <tr>
            <td><?=$r->nim?></td>
            <td><?=$r->nama?></td>
            <td><?=$r->ttl?></td>
            <td><?=$r->alamat?></td>
            <td><a href="index.php?modul=mahasiswa&action=edit_form&nim=<?=$r->nim?>"> Edit </a> | <a href="index.php?modul=mahasiswa&action=delete&nim=<?=$r->nim?>"> Delete </a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
