<?php
session_start();

if (isset($_GET["tracking_number"])) {
    $tracking_number = $_GET["tracking_number"];

    if (isset($_SESSION["orders"][$tracking_number])) {
        $order = $_SESSION["orders"][$tracking_number];
    } else {
        echo "Invalid tracking number.";
        exit();
    }
} else {
    echo "Tracking number not provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Order Status</h1>

        <p><strong>Tracking Number:</strong> <?php echo $tracking_number; ?></p>
        <p><strong>Customer Name:</strong> <?php echo $order["customer_name"]; ?></p>
        <p><strong>Product Name:</strong> <?php echo $order["product_name"]; ?></p>
        <p><strong>Status:</strong> <?php echo $order["status"]; ?></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
