
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;

}
.variablecolor{
color: red;
}

</style>
</head>
<body>
<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo  '<b style="color:green;font-size:20px;font-family:calibri ;">
      Valid Image File </b> '  . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


if (file_exists($target_file)) {

  echo '<b style="color:red;font-size:18px;font-family:calibri ;">
      Sorry, file already exists. </b> ';
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 4194304) {
  echo '<b style="color:red;font-size:18px;font-family:calibri ;">
      Sorry, your file is too large. </b> ';
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
  echo '<b style="color:red;font-size:18px;font-family:calibri ;">
      Sorry, only JPG, JPEG, PNG  files are allowed. </b> '; 
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo '<b style="color:red;font-size:18px;font-family:calibri ;">
       Your file was not uploaded. </b> '; 

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo '<b style="color:red;font-size:18px;font-family:calibri ;">
       Sorry, there was an error uploading your file. </b> ';  "";
  }
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <fieldset>
  <img class="avatar" src="imgav.png"/><br><br>

  <input type="file" name="fileToUpload" id="fileToUpload"/>
  <hr>
  <input type="submit" value="Submit" name="submit"><br><br>
  </fieldset>
</form>

</body>
</html>