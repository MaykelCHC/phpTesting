<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Connecting to the database
    $host = 'localhost';
    $dbname = 'product_db';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Deleting the product
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);

    // Redirect to the product list page
    header("Location: index.php");
    exit();
}
?>
