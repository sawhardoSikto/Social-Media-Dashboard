<?php
    $host="127.0.0.1";
    $dbname="social-media-dashboard";
    $dbuser = "root";
    $dbpass= "";
    
    function getConnection() 
    {
        global $host, $dbuser, $dbpass,$dbname;
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $con;

    }


?>