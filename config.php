<?php
$host = 'localhost';
$dbname = 'mydatabase';
$username = 'root'; // اگر پسورد دارید، آن را اینجا وارد کنید
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
