<?php

include('includes/connection.php');


$sql = "select * from pelajar";
$result = mysqli_query($con, $sql );

/* determine number of rows result set */
$row_cnt = $result->num_rows;

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
	<h1>Senarai Maklumat Pelajar</h1>

	<table class="tblListing">
	  <thead>
	  	<tr>
	  		<th colspan="6" class="theadTop">
	  			<a href="form.php" class="button-link btn-green">Pelajar Baru</a>
	  		</th>
	  	</tr>
	    <tr>
	      <th>ID</th>
	      <th>NO MATRIKS</th>
	      <th>NAMA PENUH</th>
	      <th>KAD PENGENALAN</th>
	      <th>KURSUS</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>

  	<?php
  		if($row_cnt > 0){
  			while($row = mysqli_fetch_array($result)) {
  	?>
	    <tr>
	      <td><?php echo $row['pelajar_id']; ?></td>
	      <td><?php echo $row['no_matriks']; ?></td>
	      <td><?php echo $row['nama_penuh']; ?></td>
	      <td><?php echo $row['no_kp']; ?></td>
	      <td><?php echo $row['kursus']; ?></td>
	      <td><a href="edit.php?id=<?php echo $row['pelajar_id']; ?>" class="button-link">Edit</a> |
	      		<a href="delete.php?id=<?php echo $row['pelajar_id']; ?>" class="button-link btn-red">Delete</a></td>
	    </tr>

	    <?php
		}
	}else{
		echo "<tr><td colspan='6'>Record not available</td></tr>";
	}
	    ?>
	  </tbody>
	</table>


	</div>
</body>
</html>