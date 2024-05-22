<!DOCTYPE html>
<html>
<head>
    <title>Watch Information</title>
</head>
<body>
    <h2>Watch Information</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $brand = $_POST["brand"];
        $model = $_POST["model"];
        $color = $_POST["color"];
        $image = $_FILES["image"]["name"];
        
        // Process the uploaded image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<img src='$target_file' alt='Watch Image' style='max-width: 300px;'><br>";
        } else {
            echo "Image upload failed.";
        }

        // Display user preferences
        echo "<p><strong>Brand:</strong> $brand</p>";
        echo "<p><strong>Model:</strong> $model</p>";
        echo "<p><strong>Color:</strong> $color</p>";
    }
    ?>
    
    <p><a href="watch_finder.php">Back to Watch Finder</a></p>
</body>
</html>
