<!DOCTYPE html>
<html>
<head>
	<title>PHP Week2</title>
	<!-- css bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- javascript bootstrap -->
	<script type="text/javascript" href="js/bootstrap.js"></script>
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
	<script type="text/javascript" href="js/npm.js"></script>

	<!-- fonts bootstrap -->
	<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.eot">
	<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
	<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.ttf">
</head>
<body>

		<form>

			<legend>Lenen</legend>
			<label>Begin bedrag</label>
			<input type="tekst" name="begin" disabled value=<?php echo '"' . $_POST['begin'] . '"'; ?>><br/ >

			<label>Rente</label>
			<input type="tekst" name="rente" disabled value=<?php echo '"' . $_POST['rente'] . '"'; ?>><br/>

			<label>Aantal jaren</label>
			<input type="tekst" name="jaren" disabled value=<?php echo '"' . $_POST['jaren'] . '"'; ?>><br/>

		</form>
		<ol>
		<?php
			for($x = 1; $x < $_POST['jaren']+1; $x++){
				echo " <li>e jaar: " . $_POST['begin'] += $_POST['begin']*($_POST['rente']/100) . ";</li>";
			}
		?>
		</ol>
</body>
</html>