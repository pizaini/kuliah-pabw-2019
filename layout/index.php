<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 10/04/2019
 * Time: 8:51
 */
?>
<!doctype html>
<html>
    <head>
        <title>This is my app template</title>
    </head>
    <body>
        <p>Menu</p>
        <ul>
            <li><a href="index.php?modul=menu1">Menu 1</a> </li>
            <li><a href="index.php?modul=menu2">Menu 2</a> </li>
            <li><a href="index.php?modul=menu3">Menu 2</a> </li>
            <li><a href="index.php?modul=mahasiswa">Mahasiswa</a> </li>
        </ul>
<!--        Ini adalah content-->
        <?php
            include 'modul/'.$modul.'/'.$action.'.php';
        ?>
    </body>
</html>