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
  <?php
  $pass=$_POST['pass'];
  if ($pass !== "123321"):
  ?>
  <div class="container mt-4">
  <h1>Форма регистрации</h1>
  <form action="prog1.php" method="POST"  >
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
    <button type="submit" class="btn btn-success">Зарегистрировать</button>
  </form>
</div>
<?php else:
  $pass = "";?>
<p> привет </p><a href="/prog1.php">Переход обратно</a>.</p>
<?php endif;?>
</body>
</html>