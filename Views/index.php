<?php
require_once(ROOT_PATH .'Controllers/BookController.php');
$newIn = new BookController();
$params = $newIn->indexNewIn();
?>

<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <!-- <script src="js/action.js"></script> -->
  <title>BookLover</title>
</head>

<body>
  <header>
    <?php include('_inc/header.php'); ?>
  </header>

    <div class="top-container">
      <div class="top-contents">
        <ul class="slider">
          <li class="slider-item slider-item01"></li>
          <li class="slider-item slider-item02"></li>
          <li class="slider-item slider-item03"></li>
        </ul>
        <p>
          BookLoverへようこそ。<br />
          BookLoverは洋書紹介専門サイトです。<br />
          ぜひお気に入りの本を見つけて、英語での読書を楽しんでください。<br />
          また、BookLoverでは新規会員を募集中です。<br />
          登録していただくと、会員限定の掲示板の参加や本のレビュー投稿ができます。<br /><br /><br />
          詳しくはこちら<br />
          <a href="about.php">BookLoverとは</a>
        </p>
        <hr class="hr1">
      </div>

      <div class="new">
        <h1>New in！</h1>

        <div class="book-img">
          <?php foreach($params['newIn'] as $newIn):?>
          <div class="book">
            <a href="bookBegginer.php?id=<?php echo $newIn["id"]?>"><img src="/img/images/<?=$newIn['picture']?>" alt="top"></a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <hr class="hr1">
      <p id="page-top"><a href="#">Page Top</a></p>

      <div class="sns">
        <div class="sns-text">
          <h3>SNS</h3>
          <h1>Follow Us！</h1>
        </div>
        <div class="sns-img">
          <a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a>
          <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
          <a href="https://facebook.com"><i class="fab fa-facebook-square"></i></a>
        </div>
      </div>
    </div><!-- top-container -->

  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="/js/action.js"></script>
</body>
</html>
