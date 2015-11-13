<?php
	var_dump($_GET);
	var_dump($_POST)
?>

<!DOCTYPE html>
<html>
	 <head>
		<title>My First HTML Form</title>
    <meta charset="utf-8">
	</head>
	
  <body>
      <!--User Login Form-->
    <h2>User Login</h2>
		<form method="POST" action="/my_first_form.php">
    		<p>
        		<label for="username">Username:</label>
        		<input id="username" name="username" type="text" placeholder="Username">
   			</p>
   		  <p>
        		<label for="password">Password:</label>
        		<input id="password" name="password" type="password" placeholder="Password">
   			</p>
    		<p>
       			<button type="submit"><strong>Login</strong></button>
    		</p>
		</form>
      <!--Email Form-->
    <h2>Compose an Email</h2>
    <form method="POST" action="my_first_form.php">
        <p>
          <label for="to">To:</label>
          <input id="to" name="to" type="text">
        </p>
        <p>
          <label for="from">From:</label>
          <input id="from" name="from" type="text">
        </p>
        <p>
          <label for="subject">Subject:</label>
          <input id="subject" name="subject" type="text">
        </p>
        <p>
          <textarea id="email_body" name="email_body" row="5" col="40" placeholder="This is the a text aread"></textarea>
        </p>
        <p>
          <input type="checkbox" id="mailing_list" value="yes" checked>
          <label for="mailing_list">Do you want to save a copy of the sent folder?</label>
        </p>
        <p>
          <input type="submit" value="Send">
        </p>
    </form>

    <h2>Multiple Choice Test</h2>
    <form method="POST" action="/my_first_form.php">
      <!--Radio Check Boxes-->
      <p><strong>Which type of vehicle would you prefer?</strong></p>
        <label><input type="radio" name="vehicle1" value="american">American</label>
        <label><input type="radio" name="vehicle1" value="japanese">Japanese</label>
        <label><input type="radio" name="vehicle1" value="german">German</label>
      <p><strong>Which vehicle color would you prefer?</strong></p>
        <label><input type="radio" name="color1" value="silver">Silver</label>
        <label><input type="radio" name="color1" value="black">Black</label>
        <label><input type="radio" name="color1" value="white">White</label>
      <!--CheckBox-->
      <p><strong>Which size rims do you prefer?</strong></p>
        <label><input type="checkbox" id="17" name="rims[]" value="17">17</label>
        <label><input type="checkbox" id="22" name="rims[]" value="22" >22</label>
        <label><input type="checkbox" id="24" name="rims[]" value="24" >24</label>
      <br>
      <!--Multi Select List-->
        <label for="vehicle_type">What type of vehicle do you drive?</label>
        <select id="vehicle_type" name="vehicle_type[]" multiple>
          <option value="suv">SUV</option>
          <option value="2 door">2 door</option>
          <option value="4 door">4 door</option>
          <option value="Van">Van</option>
        </select>
      <br>
      <p>
        <input type="submit" value="Submit">
      </p>
    </form>
    <!--Drop Down List-->
    <h2>Select Testing</h2>
    <form method="POST" action="/my_first_form.php">
      <p>
        <label for="license"><strong>Do you have a valid drivers license?</strong></label>
        <select id="license" name="license">
          <option value="1" selected>Yes</option>
          <option value="0">No</option>
        </select>
      <!--Date Box-->
      <p>License Expiration date:</p>
        <input type="date" name="expire_date">
      <p>
        <input type="submit" value="Submit">
      </p>
    </form>







        
  </body>
</html>