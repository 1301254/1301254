<?php
if(!isset($_POST['user_id'])){
 ?>
 <pre>
    <form action="login_cookie.php" method="post">
      아이디 &nbsp;: <input type="text" name="user_id" value="">
      비밀번호 :<input type="password" name="user_pass" value="">
      <input type="submit" value="로그인">
    </form>
</pre>
<?php
}else{

  $user_id =$_POST['user_id'];
  $user_pwd=$_POST['user_pass'];
  setcookie('user_id',$user_id);
  setcookie('user_pwd',$user_pwd);
  header('location:login_result.php');
}
   ?>
