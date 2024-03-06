<?php

// database configuration
$host = "sql101.epizy.com";
$username = "epiz_33366424";
$password = "v3kfkSiQat8e4";
$dbname = "epiz_33366424_order_form";

// connection test
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("database connection failed (◞╭╮◟) " . mysql_error());
}

// get form values
$name = $_POST['name'];
$email = $_POST['email'];
$item1 = $_POST['item1'];
$quantity1 = $_POST['q1'];
$price1 = $_POST['p1'];
$item2 = $_POST['item2'];
$quantity2 = $_POST['q2'];
$price2 = $_POST['p2'];
$item3 = $_POST['item3'];
$quantity3 = $_POST['q3'];
$price3 = $_POST['p3'];
$item4 = $_POST['item4'];
$quantity4 = $_POST['q4'];
$price4 = $_POST['p4'];

// put values into database
$stmt = mysqli_prepare($conn, "INSERT INTO orderForm (Name, Email, I1, Q1, P1, I2, Q2, P2, I3, Q3, P3, I4, Q4, P4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssssssssssssss", $name, $email, $item1, $quantity1, $price1, $item2, $quantity2, $price2, $item3, $quantity3, $price3, $item4, $quantity4, $price4);

if (mysqli_stmt_execute($stmt)) {
    echo "form submitted successfully! ___〆(´•‿‿•`)";
} else {
    echo "uh oh! an error occured while trying to submit the form ╮(ﾟ～ﾟ;)╭ " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);

?>