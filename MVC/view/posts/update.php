<DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
<link href="display/css.css" rel="stylesheet">
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	
	
	<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
	rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="css/creative.min.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">
<script src="js/code.js"></script>



<?php require_once('routes.php'); ?>

<title>Update </title>
  </head>

     

<body>




	<section class="bg-primary" id="contact">
		<div id="container">
			<h2>Update Your Information</h2>
			<div id="form1">
				<form id="form" name="form" action="?controller=posts&action=update&id=<?php echo $post->id; ?>"
					method="post">
					
				
						
					<label>Name :</label> <input id="name" type="text" name="name" value= <?php echo $post->name; ?>
						placeholder='Enter Name' required> 
						
					<label>Email:</label> <input
						id="email" name="email" type="email" placeholder='Enter Email' value= <?php echo $post->email; ?>
						required>

					<div id="datepicker1">
						<label>Date :</label> <input id="datepicker" name='datepicker' value=<?php echo $post->date; ?>
							type="text" placeholder='Enter Date' required>
					</div>


				
				
				<input id="submit" type="submit" value="Submit">
				</form>


			</div>
		</div>
	</section>
</body>
</html>