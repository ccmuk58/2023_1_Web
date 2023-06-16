<?php
include_once('dbconn.php'); # dbconn.php파일의 내용을 읽어서 가져온다

$email = $_POST['email'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$telno = $_POST['telno'];

$sql = "update member set pwd = '$pwd', name = '$uname', telno = '$telno' where email = '$email'";

if($conn->query($sql)) {
    $_SESSION['uname'] = $uname; #변경된 회원명으로 세션 저장
    echo "<script>alert('회원정보수정에 성공했습니다.')</script>";
    echo "<script>location.replace('../index.php')</script>";
}
else {
    echo "<script>alert('회원정보수정에 실패했습니다.')</script>";
    echo "<script>location.replace('../account.php')</script>";
}
?>