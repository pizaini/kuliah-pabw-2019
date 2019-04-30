<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 10/04/2019
 * Time: 9:00
 */
?>
<h1>Aritmatika</h1>
<form action="index.php?modul=menu1&action=hitung" method="post">
    <p>A  =
        <input
                type="text"
                name="var_a"
                value="<?=isset($_POST['var_a']) ? $_POST['var_a'] : ''?>">
    </p>
    <p>B  = <input
                type="text"
                name="var_b"
                value="<?=$_POST['var_b'] ?? ''?>"
        ></p>
    <p> Operasi aritmatika:
        <select name="aritmatika">
            <option value="+" <?=isset($_POST['aritmatika']) ? 'selected' : ''?>>Penjumlahan</option>
            <option value="-" <?=isset($_POST['aritmatika']) ? 'selected' : ''?>>Pengurangan</option>
            <option value="*" <?=isset($_POST['aritmatika']) ? 'selected' : ''?>>Perkalian</option>
            <option value="/" <?=isset($_POST['aritmatika']) ? 'selected' : ''?>>Pembagian</option>
            <option value="%" <?=isset($_POST['aritmatika']) ? 'selected' : ''?>>Modulo</option>
        </select>
    </p>
    <p><button type="submit">Proses</button></p>
</form>