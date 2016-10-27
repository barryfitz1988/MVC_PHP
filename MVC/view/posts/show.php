
<link href="css/creative.min.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">

<header>
	<div class="header-content">
		<div class="header-content-inner">

		<p>This is the requested post:</p>
		
		
		
		
       <!--   <p><?php $id = $post->id;//echo 'ID:  '.$post->id; ?></p> -->
		<p><?php echo 'Name:  '.$post->name; ?></p>
		<p><?php echo 'Email: '.$post->email; ?></p>
		<p><?php echo 'Date: '.$post->date; ?></p>
		
		<?php 

            echo "<a href=?controller=posts&action=fillform&id=$id> Update Customer</a>";

            ?>

		</div>
	</div>
</header>