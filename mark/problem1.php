<html>

	<head>
	</head>
	<body>
		<?php

		$array=array(3,9,27,36,49);
		$array2=array();

		for($y=0;$y<sizeof($array) - 1;$y++){
			$temp=$array[$y] * 3;
			array_push($array2, $temp);
		};

		for($z=0;$z<sizeof($array2);$z++){
			echo $array2[$z];
		};
		
		?>
	</body>
</html>