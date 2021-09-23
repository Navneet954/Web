<?php 
        $captchaResult = $_POST['captchaResult'];
		$firstNumber = $_POST["firstNumber"];
		$secondNumber = $_POST["secondNumber"];

		$checkTotal = $firstNumber + $secondNumber;
		

		if ($captchaResult == $checkTotal) {
			echo '<h2 class="green">Captcha OK</h2>';
		} else {
			echo '<h2 class="red">Wrong Captcha. Try Again</h2>';
		}
	?>