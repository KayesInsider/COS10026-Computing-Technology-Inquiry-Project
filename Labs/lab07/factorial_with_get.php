
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Using PHP Variables, arrays and operators</title>

  </head>
  <body>
<?php
include ("mathfunctions.php");

?>
<h1> Factorial</h1>

  <?php
        if (isset($_GET["number"])){
            $num = $_GET["number"];
            if (isPositiveInteger($num)){
                echo "<p>". $num, "! is ", factorial($num), ".</p>";
            } else {
                echo "<p>Please enter a positive integer.</p>";
            }
        }
        echo "<p><a href='factorial.html's>Return to the Entry Page</a></p>";
    ?>



</body>
</html>
