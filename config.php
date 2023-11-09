<?php 
$host = 'localhost';
$db = 'cv';
$user = 'cv';
$pwd = 'cv234';

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die('Ulang Kembali'. mysqli_connect_error());
}

?>