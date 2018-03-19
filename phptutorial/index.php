<html>


<head>


<style type=”text/css”>



.container {
	display: flex;
}

.container input {
	flex-direction: row;
}



</style>




</head>



<body>

<?php print ("First PHP Form\n"); ?>

<div>
	<input type="text" name="username" value="<?php echo $username;?>">
	
</div>

<div>
	<input type="text" name="password" value="<?php echo $password;?>">
</div>



</body>

</html>
