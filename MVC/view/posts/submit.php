
<link href="css/creative.min.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">
<p>Customer Information </p>


<header>
	<div class="header-content">
		<div class="header-content-inner">



<?php

$submitName = $_POST ['name'];
$submitEmail = $_POST ['email'];
$submitDate = $_POST ['datepicker'];
?>
 
		    <p><?php  echo 'Name:  '.$submitName; ?></p>
			<p><?php echo 'Email: '.$submitEmail; ?></p>
			<p><?php echo 'Date: '.$submitDate; ?></p>





		</div>
	</div>
</header>
