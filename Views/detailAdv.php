<?php
require_once(ROOT_PATH .'Controllers/BookController.php');
$adv = new BookController();
$params = $adv->indexAdv();
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
    <?php include('_inc/header.php'); ?>
  </header>

    <div class="detail-container">
      <div class="contents">
        <h1>上級</h1>

        <div class="books-contents">
          <?php foreach($params['adv'] as $adv):?>
          <div class="book">
              <img src="/img/images/<?=$adv['picture']?>" alt="top">
            <a href="bookBegginer.php?id=<?php echo $adv["id"]?>"><?=htmlspecialchars($adv['title'])?></a>
            <p><?=htmlspecialchars($adv['author'])?></p>
          </div>
          <?php endforeach; ?>
        </div><!-- books-contents -->
      </div><!-- contents -->
    </div><!-- detail-container -->

  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
</body>
</html>
