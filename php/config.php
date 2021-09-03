<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$database = 'BIT_PE';
// $host = 'localhost';
// $user = 'id17519778_AYUSHMAN';
// $pass = 'A2d*km*0-^Pz';
// $database = 'id17519778_bit_pe';
$conn = mysqli_connect($host, $user, $pass, $database) or die("Could not connect to database" . mysqli_connect_error());
