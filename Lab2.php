<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $dobErr = $genderErr = $emailErr = $degreeErr =$bloodErr = "" ;
$name = $email = $dob = $gender = $comment = $degree =$blood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  elseif(strlen($name)<= 2) {
     $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $nameErr = "Name is required and must be start with a capital letter, dashes, must not start with dash/space.";

}
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["dob"])) {
    $dobErr = "Date of Birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["degree"])) {
    $countDegree = count($_POST["degree"]);

    if($countDegree<2){
      $degreeErr = "Select minimum two";
    }
  }else{
     $degreeErr = "";
  }

  if (empty($_POST["blood"])) {
      $bloodErr = "Must be select";
    } else {
      $blood = test_input($_POST["blood"]);
    }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 

?>


<p>
  <fieldset><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <fieldset>
  <legend><b> Name </b> </legend> <input type="text" name="name">

  <span class="error">* <?php echo $nameErr;?></span>
  <hr>
  </fieldset>
  <br><br>

  <fieldset>
  <legend><b> E-mail </b> </legend> <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <hr>
  </fieldset>
  <br><br>

 <fieldset>
  <legend> <b> Date Of Birth </b> </legend> <input type="date" name="dob" 
        placeholder="dd-mm-yyyy" value=""
        min="1995-01-01" max="2025-12-31"> 
  <span class="error">*<?php echo $dobErr;?></span>
  <hr>
</fieldset>
  <br><br>
 
 <fieldset>
  <legend><b> Gender </b> </legend>
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <hr>
</fieldset>
  <br><br>


<fieldset>
 <legend> <b>DEGREE </b> </legend>
<input type="checkbox" name="degree[]" value="SSC" /> SSC
  <input type="checkbox" name="degree[]" value="HSC" /> HSC
  <input type="checkbox" name="degree[]" value="BSc" /> BSc
  <input type="checkbox" name="degree[]" value="MSc" /> MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <hr>
</fieldset>
  <br><br>

  <fieldset>
   <legend><b> BLOOD GROUP</b> </legend> 
   <select name="blood">
        <option></option>
        <option>O+</option>
        <option>O-</option>
        <option>B+</option>
        <option>A+</option>
        <option>A-</option>
        <option>AB-</option>
        
        </select>
        <span class="error">* <?php echo $bloodErr;?></span>
        <hr>
  </fieldset><br><br>


    <input type="submit" name="submit" value="Submit">

</form>
</fieldset>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
if(isset($_POST['submit'])){
      if(!empty($_POST['degree'])){
      foreach($_POST['degree'] as $checked){
        echo $checked."</br>";
      }
    }
  }
echo $blood;
?>

</body>
</html>