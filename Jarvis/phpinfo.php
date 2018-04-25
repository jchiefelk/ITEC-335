<html>
<head>
<style>
.passwordinput{
height: 2rem;
width: 50%;
}
</style>
</head>

<body>

<form method="POST">

<input name="password"  placeholder="password" class="passwordinput" type="password"/>
<input type="submit" value="submit" />

</form>


<?php

$password=$_POST['password'];
echo $password;
?>



</body>
</html>

