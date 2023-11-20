<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lunettes</title>
</head>
<body>

<?php include "header.php"; ?>

    <!-- Форма авторизации -->
<form method="post" class="forms" action="user/valid.php">
 <input placeholder="Login" class="input_reg" type="text" name="login" id="login" value="<?php echo isset($_POST["login"]) ? $_POST["login"] : ""; ?>">
 <input placeholder="Password" class="input_reg" type="password" name="password" id="password">
 <input class="button_reg" type="submit" name="submit" value="Войти"> <br>
 Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a> <br>
</form>

    <!-- Форма вход в админ панель -->
    <h1 class="admin_panel_h1">Вход в админ-панель</h1>
    <form method="post" class="forms" action="admin/valid.php">
 <input placeholder="Login" class="input_reg" type="text" name="login" id="login" value="<?php echo isset($_POST["login"]) ? $_POST["login"] : ""; ?>">
 <input placeholder="Password" class="input_reg" type="password" name="password" id="password">
 <input class="button_reg" type="submit" name="submit" value="Войти"> <br>
</form>

<!-- Вывод ошибок валидации -->
<?php if (!empty($errors)): ?>
 <ul>
 <?php foreach ($errors as $error): ?>
 <li><?php echo $error; ?></li>
 <?php endforeach; ?>
 </ul>
<?php endif; ?>

    
</body>
</html>
