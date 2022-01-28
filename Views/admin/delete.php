<?php
  require_once(ROOT_PATH .'Controllers/AdminController.php');
  $userInfo = new AdminController();
  $bookInfo = new AdminController();
  $posts = new AdminController();
  $delete = $userInfo->delete();
  $delete = $bookInfo->delete();
  $delete = $posts->delete();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="action.js"></script>
  <title>BookLover</title>
</head>

<body>
  <div class="admin-logo">
    <a href="/index.php"><img src="/img/logo.png" alto="logo"></a>
  </div>

  <div class="header-color"></div>

  <div class="delete-container">
    <br><br>
    <p>
      データを削除しました。<br><br>
      <a href="#" onclick="history.back(-1);return false;">戻る</a>
    </p>
    <br><br><br><br>
 </div>
</body>
</html>
