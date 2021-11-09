<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Форма регистрации</title>
  <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css\style.css">
</head>    
<body>
<form action="prog1_5.php" method="POST"  >
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
    <input type="text" class="form-control" name="sur" id="sur" placeholder="Введите фамилию"><br>
    <input type="text" class="form-control" name="num" id="num" placeholder="Введите номер(+7)"><br>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
    <button type="submit" class="btn btn-success">Зарегистрироваться</button>
  </form>
</body>
</html>