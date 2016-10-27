<?php   


session_start(); 

// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>




<html>
<style type = 'text/css'>
#mainNav { display: none !important; }
</style>
<head>

<script type="text/javascript">
$(function() {
    $("header, footer").hide();
});
</script>

</head>

<body>

		<div id="container">
			<h2>Login</h2>
        <div id="form1">
               
               <form action = "?controller=pages&action=home" method = "post">
               					
						 <div class="hidden">
                         <input type="password"/>
                            </div>
               
               
               
               
                  <label>User Name  :</label><input type = "text" name = "username" id="username" class = "box"/><br /><br />
                  
                  
                  <label>Password  :</label><input type = "password" id="password "name = "password" class = "box" /><br/><br />
                 
                 
                 
                  <input type = "submit" id="submit" name = "submit" value = " Submit "/><br />
               </form>
               
            </div>
            </div>
       </body>        
               </html>