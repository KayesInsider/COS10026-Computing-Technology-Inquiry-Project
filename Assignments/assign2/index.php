<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> Main Page</title>
    	<link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
<body>

<?php
include ("menu.inc");
?>

  <?php


     echo "<div class='content'>";
     echo "<h1>A Quick Introduction to <b> Node.JS</b></h1>";
     echo "<br>";
     echo "<ul>";
     echo "<li>Node.js is an open source server environment</li>";
     echo "<li>Node.js is free</li>";
     echo "<li>Node.js runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>";
     echo "<li>Node.js uses JavaScript on the server</li>";
     echo "</ul>";
     echo " <img class='nodejs_logo' src='images/nodejs.jpg' height='300'
     width='450' alt='Nodejs Logo'> ";
     echo "</div>";
     echo "<div class='youtube_video'>";
     echo "<h1> Hi,<b>Welcome</b></h1>";
     echo "<p><a href=https://www.youtube.com/watch?v=j1bQTQLJejI>Demonstration Video</a></p>";
     echo "<br>";
     echo "</div>";

?>


<?php
include("footer.inc");
?>
</body>
</html>
