<?php
    try{
        $conn = mysqli_connect('localhost', 'root', '', '27-04-2022_wpl_real_estate') or die('connection failed');
    } catch (Exception $e) {
        echo "Error occured";
    }
?>