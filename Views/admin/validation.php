<?php
session_start();
$error= [];
$mode='input';

if(isset($_POST['submit']) && $_POST['submit']){
  if($_POST['title'] == ''){
    $error[] = "タイトルを入力してください。";
  }
  if($_POST['author'] == ''){
    $error[]="著者を入力してください。";
  }
  if($_POST['description'] == ''){
    $error[]="概要を入力してください。";
  }
  if($_POST['level'] == ''){
    $error[]="レベルを入力してください。";
  }
  if($_FILES['image']['name'] == ''){
    $error[]="画像を指定してください。";
  }

  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
  }
  $_SESSION['title']       = h($_POST['title']);
  $_SESSION['author']      = h($_POST['author']);
  $_SESSION['description'] = h($_POST['description']);
  $_SESSION['level']       = h($_POST['level']);

  if(empty($error)){
    $mode = 'update';
  }else {
    $mode = 'input';
  }
}
?>
