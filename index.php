<?php
require_once './conn.php';
// print_r($_POST)
if (isset($_POST["btndangky"])) {

	if (empty($_POST["name"])) {
		$loi = $loiten = "Tên không được để trống<br>";
	} elseif (strlen($_POST["name"]) < 6 || strlen($_POST["name"]) > 50) {
		$loi = $loiten = "Tên từ 6 50 ký tự <br>";
	} else {
		$name = $_POST["name"];
	}
	$name = $_POST["name"]; ////////////////////////////////

	if (empty($_POST["description"])) {
		// $hoten = $_POST["hoten"];
		$loi = $loides = "Mô tả không được để trống<br>";
	} elseif (strlen($_POST["description"]) < 6 || strlen($_POST["description"]) > 200) {
		$loi = $loides = "Mô tả từ 6 - 200 ký tự<br>";
	} else {
		$description = $_POST["description"];
	}

	$description = $_POST["description"]; /////////////////////////////
	if (empty($_POST["salary"])) {

		$loi = $loiluong = "Lương không được để trống<br>";
	} elseif (isset($_POST["salary"]) < 0) {
		$loi = $loiemail = "luong phai la so duong<br>";
	} else {
		$salary = $_POST["salary"];
	}

	$salary = $_POST["salary"]; ////////////////////////////

	if (empty($_POST["ngaysinh"])) {
		$loi = $loingay = "Ngày sinh không được để trống<br>";
	} else {
		$ngaysinh = $_POST["ngaysinh"];
	}

	$ngaysinh = $_POST["ngaysinh"]; //////////////////////////////////

	if (isset($_POST["gioitinh"])) {
		$gioitinh = $_POST["gioitinh"];
	} else {
		$loi = $loigtinh = "Giới tính chưa chọn <br> ";
	}
	// $gioitinh = $_POST["gioitinh"];

	// var_dump($_POST);

	// $gioitinh=$_POST["gioitinh"];
	// var_dump($_POST);

	if (!isset($loi)) {

		$sql_select = "INSERT INTO employees (name,description,gender,salary,birthday)
                    VALUES ('$name','$description','$gioitinh',$salary,'$ngaysinh')";
		$a = mysqli_query($conn, $sql_select);
		// echo "<pre>";
		// print_r(mysqli_query($conn, $sql_select));
		// echo "</pre>";
		// exit();
		// echo 'them thanh cong';
		// echo $sql_select; exit();

		if ($a) {

			header("location:viewlist.php");
			exit();
		} else {
			die(" Lỗi kết nối rồi :) kiểm tra lại nhé: " . " " . $sql_select);
		}
	} else {
		echo "<script>";
		echo "alert('Thêm mới thất bại !')";
		echo "</script>";
	}
	// return false;




}

?>
<style>
	body {
		background-image: linear-gradient(120deg, #FFF6AB, #E99EBC);
	}

	form {
		background-color: #fff;
		/* margin:0px auto; */
	}

	h1 {
		text-transform: uppercase;
		color: skyblue;
	}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm Employees</title>
</head>

<body>

</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<form action="" method="POST" style="width:600px" enctype="multipart/form-data" class="border border-primary boder-2 rounded m-auto mt-5 p-2">
	<h1 class="mb-3 d-block text-center">Create Record</h1>
	<div class="mb-3">
		<label for="name" class="form-label">Name</label>
		<input type="text" value="<?= isset($name) ? $name : "" ?>" class="form-control" name="name" id="name" placeholder="tên phải từ 6 đến 20 ký tự">
		<?php if (isset($loiten)) { ?>
			<div id="loiten" class="alert alert-danger mt-2"><?php echo $loiten; ?></div>
		<?php } ?>
	</div>

	<div class="mb-3">
		<div class="form-group">
			<label for="comment">Description:</label>
			<textarea class="form-control" name="description" placeholder="Nhập mô tả..." rows="5" id="comment"><?= isset($description) ? $description : "" ?></textarea>
			<?php if (isset($loides)) { ?>
				<div id="loides" class="alert alert-danger mt-2"><?php echo $loides; ?></div>
			<?php } ?>
		</div>

		<div class="mb-3">
			<label for="salary" class="form-label">Salary</label>
			<input type="number" value="<?= isset($salary) ? $salary : "" ?>" class="form-control" id="salary" name="salary" placeholder="">
			<?php if (isset($loiluong)) { ?>
				<div id="loiluong" class="alert alert-danger mt-2"><?php echo $loiluong; ?></div>
			<?php } ?>
		</div>

		<div class="mb-3">
			<label style="display:block;" class="form-label">Gender</label>
			<div class="form-check form-check-inline">
				<input class="form-check-input" checked type="radio" name="gioitinh" id="nam" value="1" <?php if (isset($gioitinh) && $gioitinh == 1) {
														echo "checked";
													} ?>>
				<label class="form-check-label" for="nam">Male</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="gioitinh" id="nu" value="0" <?php if (isset($gioitinh) && $gioitinh == 0) {
													echo "checked";
												} ?>>
				<label class="form-check-label" for="nu">Female</label>
			</div>
			<?php if (isset($loigtinh)) { ?>
				<div id="loitendangnhap" class="alert alert-danger mt-2"><?php echo $loigtinh; ?></div>
			<?php } ?>
		</div>

		<div class="mb-3">
			<label for="ngaysinh" class="form-label">Birthday</label>
			<input type="date" value="<?= isset($ngaysinh) ? $ngaysinh : "" ?>" class="form-control" id="ngaysinh" name="ngaysinh" placeholder="Ngày sinh của bạn">
			<?php if (isset($loingay)) { ?>
				<div id="loingay" class="alert alert-danger mt-2"><?php echo $loingay; ?></div>
			<?php } ?>
		</div>
		<button type="submit" name="btndangky" class="btn btn-primary">Save</button>
		<button onclick="history.back()" type="button" class="btn btn-secondary">cancel</button>
</form>
<!-- <script src="./asset/jquery-3.6.0.min.js"></script> -->
<script>
	//vali ten
	var nameEl = document.getElementById('name');
	nameEl.onkeyup = function() {
		const divError = document.querySelectorAll('div#loiten');
		console.log(divError);
		// divError.remove();
		for (a of divError) {
			a.remove();
		}
		var nameEl = document.getElementById('name');
		var val = (nameEl.value).trim(); //debug khoang trang van tinh la co du lieu
		if (val.length < 6 && val.length > 0 || val.length > 20) {
			const divError = document.createElement('div');
			divError.innerHTML = 'Tên từ 6 - 20 ký tự';
			divError.setAttribute('class', 'alert alert-danger mt-2');
			divError.setAttribute('id', 'loiten');

			nameEl.after(divError);
		}
		if (val.length == 0) {
			const divError = document.createElement('div');
			divError.innerHTML = 'Tên không được để trống';
			divError.setAttribute('class', 'alert alert-danger mt-2');
			divError.setAttribute('id', 'loiten');

			nameEl.after(divError);
		}
	}
	//ktra des
	$('#comment').keyup(function() {
		$('div#loides').remove();
		const desEl = $('#comment').val();
		const val = desEl.trim();
		if (!val) {
			$('#comment').after('<div class="alert alert-danger mt-2" id = "loides">mo ta khong duoc de trong </div>');
		}
		if (val.length < 6 && val.length > 0 || val.length > 200) {
			$('#comment').after('<div class="alert alert-danger mt-2" id = "loides">mo ta tu 6 - 200 ky tu </div>');

		}
	})


	// var desEl = document.getElementById('comment');
	// desEl.onkeyup =function()
	// {	const divError = document.querySelectorAll('div#loides');
	// 	console.log(divError);

	// 	for(a of divError)
	// 	{
	// 		a.remove();
	// 	}

	// 	var desEl = document.getElementById('comment');
	// 	var val =(desEl.value).trim();
	// 	if(val.length==0)
	// 	{
	// 		const divError = document.createElement('div');
	// 		divError.innerHTML = "Mô tả không được để trống";
	// 		divError.setAttribute('class','alert alert-danger mt-2');
	// 		divError.setAttribute('id','loides');
	// 		desEl.after(divError);

	// 	}
	// 	var val =(desEl.value).trim();
	// 	if(val.length <6&& val.length >0 || val.length > 200)
	// 	{
	// 		const divError = document.createElement('div');
	// 		divError.innerHTML = "Mô tả từ 6 - 200 ký tự";
	// 		divError.setAttribute('class','alert alert-danger mt-2');
	// 		divError.setAttribute('id','loides');
	// 		desEl.after(divError);

	// 	}

	// }


	// ktra salary
	var salEl = document.getElementById('salary');
	salEl.onkeyup = function() {
		const divError = document.querySelectorAll('div#loiluong');
		console.log(divError);

		for (a of divError) {
			a.remove();
		}

		var salEl = document.getElementById('salary');
		var val = (salEl.value).trim();
		if (val.length == 0) {
			const divError = document.createElement('div');
			divError.innerHTML = " Lương không được để trống";
			divError.setAttribute('class', 'alert alert-danger mt-2');
			divError.setAttribute('id', 'loiluong');
			salEl.after(divError);

		}
		if (val.length > 11) {
			const divError = document.createElement('div');
			divError.innerHTML = " Lương giới hạn 11 số :D";
			divError.setAttribute('class', 'alert alert-danger mt-2');
			divError.setAttribute('id', 'loiluong');
			salEl.after(divError);

		}
		// if(Number.isFinite(val))
		// {
		// 	console.log(typeof(val));
		// 	const divError = document.createElement('div');
		// 	divError.innerHTML = " Lương phải là số.";
		// 	divError.setAttribute('class','alert alert-danger mt-2');
		// 	divError.setAttribute('id','loiluong');
		// 	salEl.after(divError);

		// }


	}
	//ktra ngay sinh
	var dateEl = document.getElementById('ngaysinh');
	dateEl.onkeyup = function() {
		const divError = document.querySelectorAll('div#loingay');
		console.log(divError);

		for (a of divError) {
			a.remove();
		}

		var dateEl = document.getElementById('ngaysinh');
		var val = (dateEl.value).trim();
		if (val.length == 0) {
			const divError = document.createElement('div');
			divError.innerHTML = " Ngày sinh không được để trống";
			divError.setAttribute('class', 'alert alert-danger mt-2');
			divError.setAttribute('id', 'loingay');
			dateEl.after(divError);

		}
		if (val.length > 1 && val.length < 10 || val.length > 10) {
			const divError = document.createElement('div');
			divError.innerHTML = " Ngày sinh nhập chưa chuẩn ";
			divError.setAttribute('class', 'alert alert-danger mt-2');
			divError.setAttribute('id', 'loingay');
			dateEl.after(divError);

		}

	}
</script>