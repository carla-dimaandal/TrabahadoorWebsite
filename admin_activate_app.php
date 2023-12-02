<?php
  
  include 'config.php';

  if (isset($_GET["confirm"])){
    $id = $_GET["confirm"];
}

 if(isset($_POST['delete'])){
    $id=$_POST['id'];

    $sqltransfer="INSERT INTO jobseeker_info
        SELECT * FROM archive_app
        WHERE Archive_appID=$id";
        $result1 = mysqli_query($conn, $sqltransfer);

    
    $sql="delete from archive_app where Archive_appID=$id";
    $result2 = mysqli_query($conn,$sql);
    
    if($result2){
        header("location:admin_deacapp.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>