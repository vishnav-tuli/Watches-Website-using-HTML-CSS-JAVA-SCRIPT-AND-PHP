<!DOCTYPE html>
<html>
<head>
    <title>Product Page</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box; user-select: none; font-family: Arial; background: linear-gradient(to top, rgba(11, 11,11, 0.52), rgba(44, 94, 62, 0.73)), url(background.jpg); background-repeat: no-repeat; background-position: center; background-attachment: fixed; background-size: cover; display: flex; justify-content: center; align-items: center; min-height: 100vh;">

<?php

$image1 = "assets/watche1.webp";
$image2 = "assets/watch2.jpeg";
$productName1 = "Product 1";
$productName2 = "Product 2";
?>

    <div style="text-align: center;">
        <div style="display: inline-block; margin: 10px; border: 1px solid #53bd53; padding: 10px; background: rgba(255, 255, 255, 0.8);">
            <img src="<?php echo $image1; ?>" alt="<?php echo $productName1; ?>" style="max-width: 100%; height: auto;">
            <br>
            <form action="bill.php" method="post">
                <button type="submit" name="checkout" style="background: #53bd53; color: white; border: none; padding: 10px; cursor: pointer;">Checkout</button>
            </form>
        </div>

        

    </div>

</body>
</html>
