<?php

include('includes/connection.php');
$pelajar_id = $_GET['id'];

$sql = "select * from pelajar where pelajar_id = $pelajar_id";


$result = mysqli_query($con, $sql );

/* determine number of rows result set */
$row_cnt = mysqli_num_rows( $result);

$row = mysqli_fetch_array($result);

// Use this to test if the result is 0
// $row_cnt = 0;

?>
<!doctype>
<html>
<head>
	<title>JOMWEB : CRUD Challenge</title>
	<link rel="stylesheet" href="assets/normalize.css">
	<link rel="stylesheet" href="assets/style.css">

	<!--FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="wrapper">
	<h1>Kemaskini Maklumat Pelajar</h1>
	<a href="index.php" class="button-link btn-grey">SENARAI</a>

	<?php

	if ($row_cnt < 1) {
	?>

	<h3>Rekod tidak ditemui</h3>

	<?php

	}else{

	?>

	<form action="save_edit.php" method="post">
		
		<label>No. Matriks</label>
		<input type="text" name="no_matriks" 
		value="<?php echo $row['no_matriks']?>" />

		<label>Nama Penuh</label>
		<input type="text" name="nama_penuh" 
		 value="<?php echo $row['nama_penuh']?>"/>

		<label>No. K/P</label>
		<input type="text" name="no_kp"
		 value="<?php echo $row['no_kp']?>"/>

		<label>Kursus</label>

		<select name="kursus">
			<option value="bit" 
			<?php if ($row['kursus'] == 'bit') echo " selected"; ?>>
			Business IT</option>
			<option value="csc"
			<?php if ($row['kursus'] == 'csc') echo " selected"; ?>>
			Computer Sceince</option>
			<option value="mbn"
			<?php if ($row['kursus'] == 'mbn') echo " selected"; ?>>
			Mobile Network</option>
		</select>
		<input type="hidden" name="pelajar_id" value="<?php echo $row['pelajar_id']?>" />

		<input type="submit" name="submit" value="SIMPAN" class="button-link"/>

	</form>

	<?php 

	}
	?>


	</div>
</body>
</html>