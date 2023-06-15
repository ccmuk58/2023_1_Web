<?php

# Database Connection
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "burger";
$conn = new mysqli($server, $user, $passwd, $dbname);
#var_dump($conn);
if($conn->connect_error){# -> 객체 안에 있는 변수 지정
    die("데이터베이스 연결 오류 : ".$conn->error); # 메시지 처리는 하고 php진행은 멈춤
}
# else echo "데이터베이스 연결 성공";
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

?>