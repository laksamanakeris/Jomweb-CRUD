<?php

include('includes/connection.php');

foreach ($_POST as $key => $value) {
	$$key = $value;
}

$sql = "update pelajar ";
$sql .= "set no_matriks = '$no_matriks',";
$sql .= "nama_penuh = '$nama_penuh',";
$sql .= "no_kp = '$no_kp',";
$sql .= "kursus = '$kursus'";
$sql .= " where pelajar_id = $pelajar_id";

mysqli_query($con, $sql );

$affected_rows = mysqli_affected_rows( $con );



//echo "<a href='list.php'>KEMBALI KE SENARAI</a><br/>";

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
	<?php

	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	echo $affected_rows ." jumlah rekod telah diedit<br/>";

	?>
	<br/>
	<a href="index.php" class="button-link btn-grey">KEMBALI KE SENARAI</a>



	</div>
</body>
</html>