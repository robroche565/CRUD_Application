<?php

    $link = mysqli_connect("localhost","root","","dbschedule");
    if($link==false)
    {
        die("Error:Could not connect." .mysqli_connect_error());
    }

?>