<?php

    $con=mysql_connect('localhost','root','', 'login');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysql_error($con));
    }
?>
