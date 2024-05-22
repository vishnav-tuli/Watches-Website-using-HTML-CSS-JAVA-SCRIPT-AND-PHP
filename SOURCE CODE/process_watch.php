<!DOCTYPE html>
<html>
<head>
    <title>Watch Information</title>
</head>
<body style="background: linear-gradient(to bottom, #53bd53, #ffffff); display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; padding: 0;">
    <div style="text-align: center; background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); width: 400px;">
        <h2 style="color: #53bd53; font-size: 24px;">Watch Information</h2>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $Brand = $_POST["Brand"];
            $color = $_POST["color"];
            $Price = $_POST["Price"];
            
            
            echo "<p><strong>Brand:</strong> $Brand</p>";
            echo "<p><strong>Color:</strong> $color</p>";
            echo "<p><strong>Price:</strong> $Price</p>";
        }
        ?>
        
        <p><a href="checkoutpage.php" style="text-decoration: none; background: #53bd53; color: white; padding: 10px 20px; border-radius: 5px; display: inline-block; margin-top: 20px;">Proceed</a></p>
    </div>
</body>
</html>
