<!DOCTYPE html>
<html>
<head>
	<title>PHP Week2</title>
	<!-- css bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">

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
		<nav class="navbar navbar-inverse navbar-fixed-top">
  			<div class="container-fluid">
   			 <div class="navbar-header">
      			<a class="navbar-brand" href="index.php">Home</a>
    				</div>
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="index.php">Home</a></li>
    			</ul>
  			</div>
		</nav>

		<form class="form-horizontal" action="result.php" method="post">

			<legend id ="lenen">Lenen</legend>

			<div class="form-group">
				<label class="breedte">Begin bedrag</label>
				<input type="tekst" name="begin" id="marge"><br/ >
			</div>
			
			<div class="form-group">	
				<label class="breedte">Rente</label>
					<input type="tekst" name="rente" id="marge1"><br/>
			</div>
			
			<div class="form-group">		
				<label class="breedte">Aantal jaren</label>
					<input type="tekst" name="jaren" id="marge2"><br/>
			</div>		

			<input type="submit" id="submit">
		</form>
</body>
</html>