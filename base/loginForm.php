<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인 하기</title>
    <link rel = "stylesheet" type = "text/css" href = "loginForm.css">
  </head>
  <body>
    <div class="loginForm">
        <form method="post" name="" action="loginCheck.php">
           <div class="box">
            <input type="text" class="iText" name="user_id" value="ID를 입력하세요" onfocus="if(this.value =='ID를 입력하세요') this.value='';">
            <br>
            <input type="password" name="user_pw" class="iText">
            <br>
            <p>
              <span class="fleft"><input type="checkbox" id=""><label for=""> 아이디 저장&nbsp; </label></span>
              <span class="fright"><a href="" style='text-decoration:none'>아이디 찾기</a>&nbsp;|&nbsp;&nbsp;<a href="" style='text-decoration:none'>비밀번호 찾기</a>
              &nbsp;|&nbsp;&nbsp;<a href="signUpForm.php" style='text-decoration:none'>회원가입</a></span>
            </p>
          </div>
          <input class="loginBtn" type="submit" name="" value="로그인"><p>

        </form>
      </div>
  </body>
</html>
