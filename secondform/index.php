<?php
$password = $_POST['password'];
$ref="test";

if($password==$ref){ // enter your password here
                $mysqli = new mysqli("127.0.0.1","root",$password,"employees"); // host,username,password,db name

                // Oh no! A connect_errno exists so the connection attempt failed!
                if ($mysqli->connect_errno) {
                    // The connection failed. What do you want to do? 
                    // You could contact yourself (email?), log the error, show a nice page, etc.
                    // You do not want to reveal sensitive information

                    // Let's try this:
                    echo "Sorry, this website is experiencing problems.";

                    // Something you should not do on a public site, but this example will show you
                    // anyways, is print out MySQL error related information -- you might log this
                    echo "Error: Failed to make a MySQL connection, here is why: \n";
                    echo "Errno: " . $mysqli->connect_errno . "\n";
                    echo "Error: " . $mysqli->connect_error . "\n";
                    
                    // You might want to show them something nice, but we will simply exit
                    exit;
                }
                $sql="SELECT firstname FROM instructors";
                if (!$result = $mysqli->query($sql)){
                    // Oh no! The query failed. 
                    echo "Sorry, the website is experiencing problems.";
                    // Again, do not do this on a public site, but we'll show you how
                    // to get the error information
                    echo "Error: Our query failed to execute and here is why: \n";
                    echo "Query: " . $sql . "\n";
                    echo "Errno: " . $mysqli->errno . "\n";
                    echo "Error: " . $mysqli->error . "\n";
                    exit;
                }

                if($result->num_rows===0){
                    // Oh, no rows! Sometimes that's expected and okay, sometimes
                    // it is not. You decide. In this case, maybe actor_id was too
                    // large? 
                    echo "We could not find a match, sorry about that. Please try again.";
                    exit;
                }


                // Now, we know only one result will exist in this example so let's 
                // fetch it into an associated array where the array's keys are the 
                // table's column names
                $array = Array();
                while($data = $result->fetch_assoc()){
                    $array[] = $data['firstname'];
                }

                for($x=0;$x<count($array);$x++){
                  echo "<pre>";
                  print_r($array[$x]);
                  echo "</pre>";
                }

                # print_r($array)
                # $names = $result->fetch_assoc();
                # echo count($names);
                /**
                echo "<pre>";
                print_r($names);
                echo "</pre>"
                foreach($names as $x=>$x_value) {
                  echo "Key=" . $x . ", Value=" . $x_value;
                  echo "<br>";
                };
                ***/
                # echo "Sometimes I see " . $names; 

                # $result= $mysqli->query("SELECT firstname FROM instructors"); // get firstname column from the table 
                # echo "<script>console.log( 'Debug Objects: " . $result . "' );</script>";
                # print $result; // Print results to the screen
  }


?>

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
  <form method="POST" action="index.php">
    <input type="text" name="password" placeholder="password"/>
    <input type="submit" value="Let me in!" onclick="myFunction()"/>
  </form>


  <script>
    function myFunction(){
      alert("clicked");
    };
  </script>
</body>


</html>