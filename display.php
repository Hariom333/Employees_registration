

<?php 
include "conn.php";
include "header.php"; 

$qry="select * from record";

$data=mysqli_query($conn,$qry);
$total=mysqli_num_rows($data);



 
 if($total !=0)
 { 
     ?>


   <table class="table table-striped" >
  <tr>
  <th>id</th> 
<th>Name  </th>
<th>Father name  </th> 
 <th>Mother name  </th>
 <th>DOB  </th>
 <th> Gender </th>
 <th> Skill </th>
 <th> position </th>
 <th> File </th>
 <th> EDIT </th>
 <th> DELETE 
 
 
 </th>
</tr>


 <?php
 while($result = mysqli_fetch_assoc($data))
 {
echo " <tr> 
          <td>".$result['id']." </td>
          <td>".$result['Name']." </td>
          <td>".$result['father_Name']." </td> 
          <td>".$result['Mother_Name']."</td>
          <td>".$result['DOB']."</td>
          <td> ".$result['Gender']." </td>
         <td> ".$result['Skills']." </td>
         <td> ".$result['file']." </td>
		 <td> <img src='image/$result[Image]'> </td>
         
         <td><a href='crud_update.php?id=$result[id]'>Update</a> </td>
		 <td><a href='crud_delete.php?id=$result[id]'> DELETE</a> </td>
</tr>";
 
 }
 }
 else 
 {
	 echo $result['Name']." ".$result['father_Name']." ".$result['Mother_Name']." ".$result['DOB']." ".$result['Gender']." ".$result['Skills']." ".$result['file']." ".$result['Image']."<br/>";
	 echo "no record";
 
 }
 ?>
 
 </table>
 
 
 