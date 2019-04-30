<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 30/04/2019
 * Time: 15:28
 */
?>
<h1>Insert new</h1>
<form action="index.php?modul=mahasiswa&action=insert" method="post">
    <label>Nama</label>
    <p>
        <input name="nama" type="text">
    </p>
    <label>NIM</label>
    <p>
        <input name="nim" type="text" maxlength="11">
    </p>
    <label>Tgl Lahir</label>
    <p>
        <input name="ttl" type="date">
    </p>
    <label>Alamat</label>
    <p>
        <textarea name="alamat" rows="5"></textarea>
    </p>
    <button type="submit">Simpan</button>
</form>