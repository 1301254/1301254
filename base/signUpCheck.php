<?php
require_once('connect.php');
if(isset($_GET['id'])){
    $b=$_GET['id'];
    $a = new signUpCheck();
    $ab=$a->signUpCheckFunction($b);
    if($ab==0){
      echo "<script>alert('사용가능한 아이디입니다')</script>";
      echo "<script>history.back();</script>";
      echo "<script>self.close();</script>";
    }else if($ab==1){
      echo "<script>alert('아이디 중복입니다')</script>";
      echo "<script>history.back();</script>";
      echo "<script>self.close();</script>";
    }
}
// elseif(!isset($_GET['id'])){
//   echo "<script>alert('아이디를 입력해 주세요');</script>";
// }

class signUpCheck{
  function signUpCheckFunction($id){
    $dbh = connect();
    $stmt = $dbh->prepare('SELECT id FROM account_info');
    $stmt->execute();

    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //$row는 연관배열을 가진다

    for($i=0;$i<count($row);$i++){
            $a=$row[$i]['id'];
            $str = strcasecmp($a, $id);         //동일 하다면 0을 반환한다
            if($str==0){
              return 0;
              exit;
            }
    }
        return 1;
    }
}


 ?>
