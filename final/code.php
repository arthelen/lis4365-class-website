<?php
session_start();
$con = mysqli_connect("sql101.epizy.com","epiz_33366424","v3kfkSiQat8e4","epiz_33366424_order_form");

if(isset($_POST['save_select']))
{
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

    $query = "INSERT INTO orderForm (Name, Email, I1, Q1, P1, I2, Q2, P2, I3, Q3, P3, I4, Q4, P4) VALUES ('$name', '$email', '$item1', '$quantity1', '$price1', '$item2', '$quantity2', '$price2', '$item3', '$quantity3', '$price3', '$item4', '$quantity4', '$price4')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your order went through, thank you!<br><br><br>";
        header("Location: index.php");
	}
    else
    {
        $_SESSION['status'] = "Your order did not go through, our apologies!<br><br><br>";
        header("Location: index.php");
    }
}

?>