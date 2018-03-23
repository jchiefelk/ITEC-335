
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

button {
  font-size: 1rem;
  width: 10rem;
}


@media (min-width: 640px){
  p {
    font-size: 1.4rem;
  }
}

@media (max-width: 640px){
  p {
    font-size: 0.9rem;
  }
}

</style>

</head>

<body>  
  <p>Authentication Form</p>
  <form method="POST">
    <input type="text" name="password" placeholder="password"/>
    <input type="submit" value="Let me in!"/>
  </form>
</body>

<?php include('form.php'); ?>

</html>