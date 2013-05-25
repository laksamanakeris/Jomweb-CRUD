<?php

include('includes/connection.php');

$affected_rows = 0;

// do some simple validation
if( $_GET['id'] ){
	
	$id = $_GET['id'];
	$sql = "delete from pelajar where pelajar_id = $id";
	mysqli_query($con, $sql );
	$affected_rows = mysqli_affected_rows( $con );

}

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

	if($_POST){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}
	
	echo " Rekod ID #$id telah dipadam<br/>";

	?>
	<br/>
	<a href="index.php" class="button-link btn-grey">KEMBALI KE SENARAI</a>



	</div>
</body>
</html>