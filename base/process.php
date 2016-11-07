<?php
require('connect.php');
require_once('signUpCheck.php');
$dbh=connect();

switch($_GET['mode']){
    case 'insert':
    if($_POST['pwd']!==$_POST['pwd2'])
    {
      echo "<script>alert('비밀번호가 일치 하지 않습니다');</script>";
      echo "<script>history.back(-1)</script>";
    }else {
        $stmt = $dbh->prepare("INSERT INTO account_info (id, pwd, name, addr,sex,birthday,email,question,response) VALUES (:id, :pwd, :name, :addr, :sex, :birthday, :email, :question ,:response)");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':pwd',$pwd);
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':addr',$addr);
        $stmt->bindParam(':sex',$sex);
        $stmt->bindParam(':birthday',$birthday);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':question',$question);
        $stmt->bindParam(':response',$response);
        $id = $_POST['id'];
        $pwd = $_POST['pwd'];
        $name = $_POST['name'];
        $addr = $_POST['addr'];
        $sex = $_POST['sex'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $question = $_POST['question'];
        $response = $_POST['response'];


        //id 중복 확인 코드입니다
        $idCheck = new signUpCheck();

        $idCheckresult = $idCheck->signUpCheckFunction($id);

        //pwd1 과 pwd2 의 값이 일치하고 널값이 없다면은 회원가입 환영 창 출력
        if($idCheckresult==0){
          echo "<script>alert('아이디가 이미 존재합니다')</script>";
          echo "<script>history.back();</script>";
        }
        elseif($idCheckresult==1){
          try{
            echo "<script>alert('$name 님 가입을 환영합니다');</script>";
            echo "<a href='../home.php'><<돌아가기</a>";
            $stmt->execute();
          }
          catch(Exception $e){
            echo $e->getMessage();
          }
        }
        break;
    }

    case 'delete':
        $stmt = $dbh->prepare("DELETE FROM account_info WHERE id= :id ");
        $stmt->bindParam(':id',$id);
        $id =$_POST['id'];
        echo $id;
        $stmt->execute();
        echo "삭제 완료";
}
?>
