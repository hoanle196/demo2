<?php
require_once 'conn.php';
if(isset($_GET['id']))
{
          $id = $_GET['id'];
          $sql_show = "SELECT *FROM employees WHERE id = $id";
          $arr = mysqli_query($conn,$sql_show);
          $row = mysqli_fetch_assoc($arr);
          // echo "<pre>";
          // print_r($row);
          // echo "</pre>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
          <title>Chi tiết employees</title>

</head>
<style>
          span{
                    display: inline-block;
                    font-size: 18px;
                    font-weight: 600;
                    color: skyblue;
          }
          body
          {
                    background-image: linear-gradient(120deg, #FFF6AB, #E99EBC);  
                    height: 100vh;
          }
     
          .container__child
          {
          
                    border-bottom: 1px solid #eee;
          }
          a.btn{
                    margin-top: 10px;

          }
</style>
<body>
          <div class="container mt-5 ">
          <h1 style="color: skyblue;">View Record</h1>
          <hr>

                    <span>ID</span>
                    <div class="container container__child"><?php echo $row['id']; ?></div>
                    <span>Name</span>
                    <div class="container container__child"><?php echo $row['name']; ?></div>
                    <span>Description</span>
                    <div class="container container__child"><?php echo $row['description']; ?></div>
                    <span>Salary</span>
                    <div class="container container__child"><?php echo (number_format($row['salary'],'0',',','.'))." "."VND";?></div>
                    <span>Gender</span>
                    <div class="container container__child"><?php echo $row['gender']; ?></div>
                    <span>Birth day</span>
                    <div class="container container__child"><?php  echo  date("d/m/Y",strtotime($row['birthday']));?></div>
                    <span>Created_at</span>
                    <div class="container container__child"><?php echo $row['created_at']; ?></div>
                    <a style="float:right;" class="btn btn-secondary" href="viewlist.php">Back</a>


          </div>


</body>
</html>