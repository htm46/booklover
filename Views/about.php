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

  <div class="about-container">
    <div class="about-item">
      <img src="img/abouttop.png" alt="abouttop">
    </div>

    <div class="about-item">
      <h1>BookLoverとは</h1>
      <p id="page-top"><a href="#">Page Top</a></p>
      <p class="about-p">
        BookLoverへようこそ！<br>
        BookLoverは英語のリーディング力向上を目的とした、洋書紹介専門サイトです。<br>
        英語で本を読みたいと思ったときに、どの本を選べばいいかわからないときはありませんか？<br>
        このサイトでは、アメリカで利用されているLexis指数を元にTOEICのスコア別で洋書をレベル分けしました。<br>
        ぜひ本選びの参考にしてみてください。<br>
        また、会員限定掲示板「ブッククラブ」では洋書が好きな仲間が見つかること間違いなし。<br>
        ぜひ登録して参加してみましょう！
      </p>
    </div>

    <div class="about-column">
      <img src="img/level.png" alt="レベル">
      <div class="about-content">
        <div class="level">
          <div class="level-text">
            <h1>レベル分けについて</h1>
            <p>
              BookLoverでは、米国Meta Metrics社が開発した<br>"Lexile指数"を使用しています。<br>
              Lexile指数とは、読者のリーディング力と本の難易度を<br>200L～1700Lで表した数値により、<br>
              一人ひとりの読書レベルと興味関心に合った本や記事を<br>見つけることができるものです。<br>
              日本でより馴染みのあるTOEICのスコアを<br>Lexile指数で換算し、<br>初級・中級・上級に分けて本を紹介しています。
            </p>
          </div>
          <table>
            <tr>
              <th>レベル</th>
              <th>TOEICリーディングスコア</th>
            </tr>
            <tr>
              <td>初級</td>
              <td>60-250</td>
            </tr>
            <tr>
              <td>中級</td>
              <td>255-450</td>
            </tr>
            <tr>
              <td>上級</td>
              <td>455-495</td>
            </tr>
          </table>

        </div>


      </div>
    </div>

    <div class="about-column">
      <img src="img/about2.jpeg" alt="掲示板">
      <div class="about-content">
        <h1>ブッククラブとは</h1>
        <p>
          BookLoverでは会員限定の掲示板「ブッククラブ」を運営しています。<br>
          一人で黙々と英語の勉強をしていると、<br>どうしてもモチベーションが下がりがち。<br>
          そんな時は、「ブッククラブ」で勉強仲間を探してみませんか？<br>
          目標や達成したことを報告してみましょう！<br>
          一人でも多くの仲間を募集しています。<br>
          <a href="signup.php">会員登録はこちら！</a>
        </p>
      </div>
    </div>
  </div>

  <footer>
    <?php include('_inc/footer.php'); ?>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="/js/action.js"></script>
</body>
</html>
