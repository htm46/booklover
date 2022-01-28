-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 1 月 28 日 08:46
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `booklover`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `level` varchar(255) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `level`, `picture`) VALUES
(1, 'Charlie and the Chocolate Factory', 'Roald Dahl', 'チャーリーが住んでいる町には、世界一のチョコレート工場がある。\r\nだれもそこで働く人を見たことがないナゾの工場だ。そこへ五人の子どもたちが招待されるというので大騒動！　さあ、何が起こるのか?！\r\n奇抜な発想が楽しい大人気の物語が、新装版で登場。', '初級', '178481492061e65038af3ec8.34782524.jpg'),
(2, 'Matilda', ' Roald Dahl', 'マチルダは天才少女。三歳になる前に字が読めるようになり、四歳で、有名な文学作品も読みこなす。ところが両親ときたら、そんな娘を「かさぶた」あつかい。「物知らず」だの「ばか」だのと、どなりちらしてばかり。学校にあがると、そこには巨大な女校長がいて、生徒をぎゅうぎゅう痛めつけている。横暴で高圧的な大人たちに頭脳で立ち向かうマチルダの、痛快仕返し物語。', '初級', '138802143761e186b6325c86.86998658.jpeg'),
(7, 'The Firm', 'John Grisham', '原作は800万部以上の大ベストセラー小説を元にしたT・クルーズ主演の法律サスペンス。全米でもトップクラスの法律学校を優秀な成績で卒業したミッチは、ある法律事務所からの内定を受け取る。数いる優秀な生徒の中からたった一人自分にだけ白羽の矢を立てたその事務所は、他とは比較にならない最高の労働条件を彼に提示してきた。二つ返事で了承した彼だったが、その事務所には知られざる裏の顔があった......。', '上級', '144901399661e18710153c14.03864081.jpg'),
(9, 'Justice', 'Michael J. Sandel', '日本中が熱狂したベストセラーが紙版の文庫化に合わせて大幅値下げ。\r\nさらに世界初公開、マイケル・サンデル氏の次作『それをお金で買いますか』より「序章」を先行収録いたしました。\r\n１人を殺せば５人が助かる状況があったとしたら、あなたはその１人を殺すべきか？　\r\n哲学は、机上の空論では断じてない。金融危機、経済格差、テロ、戦後補償といった、現代世界を覆う無数の困難の奥には、つねにこうした哲学・倫理の問題が潜んでいる。この問題に向き合うことなしには、よい社会をつくり、そこで生きることはできない。\r\nアリストテレス、ロック、カント、ベンサム、ミル、ロールズ、そしてノージックといった古今の哲学者たちは、これらにどう取り組んだのだろう。彼らの考えを吟味することで、見えてくるものがきっとあるはずだ。', '上級', '44671353761e1872e8ec740.95627194.jpg'),
(12, 'Wonder', 'Raquel Jaramillo Palacio', '遺伝子疾患による風変わりな容貌を持つ少年。小学校5年生で初めて登校した彼は、偏見やいじめを受けるが、家族の深い愛情と勇気に支えられ、少しずつ困難を乗り越えていく。やがて周囲も彼の魅力に気づき、輝き始める学校生活。そして彼は、忘れ得ぬ修了式を迎える。', '初級', '112921747961e186f57f76c1.37727931.png'),
(13, 'Holes', 'Louis sachar', '先祖のおじいちゃんがヘマをしたせいで、呪いをかけられ、不幸の家系になってしまったと信じる少年スタンリー。彼はある日、運悪く無実の罪で捕まってしまう。そして、自分の潔白を証明することをあっさり諦め、少年矯正施設行きを受け入れる。しかし、そこは想像を絶する過酷なところだった。砂漠のど真ん中に建つその施設では、恐ろしい女所長が恐怖支配を行い、&quot;人格形成のため&quot;と称して、来る日も来る日も少年たちに大きな穴を掘らせていた。だがその&quot;穴掘り&quot;には、ある別の大きな企みがあったのだった...。ルイス・サッカーの傑作児童文学を豪華キャストで映画化した日本劇場未公開の痛快ファミリー・アドベンチャー。', '初級', '71928943861e186c73b7263.84363988.jpg'),
(14, 'Who Moved My Cheese?', 'Spencer Johnson', 'この小さな本が世界のビジネスマンを変えてゆく!\r\n迷路のなかに住む、2匹のネズミと2人の小人。彼らは迷路をさまよった末、チーズを発見する。チーズは、ただの食べ物ではなく、人生に おいて私たちが追い求めるもののシンボルである。\r\nところがある日、そのチーズが消えた! ネズミたちは、本能のままにすぐさま新しいチーズを探しに飛び出していく。ところが小人たちは 、チーズが戻って来るかも知れないと無駄な期待をかけ、現状分析にうつつを抜かすばかり。しかし、やがて一人が新しいチーズを探しに 旅立つ決心を…。\r\nIBM、アップル・コンピュータ、メルセデス・ベンツ等、トップ企業が次々と社員教育に採用。単純なストーリーに託して、状況の変化にい かに対応すべきかを説き、各国でベストセラーとなった注目の書。905円でアナタの人生は確実に変わる!', '初級', '196205729161e186d7321c27.60356971.jpg'),
(15, 'Harry Potter and the Prisoner of Azkaban', 'J.K.Rowling', '揃ってホグワーツ魔法学校の3年生になったハリーとロン、ハーマイオニーの親友3人組。しかし、進級早々ハリーは人間の世界で誤って魔法を使ってしまい、退学の危機に直面する。また彼には、さらなる脅威が迫っていた。脱出不可能と言われる牢獄アズカバンから脱走した凶悪犯シリウス・ブラックが、ハリーを探し回っているというのだ。', '中級', '116254898561e18755a31b59.75685180.jpg'),
(16, 'Harry Potter and the Philosophers Stone', 'J.K.Rowling', '孤児の少年ハリー・ポッターのもとに、ホグワーツ魔法魔術学校への入学を許可する手紙が舞い込む。彼の両親は有名な魔法使いで、彼もその血を受け継いでいたことが判明。ハリーは無事入学し友達もできるが、やがて学校に隠された驚くべき秘密に気づく。', '中級', '148552463561e189d060d9f9.99653040.png'),
(17, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', '本書は...金持ちになるためにはたくさん稼ぐ必要があるという「神話」をくつがえす。持ち家が資産だという「信仰」を揺るがす。資産と負債の違いをはっきりさせる。お金について教えるのに、学校教育があてにできないことを親にわからせる。そして、お金について子供たちに何を教えたらいいかを教えてくれる。', '中級', '18368543661e187745784d8.99891591.jpg'),
(18, 'New Moon', 'Stephenie Meyer', '全米で10代の少女たちから絶大な支持を集めるステファニー・メイヤーのYA小説トワイライト・シリーズを、クリステン・スチュワートとロバート・パティンソン主演で映画化するファンタジー・ロマンスの第2弾。今回はヴァンパイアの宿敵である狼族が登場、人間の少女ベラとヴァンパイアの青年エドワードの恋にもさらなる試練と危機が待ち受ける。監督は「ライラの冒険 黄金の羅針盤」のクリス・ワイツ。ベラの18歳の誕生パーティの席で起きたある事件が原因で、エドワードたちカレン一家はベラのためを思いフォークスの町を去っていった。深く傷つき悲しみに暮れるベラを幼なじみのジェイコブは懸命に支え続ける。ところが、そんなジェイコブにある異変が訪れ始め...。', '中級', '136173764961e18784c02446.62869134.jpg'),
(19, 'Steve Jobs', 'Walter Isaacson', 'アップル創設の経緯から、ｉＰｈｏｎｅ、ｉＰａｄ誕生秘話、そして引退まで、スティーブ・ジョブズ自身がすべてを明らかに。本人が取材に全面協力したからこそ書けた、唯一無二の記録。伝説のプレゼンテーションから、経営の極意まで。経営者としてのジョブズの思考がたっぷり詰まった内容。ビジネス書、経営書としても他の類似書を圧倒。', '中級', '180831720861e18792f12337.27407187.jpg'),
(20, 'Danger Music', 'Eddie Ayres', 'エディ・エアーズは、イギリスで子供の頃にビオラを学び、香港フィルハーモニー管弦楽団で長年遊んだり、30代でチェロを学び、オーストラリアに上陸してオーストラリアの朝のラジオ番組を大成功させるまで、生涯にわたる音楽経験を持っています。しかし、この間ずっとエディはエマ・エアーズでした。 2014年、エマは性別への苦悩に駆り立てられて、深い鬱病に巻き込まれていました。彼女はラジオをやめ、旅行し、そして戦争地帯で音楽を教える救いへの驚くべき道を決めました。エマは、カブールにあるサルマスト博士の有名なアフガニスタン国立音楽研究所に応募し、孤児やストリートチルドレンにチェロを教えました。デンジャーミュージックでは、エディはカブールの爆弾と混沌を通り抜け、バッハ、アバ、ベートーベン、そして彼ら自身の爽快なアフガニスタン音楽によって運ばれるアフガニスタンの子供たちの生活に私たちを連れて行きます。これらの壮大な経験に加えて、エマは自分の平和を確保するための最終的なステップを踏むことを決意します。', '上級', '125212330761e3ec8007c408.47952548.jpg'),
(21, 'How to Win Friends and Influence People', 'Dale Carnegie', 'あらゆる自己啓発本の原点とも言うべき本書は、1937年に初版が発行されると瞬く間にベストセラーとなり、累計で1,500万部を売り上げた。『How to Win Friends and Influence People』は初版の発売当時と同じように今日でも十分通用する内容となっているが、その理由は、著者のデール・カーネギーが決して変わり得ない人間の本質を理解していたからに他ならない。著者の信ずるところによれば、経済的成功の15パーセントは専門的知識から生み出されるが、残りの85パーセントは「考えを表現する能力、リーダーシップをとる能力、そして人々の熱意を引き出す能力」によるものとなる。人と接する際の基本的な原則を基に、自分が重要視され、評価されていると相手に感じさせるようなスキルを教示する。また、操られていると相手に感じさせないようにしながらつき合う基本的な手法にも重点を置いている。カーネギーは、誰かに自分が望むことをさせるには、状況を一度自分以外の視点に立って観察し、「他人の中に強い欲望を喚起させる」ことで可能になると述べる。更に本書を通じて、相手に好かれる方法、自分の考え方に相手を引き込む方法、相手の感情を害することなく、あるいは恨みを買うことなくその人の考え方を変える方法を学ぶことができる。例えば、「他人にその考えが自分のものだと感じさせる」方法、そして「まず自分の失敗について語ってから他人を批判する」方法などである。また、歴史上の人物、産業界のリーダー、そして市井の人々の逸話を交えながら、著者の論点が分かりやすく解説されている。', '上級', '47324815061e3ec8aadaf94.57001998.jpg'),
(24, 'All Our Shimmering Skies', 'Trent Dalton', '墓掘り師の娘であるマザーレスモリーフックは、家族に呪いをかけた深淵の魔術師を求めて道を曲がります。 彼女の側には、最もありそうもない旅の仲間がいます：かみそりの舌を出した女優のグレタと、堕落した日本の戦闘機パイロットのユキオ。 彼らがブドウの森からオーストラリアの野生で魔法のモンスーンの土地に旅するとき、彼らは重大な危険に遭遇し、本当の愛を発見するでしょう…', '上級', '163207467461e64ffd618ab8.69399031.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `book_club`
--

CREATE TABLE `book_club` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `board` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `book_club`
--

INSERT INTO `book_club` (`id`, `user_id`, `board`, `created_at`) VALUES
(38, 9, 'aaa', '2022-01-11 08:18:42'),
(40, 9, 'aaa', '2022-01-11 08:20:42'),
(41, 9, 'xxx', '2022-01-11 08:23:24'),
(42, 9, 'xxx', '2022-01-11 09:46:25'),
(43, 9, 'aa', '2022-01-12 03:11:24'),
(44, 9, 'aa', '2022-01-12 06:58:38'),
(52, 7, '今日は30ページ読みました。明日も同じくらい読みたいです。', '2022-01-18 04:42:04'),
(53, 7, 'テストです。', '2022-01-18 04:43:12');

-- --------------------------------------------------------

--
-- テーブルの構造 `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `images`
--

INSERT INTO `images` (`id`, `name`) VALUES
(1, '115383545461e1473830f7a7.64795929.png'),
(2, '200622449361e16732939a72.24859487.jpeg'),
(3, '211775373061e167a7321925.83409333.jpeg'),
(4, '14460095061e167bcd24a11.41596906.jpeg'),
(5, '42451518961e167d71edb20.18489467.jpeg'),
(6, '12390386861e167ecc5b711.66559370.jpeg'),
(7, '187221174261e16815d9f854.28729879.jpeg'),
(8, '15482122961e1682201f528.50892378.jpeg'),
(9, '27468320361e168392cbbf2.16343868.jpeg'),
(10, '123847812661e1684e0f7792.33510263.jpeg'),
(11, '205358551061e1685e9b1977.89136076.jpeg'),
(12, '101367500961e16901157594.78739335.jpeg'),
(13, '146239748261e16959847bc0.87941570.jpeg'),
(14, '11319680761e16a87762480.12811196.jpeg'),
(15, '78874926661e16ac62b9082.23710838.jpeg'),
(16, '68473374661e16b8f315dd8.81928753.jpeg'),
(17, '14393060361e16ba28c0a01.82663579.png');

-- --------------------------------------------------------

--
-- テーブルの構造 `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `reviews`
--

INSERT INTO `reviews` (`id`, `comment`, `user_id`, `title`, `created_at`) VALUES
(24, 'aaa', 9, 'Matilda', '2022-01-11 08:23:24'),
(25, 'テストです。', 9, 'Charlie and the Chocolate Factory', '2022-01-11 09:46:25'),
(26, 'テストです。', 9, 'Charlie and the Chocolate Factory', '2022-01-12 03:11:24'),
(27, 'fff', 9, 'The Firm', '2022-01-12 06:58:38'),
(28, 'ジョブス', 9, 'Steve Jobs', '2022-01-16 07:20:38'),
(29, 'チャーリー', 9, 'Charlie and the Chocolate Factory', '2022-01-16 07:20:58'),
(30, '会社', 9, 'The Firm', '2022-01-16 07:21:13'),
(31, 'ポッター', 9, 'Harry Potter and the Prisoner of Azkaban', '2022-01-16 07:21:42'),
(32, 'aaa', 9, 'Harry Potter and the Prisoner of Azkaban', '2022-01-16 07:22:46'),
(34, 'ああゝ', 8, 'Charlie and the Chocolate Factory', '2022-01-16 08:22:01'),
(36, 'ss氏', 8, 'Charlie and the Chocolate Factory', '2022-01-16 08:23:05'),
(37, 'ttt', 8, 'Charlie and the Chocolate Factory', '2022-01-16 08:23:24'),
(38, 'っっq', 7, 'Harry Potter and the Prisoner of Azkaban', '2022-01-16 09:52:22'),
(39, 'あああ', 7, 'All Our Shimmering Skies', '2022-01-16 09:54:08'),
(40, 'ハリー', 9, 'Harry Potter and the Prisoner of Azkaban', '2022-01-16 10:02:02'),
(41, 'あああ', 9, 'All Our Shimmering Skies', '2022-01-16 10:02:27'),
(42, 'あああ', 9, 'All Our Shimmering Skies', '2022-01-18 04:41:01'),
(43, 'あああ', 7, 'All Our Shimmering Skies', '2022-01-18 04:42:04'),
(44, 'あああ', 7, 'All Our Shimmering Skies', '2022-01-18 04:43:12'),
(45, '面白かったです。', 7, 'Who Moved My Cheese?', '2022-01-18 04:58:06'),
(46, 'あああ', 7, 'Charlie and the Chocolate Factory', '2022-01-18 04:58:43'),
(47, '面白かったです。', 7, 'Steve Jobs', '2022-01-18 05:17:35'),
(48, '面白かったです。', 34, 'Steve Jobs', '2022-01-18 05:18:50'),
(49, '面白かったです。', 34, 'Danger Music', '2022-01-18 05:20:27'),
(50, 'チャーリーとチョコレート工場', 34, 'Charlie and the Chocolate Factory', '2022-01-18 05:21:02'),
(52, 'aaa', 9, 'Holes', '2022-01-20 08:33:23'),
(53, 'aaa', 9, 'Holes', '2022-01-20 08:34:25'),
(54, 'aaa', 9, 'Holes', '2022-01-20 08:34:33'),
(55, 'aaa', 9, 'Holes', '2022-01-20 08:34:39'),
(56, 'aaa', 9, 'Holes', '2022-01-20 08:34:46'),
(57, 'aaa', 9, 'Holes', '2022-01-20 08:34:51'),
(58, 'aaa', 9, 'Holes', '2022-01-20 08:34:56'),
(59, 'aaa', 9, 'Holes', '2022-01-20 08:35:02'),
(60, 'aaa', 9, 'Holes', '2022-01-20 08:35:07'),
(61, 'aaa', 9, 'Holes', '2022-01-20 08:35:12'),
(62, 'aaa', 9, 'Holes', '2022-01-20 08:35:17');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(7, 'aaa', 'aaa@gmail.com', '$2y$10$.TTxY6q37TZd35yu3DPImuVTvXTYGLLFHs/ZPXdhVPFmE2vYMnMSu', 0),
(9, 'admin', 'admin@gmail.com', '$2y$10$zjPflXSB0vFbshV498KsVuO5A6hFwDrcveYsTqUNH68Yo3Qgh41bi', 1),
(11, 'ccc', 'ccc@gmail.com', '$2y$10$sJRPRI2sj.QI3ofIMucfwetGP.rBZN2blF8VXARc6FUFNUh/SR5N6', 0),
(12, 'ddd', 'ddd@gmail.com', '$2y$10$ST.KjFOJWaTILPEiFgm9yupqOAy28ZQ7rt9p/2aw0F2jndX.YFHGu', 0),
(13, 'ddd', 'ddd@gmail.com', '$2y$10$9ZcqvfITUG6lD8EqI73dJ.3N4aUuXVQXAtEVO3cWE0s/JaAEHQrAy', 0),
(14, 'ddd', 'ddd@gmail.com', '$2y$10$u1Mfl6L5az7QmZSAYnqVtOebEsa6FpxNKUj2xeqNPAWZNfT7x8Q2G', 0),
(15, 'ddd', 'ddd@gmail.com', '$2y$10$yuovkB2dKmdD7i4e5FeTFejbmZedTCi7SOWLYdpDiWJXPKuq/ni8C', 0),
(16, 'ddd', 'ddd@gmail.com', '$2y$10$l23k9/MsOgHBpfK06Eb55.gj9ouERjOmMeb3fVEjEDugZW3TsgjP6', 0),
(17, 'aa', 'aaaa@gmail.com', '$2y$10$P63gkVcTJLeZjg0bFbKNx.9Qh/.ogE5lZiAvkakjbAcl5OPWN.lj.', 0),
(18, 'aaa', 'aaa@gmail.com', '$2y$10$mVcrXrW1YgTyXdLiNH925eG9cUMNcJH/X/B/tT1Z2NCGn54vOPvFO', 0),
(19, 'eee', 'eee@gmail.com', '$2y$10$g.Qx3g9Fpvhqj5e1hoCc.OlnrcqWL0KCjqMzJMvva2QEfei49E7zq', 0),
(20, 'ddd', 'ddd@gmail.com', '$2y$10$8aat91ptz2B.uDPE7HOg7OS.8O2FPFNJpf/G4RfmXYBdlW5AfLm2K', 0),
(21, 'ddd', 'ddd@gmail.com', '$2y$10$85QZXwpjO34CYkj0Wg4PXu8/1PzOjgC/LlCvY/OryCIlKI6jSgcPO', 0),
(22, 'aaa', 'aaa@gmail.com', '$2y$10$H0zZ4cq9gj72/04VX.Cu1eNhIAF4QQLQg/TYpR2Ug/G3alMq65DDW', 0),
(23, 'eee', 'eee@gmail.com', '$2y$10$tm0rRuCMh/c3WtEScQpXG.2u1XxhoJ6KiXXDhDvPuvj.6hNMIfiJS', 0),
(24, 'eee', 'eee@gmail.com', '$2y$10$8e71IVMhM.Vda68HV89uNOV8KUHlazz5ku4rKjhgN3d0j0O3kfnLO', 0),
(25, 'eee', 'eee@gmail.com', '$2y$10$8VXINO.6Y/stW2ERSMBJBuR6L3BM4Gm1DlcbfbTpCXSYBQgYUVsL2', 0),
(26, 'eee', 'eee@gmail.com', '$2y$10$zuNLUcHMgLJkzCp/tWv3nePxh6u0GACiSjYHdlMdfVSs7vmkzQTJe', 0),
(27, 'eee', 'eee@gmail.com', '$2y$10$Wn2gvTdmA/qkkxiaUpS7Vu5iFEZ43kkUvbK9JSbFvmbtB9uwCcxOe', 0),
(28, 'eee', 'eee@gmail.com', '$2y$10$ZcDCd2WeGL5VrtOeo/7TM.qOYapLI5g4WqumIKIbaccQZYuEemqkG', 0),
(29, 'eee', 'eee@gmail.com', '$2y$10$6tu/3IOcTi9V.E2N1TT1/.LkRa5cHEhm/LUxOr5Um0AC26nehBNc2', 0),
(30, 'aaa', 'aaa@gmail.com', '$2y$10$0k8wlcxKn46eFkQ.jdOSHuf.72UKR/3ba4zdUwPAFE/FMwl8FTblq', 0),
(31, 'aaa', 'aaa@gmail.com', '$2y$10$rLW.1BAonn53V7gsomff/OeZ3gH7oe1sY2uMQ8p/QTu5W8.1dUj/e', 0),
(32, 'aaaaaa', 'aaa@gmail.com', '$2y$10$.YyryTl.cmzJh.9Vqxgw7u.k16uBtUkVP4GkI7b8vptBIyhYAXN6e', 0),
(33, 'aaa', 'aaa@gmail.com', '$2y$10$ptcnhejmN.65V1vhIv3zHe1uPYItbFuZiU8T/nYDv45DlooHW4tmm', 0),
(34, 'テスト', 'test@gmail.com', '$2y$10$6OQ.0LyMZ8CKDF5O.jhxZOvk61H6NNw8TGigv/s6PIkcSwnil6ZNu', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `users_books`
--

CREATE TABLE `users_books` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `book_club`
--
ALTER TABLE `book_club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- テーブルのインデックス `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_books`
--
ALTER TABLE `users_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`book_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- テーブルの AUTO_INCREMENT `book_club`
--
ALTER TABLE `book_club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- テーブルの AUTO_INCREMENT `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- テーブルの AUTO_INCREMENT `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- テーブルの AUTO_INCREMENT `users_books`
--
ALTER TABLE `users_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `book_club`
--
ALTER TABLE `book_club`
  ADD CONSTRAINT `book_club制約` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
