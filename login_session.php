<?php
if(!isset($_POST['user_id'])){
 ?>
 <pre>
    <form action="login_session.php" method="post">
      아이디 &nbsp;: <input type="text" name="user_id" value="">
      비밀번호 :<input type="password" name="user_pass" value="">
      <input type="submit" value="로그인">
    </form>
</pre>
<?php
}else{
  session_start();

  $user_id = $_POST['user_id'];
  $user_pwd=$_POST['user_pass'];
  $_SESSION['id']=$user_id;
  $_SESSION['pass']=$user_pwd;

  header('location:login_result.php');
}
   ?>
