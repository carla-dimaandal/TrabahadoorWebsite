<?php
  
  include 'config.php';

  if (isset($_GET["confirm"])){
    $id = $_GET["confirm"];
}

 if(isset($_POST['delete'])){
    $id=$_POST['id'];

    $sqltransfer="INSERT INTO employer_info 
        SELECT * FROM archive_emp
        WHERE Archive_empID=$id";
        $result1 = mysqli_query($conn, $sqltransfer);

    
    $sql="delete from archive_emp where Archive_empID=$id";
    $result2 = mysqli_query($conn,$sql);
    
    if($result2){
        header("location:admin_deacemp.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>