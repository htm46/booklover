<?php
session_start();
$name = $_SESSION['name'];
$id   = $_SESSION['id'];
require(ROOT_PATH .'Controllers/AdminController.php');
$posts = new AdminController();
$params = $posts->postsIndex();

// カウント数取得関数
function get_count($file) {
	$filename = 'data/'.$file.'.dat';
	$fp = @fopen($filename, 'r');
	if ($fp) {
		$vote = fgets($fp, 9182);
	} else {
		$vote = 0;
	}
	return $vote;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <title>BookLover</title>
</head>

<body>
  <header>
    <?php include('_inc/header.php'); ?>
  </header>

    <div class="detail-container">
      <div class="detail-contents">
        <h1>ブッククラブへようこそ</h1>
        <div class="contents-item">
          <a href="post.php" class="btn">投稿する</a>
        </div>
      </div><!-- detail-contents -->

			<p id="page-top"><a href="#">Page Top</a></p>

      <div class="review">
        <table><tbody>
          <?php foreach($params['posts'] as $posts):?>
						<?php $num = $posts['id'];?>
            <tr>
              <th hidden><?=htmlspecialchars($posts['id'])?></th>
              <h2 hidden><?=htmlspecialchars($posts['user_id'])?></h2>
              <h2><?=htmlspecialchars($posts['name'])?></h2>
              <p><?=htmlspecialchars($posts['board'])?></p>
              <p><?=htmlspecialchars($posts['created_at'])?></p>
							<div class="good">
								<p class="good-btn" id="<?=$num?>"></p>
								<p class="good-count <?=$num?>"><?= get_count($num) ?></p>
							</div>
            </tr>
          <?php endforeach; ?>
        </tbody></table>
      </div><!-- review -->
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
    </div><!-- detail-container -->

  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="/js/action.js"></script>
</body>
</html>

<script>
$(function() {
	allowAjax = true;
	$('.good-btn').click(function() {
		if (allowAjax) {
			allowAjax = false;
			$(this).toggleClass('on');
			var id = $(this).attr('id');
			$(this).hasClass('on') ? Vote(id, 'plus') : Vote(id, 'minus');
		}
	});
});
function Vote(id, plus) {
	cls = $('.' + id);
	cls_num = Number(cls.html());
	count = plus == 'minus' ? cls_num - 1 : cls_num + 1;
	$.post('vote.php', {'file': id, 'count': count}, function(data) {
		if (data == 'success') cls.html(count);
		setTimeout(function() {
			allowAjax = true;
		}, 1000);
	});
}
</script>
