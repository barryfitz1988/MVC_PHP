<?php
session_start();
if(isset($_GET['logout'])){
     
    //Simple exit message
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['user'] ." has left the chat session.</i><br></div>");
    fclose($fp);
     
    session_destroy();
    header("Location: ?controller=pages&action=home"); //Redirect the user
}

if(isset($_SESSION['user'])){

    $text = isset($_POST['text']) ? $_POST['text'] : 'has entered the conversation!!!';
     
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['user']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
}

?>

<html>

<head>

<title>Chat</title>
<script src="js/chat.js"></script>
<link href="css/chat.css" rel="stylesheet">
</head>
 
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome <?php echo $_SESSION['user']; ?><b></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox">
    <?php
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
     
    echo $contents;
}
    ?>
    
    </div>
     
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
</div>

</body>
</html>