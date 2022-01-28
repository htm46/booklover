<?php
session_start();
require_once(ROOT_PATH.'Controllers/BookController.php');
$beginner = new BookController();
$params = $beginner->view();
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
      <div class="detail-contents">
        <img src="/img/images/<?php echo $params['beginner']['picture'] ?>">
        <div class="book-info">
          <h1><?php echo $params['beginner']['title'] ?></h1>
          <h3>By <?php echo $params['beginner']['author'] ?></h3>
          <p>
            レベル：<?php echo $params['beginner']['level'] ?><br><br>
            <?php echo $params['beginner']['description'] ?>
          </p>
        </div>
      </div><!-- detail-contents -->

      <p id="page-top"><a href="#">Page Top</a></p>

      <?php
      require_once(ROOT_PATH .'Controllers/AdminController.php');
      $reviewInfo = new AdminController();
      $params = $reviewInfo->viewReview();
      //$params = $reviewInfo->reviewPages();
      ?>

      <div class="review">
        <h2>レビュー</h2>
        <!-- <div class="review-detail"> -->
          <table><tbody>
              <?php foreach($params['reviewInfo'] as $reviewInfo):?>
                  <tr>
                    <th hidden><?=htmlspecialchars($reviewInfo['id'])?></th>
                    <th hidden><?=htmlspecialchars($reviewInfo['user_id'])?></th>
                    <h2><?=htmlspecialchars($reviewInfo['name'])?></h2>
                    <th><?//=htmlspecialchars($reviewInfo['book_id'])?></th>
                    <th hidden><?=htmlspecialchars($reviewInfo['title'])?></th>
                    <p><?=htmlspecialchars($reviewInfo['comment'])?></p>
                    <p><?=htmlspecialchars($reviewInfo['created_at'])?></p>
                  </tr>
                </div>
              <?php endforeach; ?>
          </tbody></table>
        <!-- </div> -->
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
      </div><!-- review -->
    </div><!-- detail-container -->

  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="/js/action.js"></script>
</body>
</html>
