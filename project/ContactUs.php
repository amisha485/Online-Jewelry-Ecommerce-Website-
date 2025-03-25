<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Jewellery Store</title>
		<link rel="icon" type="image/x-icon" href="D:/My website project/logo.ico">
		<meta charset="utf-8">
		<meta name="viewport"content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="D:/My website project/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>

	<body>
		<?php 
		include "navbar.php"; 
		?> 
		
		<div>
			<img src="./img/contact.jpg" alt="Los Angeles" style="width:100%;">
		</div>
		
		<div class="container-fluid">
			<div class="col-md-6">
				<form>
					<legend class="text-left">Contact Us</legend>
					<div class="form-group">
						<label for="exampleInputName">Your Name</label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Name" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Your Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
						<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
					 </div>
					 <div class="form-group">
						<label for="exampleInputNumber">Contact number</label>
						<input type="number" class="form-control" id="exampleInputNumber" placeholder="Enter your contact number" required>
					 </div>
					 <div class="form-group">
						<label for="exampleInputSubject">Subject</label>
						<input type="text" class="form-control" id="exampleInputSubject" placeholder="" required>
					</div>
					 <div class="form-group">
						<label for="exampleFormControlTextarea1">Your Message</label>
						<textarea class="form-control" id="exampleTextarea1" rows="3"></textarea>
					 </div>
					 <div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					 </div>
					  <button type="submit" class="btn btn-primary">Send</button>
				</form>
			</div>
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7259155.633364681!2d80.17556660000001!3d27.32853280000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2f9082964297%3A0x14f88fd8faa5caaf!2sS%20Ornaments!5e0!3m2!1sen!2sin!4v1671726072094!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		
		
		<?php 
		include "footer.php"; 
		?> 
  
	</body>
</html>