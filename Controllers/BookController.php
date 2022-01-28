<?php
require_once(ROOT_PATH .'/Models/Beginner.php');
require_once(ROOT_PATH .'/Models/Inter.php');
require_once(ROOT_PATH .'/Models/Advanced.php');
require_once(ROOT_PATH .'/Models/NewIn.php');

class BookController {
  private $request;
  private $beginner;
  private $inter;
  private $adv;
  private $newIn;

  public function __construct() {
    //リクエストパラメータの取得
    $this->request['get'] = $_GET;
    $this->request['post'] = $_POST;
    //モデルオブジェクトの生成
    $this->Beginner = new Beginner();
    $this->Inter = new Inter();
    $this->Adv = new Adv();
    $this->NewIn = new NewIn();

    //別モデルと連携
    $dbh = $this->Beginner->get_db_handler();
    //$this->Inter = new Inter($dbh);
    //$this->Adv = new Adv($dbh);
    $this->NewIn = new NewIn($dbh);

    // $dbh = $this->Inter->get_db_handler();
    // $dbh = $this->Adv->get_db_handler();
    // $dbh = $this->NewIn->get_db_handler();
    //$dbh = $this->ReviewB->get_db_handler();
  }

  //初級のデータを呼び出す
  public function index() {
    $beginner = $this->Beginner->findBeginner();
    $params = [
       'beginner' => $beginner
    ];
    return $params;
  }

  //初級の各ID情報を取得
  public function view() {
    if(empty($this->request['get']['id'])) {
      echo '指定のパラメータが不正です。このページを表示できません。';
      exit;
    }
    $beginner = $this->Beginner->findById($this->request['get']['id']);
    //$beginner = $this->Beginner->findAll($this->request['get']['id']);
    $params = [
      'beginner' => $beginner,
    ];
    return $params;
  }

  //中級のデータを呼び出す
  public function indexInter() {
    $inter = $this->Inter->findInter();
    $params = [
       'inter' => $inter,
    ];
    return $params;
  }

  //中級の各ID情報を取得
  public function viewInter() {
    if(empty($this->request['get']['id'])) {
      echo '指定のパラメータが不正です。このページを表示できません。';
      exit;
    }
    $inter = $this->Inter->findById($this->request['get']['id']);
    $params = [
      'inter' => $inter,
    ];
    return $params;
  }

  //上級のデータを呼び出す
  public function indexAdv() {
    $adv = $this->Adv->findAdv();
    $params = [
       'adv' => $adv,
    ];
    return $params;
  }

  //上級の各ID情報を取得
  public function viewAdv() {
    if(empty($this->request['get']['id'])) {
      echo '指定のパラメータが不正です。このページを表示できません。';
      exit;
    }
    $adv = $this->Adv->findById($this->request['get']['id']);
    $params = [
      'adv' => $adv,
    ];
    return $params;
  }

  //New inのデータを呼び出す
  public function indexNewIn() {
    $newIn = $this->NewIn->findNewIn();
    $params = [
       'newIn' => $newIn,
    ];
    return $params;
  }

  //NEWの各ID情報を取得
  public function viewNewIn() {
    if(empty($this->request['get']['id'])) {
      echo '指定のパラメータが不正です。このページを表示できません。';
      exit;
    }
    $niewIn = $this->NewIn->findById($this->request['get']['id']);
    $params = [
      'niewIn' => $niewIn,
    ];
    return $params;
  }


}

?>
