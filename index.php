<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 10/04/2019
 * Time: 8:50d
 */
include 'config/connection.php';

//$modul = isset($_GET['modul']) ? $_GET['modul'] : 'menu1';
//$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$modul =  $_GET['modul']  ?? 'menu1';
$action = $_GET['action'] ?? 'index';


include 'layout/index.php';
?>