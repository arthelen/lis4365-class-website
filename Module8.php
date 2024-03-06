<!doctype html>
<html>
<head>
	<meta charset="utf-8">
  	<title>module 8</title>
  	<link rel="stylesheet" href="website-style.css" />
	
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>

  	<br>
  	<hr>
  	<br>

  	<h1>♡¸.• module 8 •.¸♡ </h1>
  	<h4>allison thelen</h4>

  	<br>
	<div class="dropdown">
	<button>ㅤ<i class="bi bi-house-fill">ㅤ</i></button>
	  <div class="dropdown-content">
		  <a href="website-index.html">home</a>
	  </div>
	</div>
	
	<br>
	<br>
	<br>
	<br>
	
	<span style="font-size: 25px;">welcome <b><?php echo $_GET["name"]; ?></b>,</span>
	<br>
	<br>
	<span style="font-size: 20px;">
		your favorite color is <?php
			$color = $_GET["color"];
			if ($color == "black")
			{
				echo "black, nice choice! like coffee (kind of)!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ☕ˎˊ˗</div>";
			}
			if ($color == "blue")
			{
				echo "blue, nice choice! like fish!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🐟ˎˊ˗</div>";
			}
			if ($color == "brown")
			{
				echo "brown, nice choice! like a potato!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🥔ˎˊ˗</div>";
			}
			if ($color == "gray")
			{
				echo "gray, nice choice! like inside a coconut (kind of)!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🥥ˎˊ˗</div>";
			}
			if ($color == "green")
			{
				echo "green, nice choice!  like an avocado!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🥑ˎˊ˗</div>";
			}
			if ($color == "orange")
			{
				echo "orange, nice choice!  like an orange!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🍊ˎˊ˗</div>";
			}
			if ($color == "pink")
			{
				echo "pink, nice choice!  like a lollipop!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🍭ˎˊ˗</div>";
			}
			if ($color == "purple")
			{
				echo "purple, nice choice!  like grapes!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🍇ˎˊ˗</div>";
			}
			if ($color == "red")
			{
				echo "red, nice choice!  like a cherry!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🍒ˎˊ˗</div>";
			}
			if ($color == "white")
			{
				echo "white, nice choice!  like ice cream!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🍦ˎˊ˗</div>";
			}
			if ($color == "yellow")
			{
				echo "yellow, nice choice!  like a lemon!<br /><br /> <div class='food-icon' style='font-size: 30px;'>˗ˏˋ🍋ˎˊ˗</div>";
			}
			if ($color == "othercolor")
			{
				echo "unknown, i wonder what color it is!<br /><br /> <div class='food-icon' style='font-size: 30px;'>《◇☉_☉◇》</div>";
			}	
		?>
	</span>
	
	<br>
	<br>
	<p>˙ᵕ˙</p>
	<br>
	<hr>
	<br>

</body>
</html>