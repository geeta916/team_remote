<?php

$username = "root";
$password = "";
$server = "localhost";
$database = "registration";

$con = mysqli_connect($server,$username,$password,$database);
if ($con) {
    ?>

    <script type="">
        alert('connection successfull')
    </script>

    <?php
}else{
    ?>
    <script type="">
        alert('No Connection');
    </script>
    <?php
}

?>