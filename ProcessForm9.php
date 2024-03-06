<?php

// database configuration
$host = "sql101.epizy.com";
$username = "epiz_33366424";
$password = "v3kfkSiQat8e4";
$dbname = "epiz_33366424_assignment";

// connection test
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("database connection failed (◞╭╮◟) " . mysql_error());
}

// get form values
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$message = $_POST['message'];

// put values into database
$stmt = mysqli_prepare($conn, "INSERT INTO assignment (FirstName, LastName, Age, Message) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $age, $message);

if (mysqli_stmt_execute($stmt)) {
    echo "form submitted successfully! ___〆(´•‿‿•`)";
} else {
    echo "uh oh! an error occured while trying to submit the form ╮(ﾟ～ﾟ;)╭ " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);

?>