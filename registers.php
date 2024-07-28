<?php include("head.html")
?>
<body>
<div class="register">

<form action="connect.php" method="post">

<br><br>
<h1>STARTING STEP TOWARDS YOUR DREAM CAREER!!!</h1>
<label for="username">USERNAME:</label>
<input type="text" size="30" name="n" placeholder="enter your name" required />
<br><br>
<label for="age">AGE:</label>
<input type="number" size="3" name="a" placeholder="enter your age" />
<br><br>
<label for="dob">DOB:</label>
<input type="date" name="d" />
<br><br>
<label for="gender">GENDER</label>
<input type="radio" value="male" name="g" />MALE
<input type="radio" value="female" name="g" />FEMALE
<input type="radio" value="others" name="g" />OTHERS
<br><br>
<label for="email">E-MAIL:</label>
<input type="email" size="40" name="e" placeholder="enter your E-mail id"/>
<br><br>
<label for="password">PASSWORD:</label>
<input type="password" maxlength="8" min="4" name="p" placeholder="maximum  8char."/>
<br><br>
<label for="dept">FIELD WANNA OPT FOR:</label>
<select name="s">
<option value="Select">Select</option>
<option value="Direction">Direction</option>
<option value="Acting">Acting</option>
<option value="Editing">Editing</option>
<option value="Editing">Editing</option>
<option value="Assistant direction">Assistant direction</option>
</select>
<br><br>
<input type="submit" value="Register">
<input type="reset" value="Cancel">

<br><br>

</form>


</div>


</body>
<?php include("foor.html")
?>