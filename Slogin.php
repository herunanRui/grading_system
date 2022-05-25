 <?php   
 session_start();  
 include 'config.php';  
 if (isset($_POST['login'])) {  
      
      $stud_name=mysqli_real_escape_string($conn,$_POST['S_name']);  
      $stud_id=mysqli_real_escape_string($conn,$_POST['S_ID']);  
      $sql=mysqli_query($conn,"Select * from students where stud_ID= '$stud_id' AND first_Name= '$stud_name'");  
      $num=mysqli_num_rows($sql);  
      if ($num>0) {  
	  
           $row=mysqli_fetch_assoc($sql);  
           $_SESSION['student_ID']=$row['stud_ID'];  
		   $_SESSION['fname']=$row['first_Name']; 
		   $_SESSION['lname']=$row['last_Name'];
           $_SESSION['course']=$row['course']; 		   
           		   
           header("location: stud_page.php");  
      }else{  
           echo "<script> alert('invalid user/pass'); </script>";
	       echo '<h2><a href="index.html">back</a></h2>';
      }  
 }  
 ?>  