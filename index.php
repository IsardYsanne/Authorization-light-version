<?session_start();?>
<html>
    <head>
		<link rel="stylesheet" href="/css/styles.css">
	</head>
	<body>
		<div class="main">
			<div class="form-block">
				<form name="loginform" class="login-form" id="loginform" action="/php/login.php" method="post">
					<h1>Авторизация:</h1>
					<input type="text" name="log" id="user_login" class="input" value="" size="10">
					<input type="password" name="pass" id="user_password" class="input" value="" size="10">
					<input type="submit" value="Войти">
					<?if(!empty($_SESSION['fail'])):?>
					<p class="error-message"><?=$_SESSION['fail']?></p>
					<?endif?>
				</form>
			</div>
		</div>
	</body>
</html>