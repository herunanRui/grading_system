 <?php   
 session_start();  
 include 'config.php';  
 if (isset($_POST['login'])) {  
      
      $a_name=mysqli_real_escape_string($conn,$_POST['a_name']);  
      $a_pass=mysqli_real_escape_string($conn,$_POST['a_pass']);  
      $sql=mysqli_query($conn,"Select * from admin where admin_User= '$a_name' AND admin_Pass= '$a_pass'");  
      $num=mysqli_num_rows($sql);  
      if ($num>0) {  
	  
           $row=mysqli_fetch_assoc($sql);  
           $_SESSION['admin_ID']=$row['admin_ID'];  
		   $_SESSION['admin_name']=$row['first_Name']; 
		   $_SESSION['admin_user']=$row['admin_User'];
           $_SESSION['admin_pass']=$row['admin_Pass']; 		   
           		   
           header("location: stud_page.php");  
      }else{  
           echo "<script> alert('invalid user/pass'); </script>";
	       echo '<h2><a href="index.html">back</a></h2>';
      }  
 }  
 ?>  