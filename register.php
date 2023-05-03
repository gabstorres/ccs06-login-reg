<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<form action="save-registration.php" method="POST" onsubmit="return validateForm();">
	<div>
		<label>First Name: </br></label>
		<input type="text" name="first_name" required/>	
	</div>
	<div>
		<label>Middle Name: </br></label>
		<input type="text" name="middle_name" />
	</div>
	<div>
		<label>Last Name: </br></label>
		<input type="text" name="last_name" required />	
	</div>
	<div>
		<label>Email Address:</br></label>
		<input type="email" name="email" required />	
	</div>
	<label>Password :</br>
	<input name="password" id="password" type="password" onkeyup='validateForm();' minlength="8" required />
	</label>
	<br>
	<label>Confirm password: </br>
	<input type="password" name="confirm_password" id="confirm_password" onkeyup='validateForm();' required /> 
	<span id='message'></span>
	</label>
	<br>
	<div>
		<label>Birthdate: </br></label>
		<input type="date" name="birthdate" />	
	</div>
	<div>
		<label>Gender: </br></label>
		<input type="radio" name="gender" value="Male"/>Male
		<input type="radio" name="gender" value="Female"/>Female		
	</div>
	<div>
		<label>Address: </br></label>
		<input type="text" name="address" />	
	</div>
	<div>
		<label>Contact Number: </br></label>
		<input type="tel" name="contact_number" />	
	</div>
	
	<input type="submit" value="Submit">
</form>

<script>
	function validateForm() {
	    var firstName = document.getElementsByName('first_name')[0].value;
	    var lastName = document.getElementsByName('last_name')[0].value;
	    var email = document.getElementsByName('email')[0].value;
	    var password = document.getElementById('password').value;
	    var confirmPassword = document.getElementById('confirm_password').value;

	    if (firstName === '' || lastName === '') {
	        document.getElementById('message').style.color = 'red';
	        document.getElementById('message').innerHTML = 'First name and last name are required';
	        return false;
	    } else if (email === '' || password === '') {
	        document.getElementById('message').style.color = 'red';
	        document.getElementById('message').innerHTML = 'Email and password are required';
	        return false;
	    } else if (password !== confirmPassword) {
	        document.getElementById('message').style.color = 'red';
	        document.getElementById('message').innerHTML = 'Passwords do not match';
	        return false;
	    } else if (password.length < 8) {
	        document.getElementById('message').style.color = 'red';
	        document.getElementById('message').innerHTML = 'Password should be at least 8 characters long';
	        return false;
	    } else {
	        document.getElementById('message').style.color = 'green';
	        document.getElementById('message').innerHTML = 'Passwords match';
	        return true;
	    }
	};

	document.getElementById('password').onchange = validateForm;
	document.getElementById('confirm_password').onkeyup = validateForm;
</script>

</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<form action="save-registration.php" method="POST" onsubmit="return validateForm();">
	<div>
		<label>First Name: </br></label>
		<input type="text" name="first_name" required/>	
	</div>
	<div>
		<label>Middle Name: </br></label>
		<input type="text" name="middle_name" />
	</div>
	<div>
		<label>Last Name: </br></label>
		<input type="text" name="last_name" required />	
	</div>
	<div>
		<label>Email Address:</br></label>
		<input type="email" name="email" required />	
	</div>
	<label>Password :</br>
	<input name="password" id="password" type="password" onkeyup='validateForm();' minlength="8" required />
	</label>
	<br>
	<label>Confirm password: </br>
	<input type="password" name="confirm_password" id="confirm_password" onkeyup='validateForm();' required /> 
	<span id='message'></span>
	</label>
	<br>
	<div>
		<label>Birthdate: </br></label>
		<input type="date" name="birthdate" />	
	</div>
	<div>
		<label>Gender: </br></label>
		<input type="radio" name="gender" value="Male"/>Male
		<input type="radio" name="gender" value="Female"/>Female		
	</div>
	<div>
		<label>Address: </br></label>
		<input type="text" name="address" />	
	</div>
	<div>
		<label>Contact Number: </br></label>
		<input type="tel" name="contact_number" />	
	</div>
	
	<input type="submit" value="Submit">
</form>

<script>
	function validateForm() {
	    var firstName = document.getElementsByName('first_name')[0].value;
	    var lastName = document.getElementsByName('last_name')[0].value;
	    var email = document.getElementsByName('email')[0].value;
	    var password = document.getElementById('password').value;
	    var confirmPassword = document.getElementById('confirm_password').value;

	    if (firstName === '' || lastName === '') {
	        document.getElementById('message').style.color = 'red';
	        document.getElementById('message').innerHTML = 'First name and last name are required';
	        return false;
	    } else if (email === '' || password === '') {
	        document.getElementById('message').style.color = 'red';
	        document.getElementById('message').innerHTML = 'Email and password are required';
	        return false;
	    } else if (password !== confirmPassword) {
	        document.getElementById('message').style.color = 'red';
	        document.getElementById('message').innerHTML = 'Passwords do not match';
	        return false;
	    } else if (password.length < 8) {
	        document.getElementById('message').style.color = 'red';
	        document.getElementById('message').innerHTML = 'Password should be at least 8 characters long';
	        return false;
	    } else {
	        document.getElementById('message').style.color = 'green';
	        document.getElementById('message').innerHTML = 'Passwords match';
	        return true;
	    }
	};

	document.getElementById('password').onchange = validateForm;
	document.getElementById('confirm_password').onkeyup = validateForm;
</script>

</html>
