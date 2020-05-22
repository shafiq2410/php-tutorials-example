<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>PHP Strong Password Generator</title>
  </head>
  <body>
  <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-white bg-success">PHP Strong Password Generator !</h1>
			<hr>
			<h3 class="text-white bg-danger">Strong Password Rules:</h3>
			<ul class="text-info">
				<li>At least one Upper case letter [A-Z]</li>
				<li>At least one Lower case letter [a-z]</li>
				<li>At least One digit [0-9]</li>
				<li>At least one Special character [# % & @ _ ! ~ ]</li>
				<li>Minimum password length = 11 character</li>
			</ul>
			<hr>
			<button type="button" class="btn btn-primary" onClick="window.location.reload();"><h2>Generate</h2></button>
			<h1 class="text-success"> Strong Password= <span class="text-danger"><?php echo strong_password_generator(); ?></span></h1><hr>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

function strong_password_generator()
{ 
	$upper_case_letter = range('A','Z');
	$lower_case_letter = range('a','z');
	$digit = range(0,9);
	$special_character = array('#','$','@','&','!','_','%'); 

	$upper_case_letter_random_three = array_rand(range('A','Z'),3);
	$lower_case_letter_random_three = array_rand(range('a','z'),3);
	$digit_random_three = array_rand(range(0,9),3);
	$special_character_random_three = array_rand(array('#', '%', '&', '@', '_', '!', '~'),2); 

	$upper_case_letter_pass = "";
	$lower_case_letter_pass= "";
	$digit_pass ="";
	$special_character_pass = "";

	foreach($upper_case_letter_random_three as $value)
	{
		$upper_case_letter_pass .= $upper_case_letter[$value];
	}

	foreach($lower_case_letter_random_three as $value)
	{
		$lower_case_letter_pass .= $lower_case_letter[$value];
	}

	foreach($digit_random_three as $value)
	{
		$digit_pass .= $digit[$value];
	}

	foreach($special_character_random_three as $value)
	{
		$special_character_pass .= $special_character[$value];
	}

	$strong_pass= str_shuffle($upper_case_letter_pass.$lower_case_letter_pass.$digit_pass.$special_character_pass);

	return $strong_pass;
}
?>
