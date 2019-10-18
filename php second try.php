<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php $browser = get_browser(null, true); ?>
  <h1>Информация о пользователе</h1>
  <dl>
    <dt><strong>Ваш IP адрес:</strong></dt>
    <dd><en><?php print($_SERVER['REMOTE_ADDR']); ?></en></dd>
<!-- stuff to do  -->
    <dt><strong></strong></dt>

  </dl>
</body>
</html>
