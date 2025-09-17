<?php
$host = "trolley.proxy.rlwy.net";
$port = 59066;
$db   = "JustBuyDb"; // atau JustBuyDB kalau kamu impor ke situ
$user = "root";
$pass = "BmdBQwnZWVpETKycvQJBHUpiCOJuXMNf";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "✅ Connected to Railway DB";
?>
