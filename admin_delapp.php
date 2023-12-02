<?php
  
  include 'config.php';

  if (isset($_GET["confirm"])){
    $id = $_GET["confirm"];
}

   if(isset($_POST['delete'])){
        $id=$_POST['id'];
        
        $sqltransfer="INSERT INTO archive_app
        SELECT * FROM jobseeker_info
        WHERE Jobseeker_ID=$id";
        $result1 = mysqli_query($conn, $sqltransfer);

        $sql="delete from jobseeker_info where jobseeker_id=$id";
        $result2 = mysqli_query($conn,$sql);

    if($result2){
        header("location:admin_app.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>