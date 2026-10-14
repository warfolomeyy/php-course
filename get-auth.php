<?php

$userLogin = $_GET['login'] ?? '';
$userPass = $_GET['password'] ?? '';

if ($userLogin !== 'admin') {
    $responseText = 'Пользователь не найден';
} elseif ($userPass !== 'password') {
    $responseText = 'Пароль неверный';
} else {
    $responseText = 'Авторизация прошла успешно';
}


?>
<html>
<head>
    <title>Проверка доступа</title>
</head>
<body>
<?= $responseText ?>
</body>
</html>