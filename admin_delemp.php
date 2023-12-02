<?php
  
  include 'config.php';

  if (isset($_GET["confirm"])){
    $id = $_GET["confirm"];
}

   if(isset($_POST['delete'])){
        $id=$_POST['id'];
        
        $sqltransfer="INSERT INTO archive_emp
        SELECT * FROM employer_info
        WHERE Employer_ID=$id";
        $result1 = mysqli_query($conn, $sqltransfer);


        $sql="delete from employer_info where Employer_ID=$id";
        $result2 = mysqli_query($conn,$sql);
    
    if($result2){
        header("location:admin_emp.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>