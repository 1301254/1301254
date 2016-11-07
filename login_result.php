<?php
require('dbmanager.php');

if(isset($_SESSION['id'])){
  session_start();
  $user_id = $_SESSION['id'];
  $user_pw = $_SESSION['pass'];

  $dbh=connect();

  $stmt=$dbh->prepare('SELECT * FROM login');

  $stmt->execute();

  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    if(($row['id']==$user_id) && ($row['password']==$user_pw)){
      echo "<h2>".$_SESSION['id']."님 환영합니다";
    }else{
      echo "일치하지않습니다";
    }
  }
}else{
  $user_id=$_COOKIE['user_id'];
  $user_pwd=$_COOKIE['user_pwd'];

  $dbh=connect();

  $stmt=$dbh->prepare('SELECT * FROM login');

  $stmt->execute();

  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    if(($row['id']==$user_id) && ($row['password']==$user_pwd)){
      echo "<h2>".$user_id."님 환영합니다";
    }else{
      echo "일치하지않습니다";
    }
  }
}
 ?>
