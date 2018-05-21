<?php
    $mysqli = new mysqli("localhost", "ryzhovdenis95", "", "opel_antara");
    $mysqli->set_charset("utf8");
    $query = "insert into feedback (name, email, feedback) 
        values ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['feedback']."')";
    $mysqli->query($query);
?>
