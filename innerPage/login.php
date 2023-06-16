<?php
session_start();   # 이 페이지에서 세션 데이터 처리를 하고자 한다.
# 1) DB 연결하기
# 2) 로그인 데이터 읽어오기
# 3) SLECET SQL 구문 작성하기
# 4) SQL 실행하고 확인하기

include_once('dbconn.php');
$email = $_POST['email'];   
$pwd = $_POST['pwd'];

$sql = "select * from member where email = '$email' and pwd = '$pwd'";
$recordset = $conn->query($sql);
#ver_dump($recordset);
if(isset($recordset) && $recordset->num_rows == 1){ // isset() 만약 ()변수가 정상적으로 만들어 져 있다면
    $row = $recordset->fetch_assoc(); # 테이블에서 검색된 레크드 하나를 연관배열로 반환
    $uname = $row['name']; # 컬럼명이 키이므로 컬럼명으로 값을 읽어옴
    # 세션 데이터를 생성
    $_SESSION['pz_uid'] = $email;
    $_SESSION['pz_uname'] = $uname;
    echo "<script>alert('로그인 성공하였습니다.')</script>";
    echo "<script>location.replace('../index.php')</script>";
}
else{
    echo "<script>alert('로그인 아이디 또는 패스워드가 일치하지 않습니다.')</script>";
    echo "<script>location.replace('signin.html')</script>";
}

?>