<?php
require_once 'conn.php';
if(isset($_GET['id']))
{
          $id =$_GET['id'];
          // echo $id;
          $sql_del= "DELETE FROM employees WHERE id = $id";
          mysqli_query($conn, $sql_del);
          if(mysqli_query($conn, $sql_del))
          {
                    
           header('location:viewlist.php');
                    echo "<script>";
		echo "alert('Xoá thành công !')";
		echo "</script>";
          exit();      
          }
          else
          {
                    die('loi ket noi CSDL'.$sql_del);
          }
         

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Xoá Employees</title>
</head>
<body>
     
</body>
</html>