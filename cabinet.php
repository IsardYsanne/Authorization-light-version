<?session_start();
if (empty($_SESSION['user_data'])) {
    header('Location: /./index.php');
}
?>
<html>
<head>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<div class="main">
    <div class="cabinet-block">
        <p class="name">Имя: <?=$_SESSION['user_data']["name"]?></p>
        <p class="last_name">Фамилия: <?=$_SESSION['user_data']["last_name"]?></p>
		<a href="/php/logout.php">Выйти</a>
    </div>
</div>
</body>
</html>