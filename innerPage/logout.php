<?php
session_start();
session_destroy();   # 세션 데이터 삭제
header('location: ../index.php');
?>