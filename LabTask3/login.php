<!DOCTYPE html> 
<html> 
<head>
      <style>
     .error {color: #FF0000;}
     </style>
</head>
<body>

    <?php 
    $nameErr = $passwordErr = "" ;
    $name = $password = "" ;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
    $nameErr = "Name is required and must be from letters, dashes, spaces and must not start with dash";
  } 
  elseif(strlen($name)<= 2) {
     $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $nameErr = "Name must be from letters, dashes, spaces and must not start with dash";

}
  }
 if(!empty($_POST["password"])) {
    $password = test_input($_POST["password"]);
    
    if (strlen($_POST["password"]) <= '8') {
        $passwordErr = "Password Must Contain At Least 8 Characters!";
    }
   
     elseif (!preg_match("/\W/",$password )) {
      $passwordErr = "Must Contain At Least One Special Charecter!";
    }
    
}
else {
     $passwordErr = "Fill The Password!";
}
  
   
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    ?>

 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
        <legend> <b> <font size="5px">Login  </font> </b> </legend>
        <table>
            <tr>
                <td > User Name   </td>
                <span class="error"><?php echo $nameErr;?></span>

                <td><input type="text" name="name"/></td>
            </tr>

            <tr>
                <td>Password </td>
        <br><span class="error"><?php echo $passwordErr;?></span>
                <td><input type="password" name="password"/></td> <br>
                
            </tr>

        </table>
        <hr>
        <input type="checkbox" name="rm">Remember Me 
        <br><br>
        <input type="submit" name="submit" value="Submit"> <a href=""> Forgot Password?</a>
    </fieldset>
    
</form>
<?php 
echo "<br>";
echo "OUPUT : ";
echo "<br>";
echo $name; 
echo "<br>";
echo $password; 
 ?>


</body>
</html>