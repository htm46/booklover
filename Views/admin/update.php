<?php
require_once(ROOT_PATH.'Controllers/AdminController.php');
$bookInfo = new AdminController();
$update = $bookInfo->update();
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
  <div class="delete-container">
    <br><br>
    <p>
      更新しました。<br><br>
      <a href="adminBook.php?">戻る</a>
    </p>
    <br><br><br><br>
 </div>
</body>
</html>
