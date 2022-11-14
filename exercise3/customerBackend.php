<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$cerealA = $_POST["CerealA"];
$cerealB = $_POST["CerealB"];
$cerealC = $_POST["CerealC"];
$halfMilk = $_POST["HalfMilk"];
$email = $_POST["email"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$shippingCost = 0;
if ($shipping == "3 Day") $shippingCost = 5;
if ($shipping == "Overnight") $shippingCost = 50;
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    </style>
</head>

<body>
    <div id="main">
        <h1>Welcome, <?php echo $email; ?>!</h1>
        <h2>Your password: <?php echo $password; ?></h2>
        <h3>Thanks for your order. A copy of your receipt is below.</h3>
        <table>
            <tr>
                <th>Receipt</th>
                <th>Quantity</th>
                <th>Cost Per Item</th>
                <th>Sub Total</th>
            </tr>
            <tr>
                <td>Cereal A</td>
                <td><?php echo $cerealA; ?></td>
                <td>$3.79</td>
                <td>$<?php echo $cerealA * 3.79; ?></td>
            </tr>
            <tr>
                <td>Cereal B</td>
                <td><?php echo $cerealB; ?></td>
                <td>$4.29</td>
                <td>$<?php echo $cerealB * 4.29; ?></td>
            </tr>
            <tr>
                <td>Cereal C</td>
                <td><?php echo $cerealC; ?></td>
                <td>$2.67</td>
                <td>$<?php echo $cerealC * 2.67; ?></td>
            </tr>
            <tr>
                <td>1/2 gal. Whole Milk</td>
                <td><?php echo $halfMilk; ?></td>
                <td>$3.49</td>
                <td>$<?php echo $halfMilk * 3.49; ?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td colspan="2"><?php echo $shipping; ?></td>
                <td>$<?php echo $shippingCost; ?></td>
            </tr>
            <tr>
                <td colspan="3">Total Cost</td>
                <td>$<?php echo $cerealA * 3.79 + $cerealB * 4.29 + $cerealC * 2.67 + $halfMilk * 3.49 + $shippingCost; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>