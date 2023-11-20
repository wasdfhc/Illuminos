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

    <form method="post" class="forms">
 <input class="input_reg" type="text" placeholder="Name" name="name" id="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ""; ?>">
 <input class="input_reg" type="text" placeholder="Surname" name="surname" id="surname" value="<?php echo isset($_POST["surname"]) ? $_POST["surname"] : ""; ?>">
 <input class="input_reg" type="text" placeholder="Patronymic" name="patronymic" id="patronymic" value="<?php echo isset($_POST["patronymic"]) ? $_POST["patronymic"] : ""; ?>">
 <input class="input_reg" type="text" placeholder="Login" name="login" id="login" value="<?php echo isset($_POST["login"]) ? $_POST["login"] : ""; ?>">
 <input class="input_reg" type="email" placeholder="Email" name="email" id="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>">
 <input class="input_reg" type="password" placeholder="Password" name="password" id="password" />
<input class="input_reg" type="password" placeholder="Password Repeat" name="password_repeat" id="password_repeat" />
<input class="checkbox" type="checkbox" name="rules" id="rules" echo isset($_post["rules"]) && $_POST['rules'] ? "checked" : ""; />
<label for="rules">Я согласен с правилами регистрации</label>
</div>
<input class="button_reg" type="submit" name="submit" value="Зарегистрироваться" /> <br>
Есть аккаунт? <a href="auth.php">Авторизируйтесь</a> <br>
</div>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminos";
$conn = new mysqli($servername, $username, $password, $dbname);
// Обработка отправки формы
if (isset($_POST["submit"])) {
 // Получение данных из формы
 $name = $_POST["name"];
 $surname = $_POST["surname"];
 $patronymic = $_POST["patronymic"];
 $login = $_POST["login"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 $password_repeat = $_POST["password_repeat"];
 $rules = isset($_POST["rules"]);
 // Валидация данных
 $errors = array();
 if (empty($name)) {
 $errors[] = "Введите имя";
 } elseif (!preg_match("/^[а-яА-ЯёЁ\s\-]+$/u", $name)) {
 $errors[] = "Имя может содержать только кириллицу, пробел и тире";
 }
 if (empty($surname)) {
 $errors[] = "Введите фамилию";
 } elseif (!preg_match("/^[а-яА-ЯёЁ\s\-]+$/u", $surname)) {
 $errors[] = "Фамилия может содержать только кириллицу, пробел и тире";
 }
 if (!empty($patronymic) && !preg_match("/^[а-яА-ЯёЁ\s\-]+$/u", $patronymic)) {
 $errors[] = "Отчество может содержать только кириллицу, пробел и тире";
 }
 if (empty($login)) {
 $errors[] = "Введите логин";
 } elseif (!preg_match("/^[a-zA-Z0-9\-]+$/", $login)) {
 $errors[] = "Логин может содержать только латиницу, цифры и 
тире";
 } else {
 // Проверка уникальности логина
 $sql = "SELECT * FROM users WHERE login='$login'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 $errors[] = "Логин уже занят";
 }
 }
 if (empty($email)) {
 $errors[] = "Введите email";
 } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $errors[] = "Некорректный email";
 } else {
 // Проверка уникальности email
 $sql = "SELECT * FROM users WHERE email='$email'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 $errors[] = "Email уже занят";
 }
 }
 if (empty($password)) {
 $errors[] = "Введите пароль";
 } elseif (strlen($password) < 6) {
 $errors[] = "Пароль должен содержать не менее 6 символов";
 }
 if ($password != $password_repeat) {
 $errors[] = "Пароли не совпадают";
 }
 if (!$rules) {
 $errors[] = "Необходимо согласиться с правилами регистрации";
 }

 // Если ошибок нет, создаем нового пользователя
 if (empty($errors)) {
    $sql = "INSERT INTO users (name, surname, patronymic, login, email, password, role, podpiska) VALUES ('$name', '$surname', '$patronymic', '$login', '$email', '$password', 'client', 'stand')";
 $conn->query($sql);
 echo "Пользователь успешно зарегистрирован";
 } 
}
?>

<?php if (!empty($errors)): ?>
 <ul>
 <?php foreach ($errors as $error): ?>
 <li><?php echo $error; ?></li>
 <?php endforeach; ?>
 </ul>
<?php endif; 
?>


</body>
</html>


