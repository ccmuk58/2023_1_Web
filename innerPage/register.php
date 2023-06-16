<?php
# 회원가입 처리 php파일
# 1) 데이터베이스 연결
# 2) 회원가입 데이터 읽어오기
# 3) INSERT SQL 명령문 작성하기
# 4) SQL 실행하고 결과 확인하기

include_once('dbconn.php'); # dbconn.php파일의 내용을 읽어서 가져온다
$email = $_POST['email'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$telno = $_POST['telno'];
$regdate = date('Y/m/d');
$sql = "insert into member values('$email','$uname','$pwd', '$telno ','$regdate')";
if($conn->query($sql)) {
    echo "<script>alert('Z-Burger에 성공적으로 가입했습니다.')</script>";
    echo "<script>location.replace('../index.php')</script>";
}
else {
    echo "<script>alert('회원가입에 오류가 있습니다.')</script>";
    echo "<script>location.replace('register.html')</script>";
}

?>