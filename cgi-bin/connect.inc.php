<?php

    $mysql_host = 'localhost';
    $mysql_username = 'zealroot';
    $mysql_password = 'zealadmin';
    $mysql_db = 'u891678387_zeal';
    
    if(@!mysql_connect($mysql_host,$mysql_username,$mysql_password)||@!mysql_select_db($mysql_db)){
        die('could not connect.');
    }

?>