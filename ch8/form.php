<!DOCTYPE html>
<html>
<head><title>PHP Form Handling</title></head>
<body> 
<form action = "" method = "post"> 
	Enter Name <br>
  <input type = "text" name = "studentname" value = "<?php 
    if (isset($_POST['studentname'])) {
      echo $_POST['studentname'];
    }
  ?>">
	<br><br>
	Favorite Subject(s)<br> 
  <input type = "checkbox" name = "subj[]" value = "EL"
  <?php 
	if (isset($_POST['subj']) && in_array('EL', $_POST['subj'])) 
	  echo 'checked'; 
  ?>
  >English
  <input type = "checkbox" name = "subj[]" value = "MA"
  <?php 
	if (isset($_POST['subj']) && in_array('MA', $_POST['subj'])) 
	  echo 'checked'; 
  ?>
  >Math
  <input type = "checkbox" name = "subj[]" value = "PG"
  <?php 
	if (isset($_POST['subj']) && in_array('PG', $_POST['subj'])) 
	  echo 'checked'; 
  ?>
  >Programming
	<br><br>
	Gender <br>
	<input type = "radio" name = "gender" value = "M">Male
	<input type = "radio" name = "gender" value = "F">Female
	<br><br> 
	<input type = "submit" name="sm" value = "Submit Form"> 
</form> 
<?php
	// if (isset($_POST['sm']))
  // print_r($_POST);
  // if (isset($_POST['studentname']))
  // echo 'You entered '.$_POST['studentname'].' into the text field';
  if (isset($_POST['studentname']))
	echo 'You entered '.htmlspecialchars($_POST['studentname']).' into the text field';
?>
</body>
</html>