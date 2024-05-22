<!DOCTYPE html>
<html>
<head>
    <title>Watch Bill</title>
</head>
<body style="padding: 0; margin: 0; box-sizing: border-box; user-select: none; font-family: Arial; background: linear-gradient(to top, rgba(11, 11, 11, 0.52), rgba(44, 94, 62, 0.73)), url(background.jpg); background-repeat: no-repeat; background-position: center; background-attachment: fixed; background-size: cover; display: flex; flex-direction: column; align-items: center; min-height: 100vh;">

<?php
if (isset($_POST['checkout'])) {
    
    $productName = "Elegant Watch";
    $productPrice = "$2500.00";
    $quantity = 1;
    $totalPrice = $productPrice;

    
    $orderNumber = uniqid("ORDER-");

     
    $customerName = "Darshit Vishnav";
    $customerEmail = "darshitVishnav@gmail.com";
    $customerAddress = "Marine Drive, Mumbai City, Country";

    
    $purchaseDate = date("Y-m-d H:i:s");
    ?>

    <div style="text-align: center;">
        <div style="border: 1px solid #53bd53; padding: 20px; background: rgba(255, 255, 255, 0.8); text-align: left; width: 400px; margin: 0 auto;">
            <h2 style="color: #53bd53;">Order Confirmation</h2>
            <p><strong>Order Number:</strong> <?php echo $orderNumber; ?></p>
            <p><strong>Customer Name:</strong> <?php echo $customerName; ?></p>
            <p><strong>Customer Email:</strong> <?php echo $customerEmail; ?></p>
            <p><strong>Shipping Address:</strong> <?php echo $customerAddress; ?></p>
            <hr style="border: 1px solid #53bd53;">
            <p><strong>Product:</strong> <?php echo $productName; ?></p>
            <p><strong>Price:</strong> <?php echo $productPrice; ?></p>
            <p><strong>Quantity:</strong> <?php echo $quantity; ?></p>
            <p><strong>Total Price:</strong> <?php echo $totalPrice; ?></p>
            <hr style="border: 1px solid #53bd53;">
            <p><strong>Purchase Date:</strong> <?php echo $purchaseDate; ?></p>
        </div>
    </div>

<?php
}
?>

<div style="text-align: center; margin: 20px;">
    <a href="reviewpage.php" style="text-decoration: none;">
        <button style="background: #53bd53; color: white; border: none; padding: 10px 20px; cursor: pointer;">Review</button>
    </a>
</div>

</body>
</html>
