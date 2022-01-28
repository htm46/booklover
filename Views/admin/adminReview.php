<?php
session_start();
require(ROOT_PATH .'Controllers/AdminController.php');
$reviewInfo = new AdminController();
$params = $reviewInfo->reviewInfoIndex();
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
      <h1>管理者ページ<br>レビュー一覧</h1>
      <table><tbody>
          <tr><th>ID</th><th>ユーザーID</th><th>ユーザーネーム</th><th>書籍ID</th><th>書籍名</th><th>レビュー</th><th>投稿時間</th></tr>
          <?php foreach($params['reviewInfo'] as $reviewInfo):?>
          <tr>
            <th><?=htmlspecialchars($reviewInfo['id'])?></th>
            <th><?=htmlspecialchars($reviewInfo['user_id'])?></th>
            <th><?=htmlspecialchars($reviewInfo['name'])?></th>
            <th><?=htmlspecialchars($reviewInfo['book_id'])?></th>
            <th><?=htmlspecialchars($reviewInfo['title'])?></th>
            <th><?=htmlspecialchars($reviewInfo['comment'])?></th>
            <th><?=htmlspecialchars($reviewInfo['created_at'])?></th>
            <td><a href="delete.php?id=<?php echo $reviewInfo["id"]?>" onclick="return confirm('本当に削除しますか？')">削除</a></td>
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
