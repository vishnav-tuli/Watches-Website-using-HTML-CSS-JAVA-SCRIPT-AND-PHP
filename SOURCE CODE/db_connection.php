<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reviews";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $reviewText = $_POST['reviewText'];
        $rating = $_POST['rating'];

        
        $stmt = $conn->prepare("INSERT INTO reviews (reviewText, rating) VALUES (:rText, :rating)");
        $stmt->bindParam(':rText', $reviewText); 
        $stmt->bindParam(':rating', $rating);    

        
        $stmt->execute();

        
        $conn = null;

        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
