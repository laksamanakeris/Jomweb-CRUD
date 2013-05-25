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
	<h1>Maklumat Pelajar</h1>
	<a href="index.php" class="button-link btn-grey">SENARAI</a>

	<form action="save.php" method="post">
		
		<label>No. Matriks</label>
		<input type="text" name="no_matriks"/>

		<label>Nama Penuh</label>
		<input type="text" name="nama_penuh"/>

		<label>No. K/P</label>
		<input type="text" name="no_kp"/>

		<label>Kursus</label>

		<select name="kursus">
			<option value="bit">Business IT</option>
			<option value="csc">Computer Sceince</option>
			<option value="mbn">Mobile Network</option>
		</select>


		<input type="submit" name="submit" value="SIMPAN" class="button-link"/>

	</form>

	</div>
</body>
</html>