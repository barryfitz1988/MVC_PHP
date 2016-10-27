  <meta charset="utf-8">
  <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
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
<link href="css/table.css" rel="stylesheet">
<script src="js/table.js"></script>



<header>
	<div class="header-content">
		<div class="header-content-inner">
	<div id="container">
		<p>Here is a list of all Customers:</p>	
		
		
		<input type="text" id="search" placeholder="Type to search">
		
		<table id="table" border ='4' cellspacing='2' class='responstable'>
		<?php echo "<tr><th>Name</th>" . "<th>Information</th>"."<th>Remove</th></tr> \n"?>
		
		
		<?php foreach($posts as $post) { ?>

            <?php echo "<tr><td>".$post->name."</td>"?>
            <?php echo "<td><a href=?controller=posts&action=show&id=".$post->id.">View Customer</a></td>"?>
            <?php echo "<td><a href=?controller=posts&action=delete&id=".$post->id.">Delete Customer</a></td></tr>"?>

		<?php } ?>
		
		</table>

</div>
		</div>
	</div>
</header>