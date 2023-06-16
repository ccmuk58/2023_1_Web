<?php
function uploadfile() {
    if(!isset($_FILES['att']) || $_FILES['att']['error'] !=0) {
        return null;
    }
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES['att']['name']);
    $upload_ok = 1;
    
    if($_FILES['att']['size'] > 25000000) { // 파일 크기가 25MB 초과시
        echo "오류: 파일 크기가 25MB를 초과하였습니다.";
        $upload_ok = 0;
    }

    if($upload_ok == 0) {
        echo "파일업로드를 종료합니다.";
        return null;
    }
    else {
        if(move_uploaded_file($_FILES['att']['tmp_name'], $target_file)) {
            echo "파일 ".basename($_FILES['att']['name'])."을 업로드하였습니다.";
            return basename($_FILES['att']['name']);
        }
        else {
            echo "임시 파일을 이동 중에 오류가 발생하였습니다." . $target_file;
            return null;
        }
    }
}
session_start();
include_once('dbconn.php');
$email = $_SESSION['pz_uid'];
$wdate = $_POST['wdate'];
$title = $_POST['title'];
$note = $_POST['note'];

$att = uploadFile(); 
$sql = "insert into board(email,wdate,title,content,attachment)
        values('$email','$wdate','$title','$note','$att')";
if($conn->query($sql)) {
    echo "<script>alert('게시글이 저장되었습니다.'); location.href='writeboard2.php'</script>";
}
else {
    echo "게시글 저장에 오류가 발생했습니다. <br>";
    echo $conn->error;
}