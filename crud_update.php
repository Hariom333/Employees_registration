<?php

include "header.php";

?>


<body>


<section class="container-fluid bg">
<section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3">

<form action="" method="POST" enctype="multipart/form-data" class="form-container">

<div class="form-group">
<label for="name">Name</label><input class="form-control" type="text" name="name" id="name">
<div>

<div class="form-group">
<label for="fname">Father name</label><input class="form-control" type="text" name="fname" id="fname"> 
</div>

<div class="form-group">
<label for="mname">Mother name</label><input class="form-control" type="text" name="mname" id="mname" > 
</div>
<div class="form-group">
<label for="birth">D.O.B</label><input  class="form-control" type="date" name="birth" id="birth" > 
<div>
<div class="form-group">
<label for="gender">Gender</label><input type="radio" name="gender" value="male" id="gender">male
      <input type="radio" name="gender" value="female">female 
	  </div>
<div class="form-group">
<label for="skill">Skills:-</label>
C <input type="checkbox" name="skill[]" value="C">
HTML <input type="checkbox" name="skill[]" value="HTML">
C++ <input type="checkbox" name="skill[]" value="C++"> 
MYSQL <input type="checkbox" name="skill[]" value="MYSQL">
 CSS <input type="checkbox" name="skill[]" value="CSS"> 
 C++<input type="checkbox" name="skill[]" value="C++"> 
 </div>
 <div class="form-group">
 <label for="filename">Position</label><input class="form-control" type="text" name="filename" >
</div>
<div class="form-group">
<label for="name">Image</label><input class="form-control" type="file" name="image">
</div>
<div class="form-group">
<input type="submit" name="update" value="update" >
</div>



<?php
include "conn.php";
if(isset($_POST['update']))
{
	$id=$_GET['id'];
	
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$DOB=$_POST['birth'];
$gender=$_POST['gender'];
$skill=$_POST['skill'];
$b=implode(",",$skill);
 

$files=$_POST['filename'];


$imagename=$_FILES['image']['name'];
	$tempname=$_FILES['image']['tmp_name'];
	
	move_uploaded_file($tempname,"../dean/image/$imagename");

$qry=" update record set Name='$name',father_Name='$fname',Mother_Name='$mname',DOB='$DOB',Gender='$gender',Skills='$b', Image='$imagename' where id=$id";

$add=mysqli_query($conn,$qry);
header('location:display.php');
}
?>

</form>
<a href="index.php" button type="button" class="btn btn-success btn-block"> Back </button></a>
</section>
</section>
</section>
</body>
</html>
