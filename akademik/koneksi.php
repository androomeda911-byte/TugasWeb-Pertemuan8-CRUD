<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "akademik";

try {
    $koneksi = new PDO("mysql:host={$host};dbname={$database};charset=utf8mb4", $username, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $koneksi->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $exception) {
    die("Koneksi database gagal : " . $exception->getMessage());
}

// Sanitasi output (cegah XSS)
function e($v) {
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
}