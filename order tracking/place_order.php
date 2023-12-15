<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST["customer_name"];
    $product_name = $_POST["product_name"];
    $tracking_number = generate_tracking_number();

    $_SESSION["orders"][$tracking_number] = [
        "customer_name" => $customer_name,
        "product_name" => $product_name,
        "status" => "Processing"
    ];

    header("Location: order_status.php?tracking_number=$tracking_number");
    exit();
}

function generate_tracking_number() {
    return strtoupper(substr(uniqid(), 7, 10));
}
?>
