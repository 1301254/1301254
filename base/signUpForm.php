<!DOCTYPE html>
<html>
<head>
<title>sign up page</title>
<meta name="name" content="content">
<script type="text/javascript">

</script>
</head>
<body>

<form name="join" action="./process.php?mode=insert"  method="post" >
 <h1>input your information</h1>
 <table border="1">
  <tr>
   <td>ID</td>
   <td><input type="text" size="30" name="id">
   <td>
    <a href="#" onclick="window.open('signUpCheck.php?id='+document.join.id.value, 'IdCheck', 'top=100px, left=100px, height=800px, width=800px')">아디</a>
   </td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type="password" size="30" name="pwd" required=""></td>
  </tr>
  <tr>
   <td>Confirm Password</td>
   <td><input type="password" size="30" name="pwd2" required=""></td>
  </tr>
  <tr>
   <td>name</td>
   <td><input type="text" size="12" maxlength="10" name="name" required=""></td>
  </tr>
  <tr>
   <td>address</td>
   <td><input type="text" size="40" name="addr" required=""></td>
  </tr>
  <tr>
   <td>sex</td>
   <td><input type="radio" name="sex" value="male">남자 <input type="radio" name="sex" value="female">여자
   </td>
  </tr>
  <tr>
   <td>birth day</td>
   <td><input type="date" size="6" maxlength="8" name="birthday" required=""></td>
  </tr>
  <tr>
   <td>e-mail</td>
   <td><input type="email" size="30" name="email" required=""></td>
  </tr>
  <tr>
   <td>hint</td>
   <td>질문 : <select name="question"><option value="teacher">학창시절 가장 기억에 남는 선생님</option>
                                      <option value="friend">가장 친한 친구</option>
                                      <option value="treasure">가장 소중한 물건</option>
       </select><br>
       답  &nbsp;&nbsp;&nbsp;: <input type="text" name="response" size="8">
   </td>
  </tr>
 </table>
 <input type=submit name="check" value="회원가입" >

</form>
</body>
</html>
