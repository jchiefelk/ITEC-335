<html>

<head>

</head>

<body>



<?php

$arr=array(9,3,2,15,6,20,26,22,12)

	for($x=0;$x<sizeof($arr);$x++){
		for($y=x;$y<sizeof($arr);$y++){
			if($arr[$x]>$arr[$y] && $x!=$y){

			[$arr[$x],$arr[$y]]=[$arr[$y],$arr[$x]];
		}
	};

};


for($x=0;$x<sizeof($arr);$x++){
	echo $arr[$x];
	echo "\n";
};

?>

</body>
</html>
