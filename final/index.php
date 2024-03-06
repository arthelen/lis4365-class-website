<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
	<title>harvest market order</title>
  	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="order-form.js">  </script> 
	<!-- font links -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
  	<!-- bootstrap icons -->
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<script>
		function validateForm()
		{
			var n = document.forms["myForm"]["name"].value;
			var e = document.forms["myForm"]["email"].value;
			let res = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
			var i1 = document.forms["myForm"]["item1"].value;
			var i2 = document.forms["myForm"]["item2"].value;
			var i3 = document.forms["myForm"]["item3"].value;
			var i4 = document.forms["myForm"]["item4"].value;
			var q1 = document.forms["myForm"]["q1"].value;
			var q2 = document.forms["myForm"]["q2"].value;
			var q3 = document.forms["myForm"]["q3"].value;
			var q4 = document.forms["myForm"]["q4"].value;
			var p1 = document.forms["myForm"]["p1"].value;
			var p2 = document.forms["myForm"]["p2"].value;
			var p3 = document.forms["myForm"]["p3"].value;
			var p4 = document.forms["myForm"]["p4"].value;
//			name validation
			if (n == "" || n == null)
			{
				alert("name must be filled out!");
				return false;
			}
//			email validation
			if (e == "" || e == null || res.test(e) == false)
			{
				alert("a valid email must be filled out!");
				return false;
			}
//			item validation
			if (document.myForm.item1.value == "" && document.myForm.item2.value == "" && document.myForm.item3.value == "" && document.myForm.item4.value == "")
			{
				alert("at least one item must be chosen!");
				return false;
			}
//			quantity validation
			if (document.myForm.q1.value == 0 && document.myForm.q2.value == 0 && document.myForm.q3.value == 0 && document.myForm.q4.value == 0)
			{
				alert("quantity must be at least one!");
				return false;
			}
//			price validation
			if ((p1 == "" || p1.indexOf(".") == false || p1 == null) && (p2 == "" || p2.indexOf(".") == false || p2 == null) && (p3 == "" || p3.indexOf(".") == false || p3 == null) && (p4 == "" || p4.indexOf(".") == false || p4 == null))
			{
				alert("at least one price must be filled out!");
				return false;
			}
//			item 1 validation
			if ((document.myForm.item1.value != "") && (document.myForm.q1.value == 0))
			{
				alert("a quantity must be chosen for item 1!");
				return false;
			}
			if ((document.myForm.item1.value != "") && (p1 == "" || p1.indexOf(".") == false || p1 == null))
			{
				alert("a price must be inputted for item 1!");
				return false;
			}
//			item 2 validation
			if ((document.myForm.item2.value != "") && (document.myForm.q2.value == 0))
			{
				alert("a quantity must be chosen for item 2!");
				return false;
			}
			if ((document.myForm.item2.value != "") && (p2 == "" || p2.indexOf(".") == false || p2 == null))
			{
				alert("a price must be inputted for item 2!");
				return false;
			}
//			item 3 validation
			if ((document.myForm.item3.value != "") && (document.myForm.q3.value == 0))
			{
				alert("a quantity must be chosen for item 3!");
				return false;
			}
			if ((document.myForm.item3.value != "") && (p3 == "" || p3.indexOf(".") == false || p3 == null))
			{
				alert("a price must be inputted for item 3!");
				return false;
			}
//			item 4 validation
			if ((document.myForm.item4.value != "") && (document.myForm.q4.value == 0))
			{
				alert("a quantity must be chosen for item 4!");
				return false;
			}
			if ((document.myForm.item4.value != "") && (p4 == "" || p4.indexOf(".") == false || p4 == null))
			{
				alert("a price must be inputted for item 4!");
				return false;
			}
//			receipt validation
			if ((n != "" || n != null) && (e!= "" || e != null || res.test(e) != false) && (document.myForm.item1.value != "") && (document.myForm.q1.value != 0) && (p1 != "" || p1.indexOf(".") != false || p1 != null))
			{
				alert("thank you so much for your order! here is a review: ＼〈〭^O^〉／\nname: " + n + "\nemail: " + e + "\nitem 1: " + i1 + ", quantity: " + q1 + ", price: " + p1);
				if ((document.myForm.item2.value != "") && (document.myForm.q2.value != 0) && (p2 != "" || p2.indexOf(".") != false || p2 != null))
				{
					alert("\nitem 2: " + i2 + ", quantity: " + q2 + ", price: " + p2);
					if ((document.myForm.item3.value != "") && (document.myForm.q3.value != 0) && (p3 != "" || p3.indexOf(".") != false || p3 != null))
					{
						alert("\nitem 3: " + i3 + ", quantity: " + q3 + ", price: " + p3);
						if ((document.myForm.item4.value != "") && (document.myForm.q4.value != 0) && (p4 != "" || p4.indexOf(".") != false || p4 != null))
						{
							alert("\nitem 4: " + i4 + ", quantity: " + q4 + ", price: " + p4);
						}
					}
				}
			}
		}
	</script>
</head>
<body>
	
  	<br>
	<br>
	<br>
	<img src="title.png" style="height:30%">
  	<br>
	<br>
	
	<div class="nav-bar">
		<a href="index.html"><img src="home-button.png" style="height: 70px" alt="home button"></a>
		<a href="products.html"><img src="products-button.png" style="height: 70px" alt="products button"></a>
		<a href="index.php"><img src="order-button-clicked.png" style="height: 70px" alt="order button"></a>
	</div>
    
	<img src="order-form.png" style="height:16%">
	
	<?php 
        if(isset($_SESSION['status']))
        {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                </div>
            <?php
             unset($_SESSION['status']);
        }
    ?>

	<p>We unfortunately are limited to only taking up to 4 different items per order, but feel free to place multiple orders!<br>We require you provide your name and email for notificaiotn purposes and at least order 1 item with a minimum quantity of 1 and max of 10.<br>When it comes to pricing, please refer to our products page and provide the price for 1 of that item (even if you<br> get a greater quantity than 1) in the text field. Thank you for shopping at Harvest Market!</p>
	
	<br>
	<br>

	<form action="code.php" name="myForm" onsubmit="return validateForm()" method="post">
		<label for="name"><b>name</b></label><br>
		<input type="text" id="name" name="name" placeholder="john doe"><br><br>
		<label for="email"><b>email</b></label><br>
		<input type="text" id="email" name="email" placeholder="johndoe@email.com"><br><br>

		<table width="50%" id="alignment" >
		<center>
		<tr>
<!--		<th>food item</th>-->
		<th>item(s)</th>
		<th>quantity</th>
		<th>price</th>
		</tr>
		<tr> 
<!--		<td>item 1:</td> -->
		<td>
		<select name="item1">
		<option value="">food item 1</option> 
		<option value="apple">apple(s)</option> 
		<option value="banana">banana(s)</option> 
		<option value="bell_pepper">bell-pepper(s)</option> 
		<option value="broccoli">broccoli</option> 
		<option value="carrot">carrot(s)</option>
		<option value="corn">corn</option>
		<option value="cucumber">cucumber(s)</option>
		<option value="eggplant">eggplant(s)</option>
		<option value="grape">grape(s)</option>
		<option value="onion">onion(s)</option>
		<option value="orange">orange(s)</option>
		<option value="pickle">pickle(s)</option>
		<option value="potato">potato(es)</option>
		<option value="radish">radish(es)</option>
		<option value="spinach">spinach</option>
		<option value="strawberry">strawberry(ies)</option>
		<option value="tomato">tomato(es)</option>
		<option value="turnip">turnip(s)</option>
		<option value="watermelon">watermelon(s)</option>
		<option value="zucchini">zucchini</option>
		</select>
		</td> 
		<td><select name="q1">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		</select>
		</td>
		<td>$ <input type="text" name="p1" placeholder="3.00"></td>
		</tr>   
		<tr>
<!--		<td>item 2:</td>-->
		<td>
		<select name="item2">
		<option value="">food item 2</option> 
		<option value="apple">apple(s)</option> 
		<option value="banana">banana(s)</option> 
		<option value="bell_pepper">bell-pepper(s)</option> 
		<option value="broccoli">broccoli</option> 
		<option value="carrot">carrot(s)</option>
		<option value="corn">corn</option>
		<option value="cucumber">cucumber(s)</option>
		<option value="eggplant">eggplant(s)</option>
		<option value="grape">grape(s)</option>
		<option value="onion">onion(s)</option>
		<option value="orange">orange(s)</option>
		<option value="pickle">pickle(s)</option>
		<option value="potato">potato(es)</option>
		<option value="radish">radish(es)</option>
		<option value="spinach">spinach</option>
		<option value="strawberry">strawberry(ies)</option>
		<option value="tomato">tomato(es)</option>
		<option value="turnip">turnip(s)</option>
		<option value="watermelon">watermelon(s)</option>
		<option value="zucchini">zucchini</option>
		</select>
		</td>
		<td><select name="q2">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		</select>
		</td>
		<td>$ <input type="text" name="p2" placeholder="2.00"></td>
		</tr> 
		<tr>
<!--		<td>item 3:</td>-->
		<td><select name="item3">
		<option value="">food item 3</option> 
		<option value="apple">apple(s)</option> 
		<option value="banana">banana(s)</option> 
		<option value="bell_pepper">bell-pepper(s)</option> 
		<option value="broccoli">broccoli</option> 
		<option value="carrot">carrot(s)</option>
		<option value="corn">corn</option>
		<option value="cucumber">cucumber(s)</option>
		<option value="eggplant">eggplant(s)</option>
		<option value="grape">grape(s)</option>
		<option value="onion">onion(s)</option>
		<option value="orange">orange(s)</option>
		<option value="pickle">pickle(s)</option>
		<option value="potato">potato(es)</option>
		<option value="radish">radish(es)</option>
		<option value="spinach">spinach</option>
		<option value="strawberry">strawberry(ies)</option>
		<option value="tomato">tomato(es)</option>
		<option value="turnip">turnip(s)</option>
		<option value="watermelon">watermelon(s)</option>
		<option value="zucchini">zucchini</option>
		</select>
		</td>
		<td><select name="q3">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		</select>
		</td>
		<td>$ <input type="text" name="p3" placeholder="4.00"></td>
		</tr> 
		<tr>
<!--		<td>item 4:</td>-->
		<td><select name="item4">
		<option value="">food item 4</option>
		<option value="apple">apple(s)</option> 
		<option value="banana">banana(s)</option> 
		<option value="bell_pepper">bell-pepper(s)</option> 
		<option value="broccoli">broccoli</option> 
		<option value="carrot">carrot(s)</option>
		<option value="corn">corn</option>
		<option value="cucumber">cucumber(s)</option>
		<option value="eggplant">eggplant(s)</option>
		<option value="grape">grape(s)</option>
		<option value="onion">onion(s)</option>
		<option value="orange">orange(s)</option>
		<option value="pickle">pickle(s)</option>
		<option value="potato">potato(es)</option>
		<option value="radish">radish(es)</option>
		<option value="spinach">spinach</option>
		<option value="strawberry">strawberry(ies)</option>
		<option value="tomato">tomato(es)</option>
		<option value="turnip">turnip(s)</option>
		<option value="watermelon">watermelon(s)</option>
		<option value="zucchini">zucchini</option>
		</select>
		</td>
		<td><select name="q4">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		</select>
		</td>
		<td>$ <input type="text" name="p4" placeholder="3.00"></td>
		</tr>    
		<tr>
<!--		<td></td> -->
		<td><td></td></td> 
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td><td><button type="submit" name="save_select" onclick="formSubmit()">submit</td></tr>
		<tr><td></td><td><button type="reset" value="clear">clear</td></tr>
		</tr>
		</center>
		</table>
	</form>

<!--
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
-->
</body>
</html>