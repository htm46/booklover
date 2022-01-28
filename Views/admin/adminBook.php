<?php
session_start();
//error_reporting(0);
require(ROOT_PATH .'Controllers/AdminController.php');
$bookInfo = new AdminController();
$params = $bookInfo->booksIndex();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script type="text/javascript" src="js/action.js"></script>
  <title>BookLover</title>
</head>

<body>
  <header>
    <div class="admin-logo">
      <a href="/index.php"><img src="/img/logo.png" alto="logo"></a>
    </div>
  </header>

    <div class="admin-container">
      <h1>管理者ページ<br>書籍一覧</h1>
      <table><tbody>
          <tr><th>ID</th><th>書籍名</th><th>作者</th><th>概要</th><th>レベル</th><th>画像</th></tr>
          <?php foreach($params['bookInfo'] as $bookInfo):?>
          <tr>
            <th><?=htmlspecialchars($bookInfo['id'])?></th>
            <th><?=htmlspecialchars($bookInfo['title'])?></th>
            <th><?=htmlspecialchars($bookInfo['author'])?></th>
            <th><?=htmlspecialchars($bookInfo['description'])?></th>
            <th><?=htmlspecialchars($bookInfo['level'])?></th>
            <td><a href="adminBookEdit.php?id=<?php echo $bookInfo["id"]?>">編集</a></td>
            <td><a href="delete.php?id=<?php echo $bookInfo["id"]?>" onclick="return confirm('本当に削除しますか？')">削除</a></td>
          </tr>
          <?php endforeach; ?>
      </tbody></table>

      <div class='paging'>
      <?php
      for($i=0;$i<=$params['pages'];$i++) {
        if(isset($_GET['page']) && $_GET['page'] == $i) {
          echo $i+1;
        } else {
          echo "<a href='?page=".$i."'>".($i+1)."</a>";
        }
      }
      ?>
      </div>
    </div><!-- admin-container -->
  <footer>
    <div class="admin-logo">
      <a href="/index.php"><img src="/img/logo.png" alto="logo"></a>
    </div>
  </footer>
</body>
</html>
