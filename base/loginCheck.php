<?php
require_once('connect.php');
$dbh = connect();

  $user_id = $_POST['user_id'];
  $user_pw = $_POST['user_pw'];

  if((isset($user_id)=='') || (isset($user_pw)=='')) {
    echo "<script>alert('빈란이 존재합니다');</script>";
    echo "<script>history.back();</script>";
  }

  $stmt = $dbh->prepare('SELECT id,pwd,name FROM account_info');
  $stmt->execute();

  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

      if(($user_id==$row['id']) && ($user_pw==$row['pwd'])){
       echo "<script>alert('환영!');</script>";

       session_start();

       $name = $row['name'];
       $_SESSION['user_id'] = $user_id;
       $_SESSION['user_name'] = $name;

       echo "<meta http-equiv='refresh' content='0;url=../home.php'>";
       exit;
     }
  }

$stmt = $dbh->prepare('SELECT id FROM account_info');
$stmt->execute();
$row2 = $stmt->fetchAll();
global $idBool;

for($i=0;$i<=count($row2);$i++){
  foreach($row2 as $a){
    if($a['id']==$user_id)
    {
        $idBool=true;
        break;
    }else{
        $idBool=false;
    }
  }
}
if($idBool==true){
  echo "<script>alert('비밀번호가 일치하지 않습니다');</script>";
  echo "<script>history.back();</script>";
}else if($idBool==false){
  echo "<script>alert('아이디가 존재하지 않습니다');</script>";
  echo "<script>history.back();</script>";
}

// while($ro = $stmt->fetchAll()){
//     $bid = $ro['']
//     if(!in_array($user_id,$ro[$i]['id'])){
//               echo "<script>alert('아이디가 존재 하지 않습니다!');</script>";
//
//               // echo "<script>history.back();</script>";
//               exit;
//     }else if(!in_array($user_pw,$ro[$i]['pwd'])) {
//             echo "<script>alert('패스워드가 잘못되었습니다.');</script>";
//             echo "<script>history.back();</script>";
//             exit;
//     }
//   }
//   }

?>
