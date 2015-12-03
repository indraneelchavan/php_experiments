<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" href="mypage.css">
</head>
<body>


	
	<?php include 'header.php'; ?>


	  <div id="form-container">
			
		<div id="create"><h1>Create a new account</h1></div>

		<div class="left-column">
			<form action="/account/register" method="post" id="form-register">

				<ul>
					<li><label for="email">Your E-mail</label>
					<input name="email" type="email" id="email" /></li>

					<li><label for="confirm-email">Confirm E-mail</label>
					<input name="confirm-email" id="confirm-email" type="email" id="email" /></li>

					<li><label for="city">Your City</label>
					<input name= "city" id="city" type="text"></li>

					<li><label for="pincode">Pin Code</label>
					<input name= "pincode" id="pincode" type="text"></li>

					<li><label for="password">Password</label>
					<input name="password" type="password" id= "password"></li>

					<li><label for="confirm-password">Confirm Password</label>
            		<input name="confirm-password" type="password" id="confirm-password"></li>

            		<li><label for="mobile">Your Contact Number</label>
					<input name= "mobile" id="mobile" type="text"></li>

					<li><input type="submit" /></li>
				</ul>
			</form>
		</div>

		<div class="right-column">
			<div id="why-register">
				
				<span class="why-ques">Why Register?</span>

				<ul>
					<li>Get updates regarding upcoming treks right in your mailbox</li>
					<li>Leave feedback on your past treks</li>
				</ul>
			</div>

		</div>

    </div>

	
	<?php include 'footer.php'; ?>
	
</body>
</html>