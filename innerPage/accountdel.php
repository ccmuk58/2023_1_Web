<?php
# 0) 세션 처리
# 1) DB 연결하기
# 2) 세션 데이터에서 아이디 가져오기
# 3) DELETE SQL 구문 작성하기 delete from member where ...
# 4) SQL 실행하고 확인하기
# 5) 세션데이터 삭제하기
session_start();
include_once('dbconn.php');

$email = $_SESSION['z_uid'];
$sql = "delete from member where email='$email'";
if($conn->query($sql)) {
    session_destroy();
    echo "<script>alert('회원탈퇴 처리하였습니다')</script>";
    echo "<script>location.replace('../index.php')</script>";
}
else {
    echo "<script>alert('회원탈퇴 처리에 오류가 있습니다.')</script>";
    echo "<script>location.replace('../index.php')</script>";
}