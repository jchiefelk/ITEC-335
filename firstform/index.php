<html>
<head>
<style>

html {
  background: white;
  font-size: 18px;
  display: flex;

  justify-content: center;
}

form{
  display: flex;
  flex-direction: column;
  width: 20%;
}

input {
    width: 10rem;
    height: 1.5rem;
    margin: 0.3rem;
}

p {
  font-size: 1.4rem;
}

button {
  font-size: 1rem;
  width: 10rem;
}

</style>

</head>


<body>  
  <p>Authentication Form</p>
  <form method="GET">
    <input type="text" name="user" placeholder="username"/>
    <input type="text" name="password" placeholder="password"/>
    <button>SUBMIT</button>
  </form>
</body>


<?php
$username = $_GET['user'];
$password = $_GET['password'];
print $username;
print $password;
?>

</html>