<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aku Sehat - Login</title>

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<link rel="stylesheet" href="<?= base_url() ?>assets/auth/style.css">
</head>
<body>
	<div class="container">
		<h1 class="label">Login</h1>
		<form class="login_form" action="<?= base_url('user/homepage_login') ?>" method="post" name="form" onsubmit="return validated()">
			<div class="font">Email or Phone</div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your Email or Phone</div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Password</div>
			<button type="submit">Login</button>
		</form>
	</div>	
	<script src="<?= base_url() ?>assets/auth/valid.js"></script>
</body>
</html>
