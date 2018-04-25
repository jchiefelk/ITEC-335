<html>

	<head>
		<style>
			input{
				height: 2rem;
				width:50%;
			}
		</style>
	</head>

	<body>
		<form method="POST">
			<input placeholder="Password" name="Password" class="passwordinput" type="password"/>
			<input type="submit"/>
		</form>



		<?php

		$password=$_POST['Password'];
		print $password;

		/*
		echo "Hello World!";

		$variable = "Hello!";
		echo $variable;

		for ($x=0;$x<10;$x++){
			echo $x;
		};

		echo "Testing...123";

		$array=array(1,10,100,1000,5000);

		for ($y=0;$y=5;$y++){\
			echo $array[$y];
		};
		*/
		?>
	</body>

</html>