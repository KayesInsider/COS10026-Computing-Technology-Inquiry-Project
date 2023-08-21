<!DOCTYPE HTML>
<html>
<head>
<link href="styles/quiz_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

  <?php

  include ("menu.inc");


  ?>

<div class="form">
<form method="post" action="markquiz.php">
<h1 id="nodejs_quiz"> Node.js Quiz</h1>
<br>
<br>

<fieldset>

<br>
<h3 class="hel">Personal Details</h3>
<br>
<label  for="firstName">First Name:</label>
<input type="text" name="firstName" id="firstname" pattern="[a-zA-Z]+" maxlength="30" required>

<label for="lastName">Last Name:</label>
<input type="text" name="lastName" id="lastname" pattern="[a-zA-Z]+" required>

<label for="studentId">Student Number:</label>
<input type="text" maxlength="10" name="studentId" id="studentid" pattern="[0-9]{7}{10}" required>
</fieldset>



<br>
<br>
<br>
<fieldset>
<br>
<h3 class='hel'>Quiz Questions </h3>
<br>
<br>

<p> 1. Which of the following command will show all the modules installed locally.</p>
<br>
<input type="text" id="question1" name="questionno1" value="Node" required><br><br>
<p> 2. Which of the following code print the name of operating system?</p><br>



<input type='radio' name='questionno2' value="1" > A. console.log('type : ' + 'os.type);<br>

<input type='radio' name='questionno2' value="2"> B. console.log('type : ' + os.type());<br>

<input type='radio' name='questionno2' value="3"> C. console.log('type : ' + os.getType());<br>
<input type='radio' name='questionno2' value="4"> D. None of the above.<br>


<br>
<p>3. Node.js is written in ___________ .</p>


<input type="checkbox" name="questionno3" value="1"> Javascript<br>
<input type="checkbox" name="questionno3" value="2"> C++<br>
<input type="checkbox" name="questionno3" value="3"> C<br>
<input type="checkbox" name="questionno3" value="4">PHP<br>

<br/>



<p>4. Which extension is used to save NodeJs files?</p>
<div class="custom-select" style="width:200px;">
<select name="questionno4">
<option value="" >Please Select</option>
<option value="1"> .js</option>
<option value="2"> .node</option>
<option value="3"> .java</option>
<option value="4"> .txt</option>

</select>
<br/>

</div>

<p>5. Node Js is _________</p>
<br>



<label class="switch">
<br>
<input type="checkbox" name="questionno5" value="1">
Asynchronous
<span class="slider round"></span>

</label>

<br>



<label class="switch">

<br>
<input type="checkbox" name="questionno5" value="2">Synchronous
<span class="slider round"> </span>
</label>

<br>

<input type="submit" value="Submit">


</fieldset>

</form>


</div>
<br>
<br>
<br>


<?php


include("footer.inc");

?>


</body>
</html>
