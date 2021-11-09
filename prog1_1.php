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
  <div class="container mt-4">
  <form action="prog1_2.php" method="POST"  >
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
    <button type="submit" class="btn btn-success">Войти</button>
  </form>
  <br>
  <form action="prog1_4.php" method="POST"  >
    <button type="submit" class="btn btn-success" >Регистрация</button>
  </form>
</div>
</body>
</html>