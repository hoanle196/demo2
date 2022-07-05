<?php
require_once 'conn.php';
		
	$sql_select = "SELECT * FROM employees";
	$arrs = mysqli_query($conn,$sql_select);
	// while($a = mysqli_fetch_array($arrs,MYSQLI_ASSOC))
	// {
	// 	echo $a['name']."-".$a['description']."-".$a['salary'];
	// }
	// echo"<pre>";
	// print_r($arrs);
	// echo"</pre>";

?>
<style>

	body{
		background-image: linear-gradient(120deg, #FFF6AB, #E99EBC);
	}
	/* .container
	{
		
		background-color: #fff;

	} */
	.head h1{
		color: skyblue;
	}
	.head{
		display: flex;
		justify-content: space-between;
		/* align-items: center; */
	}
	.head span{
		display: inline-block;
		padding: 10px;
		background-color: rgb(85,171,110);
		border-radius: 4px;
		color: #fff;
		font-weight: 600;
	}
	.table a
	{
		color: #fff;
		padding: 0px 5px;
	}
	.head a:hover
	{
		opacity: 0.8;
	}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh sách Employees</title>
</head>
<body>
	
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<div class="container border-primary boder-2 rounded m-auto mt-5 p-2">
	<div class="head">
	<h1>Employees List</h1>
	<a href="index.php"><span>+ add New Employees</span></a>
	</div>
  
  <hr>
  <table class="table table-hover">
    <thead>
      <tr>
	<th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Salary</th>
        <th>Gender</th>
        <th>Birth day</th>
        <th>Created_at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php $id=0; foreach($arrs as $a) { $id++; ?>
      <tr>
        <td><?= $id ?></td>
        <td><?php echo $a['name']?></td>
        <td><?php echo $a['description']?></td>
        <td><?php echo $a['salary']?></td>
        <td><?php echo $a['gender']?></td>
        <td><?php echo $a['birthday']?></td>
        <td><?php echo $a['created_at']?></td>
       <td>
	<a href="detai.php?id=<?php echo $a['id'];?>"><i class="fa-solid fa-eye"></i></a>
	<a href="update.php?id=<?php echo $a['id'];?>"><i class="fa-solid fa-eye-dropper"></i></a>
	<a onclick="return confirm('Ban có chắc chắn xoá ?');" href="delete.php?id=<?php echo $a['id'];?>"><i class="fa-solid fa-trash-can"></i></a>
        </td>
      </tr>
      <?php }?>
 
    </tbody>
  </table>
</div>
