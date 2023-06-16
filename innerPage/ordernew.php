<!DOCTYPE HTML>
<html>
    !DOCTYPE html>
<html>
<head>
    <title>피자배달 주문</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/ordernewStyle.css">
    </head>
    <body>
        <?php
        session_start();
        include_once('dbconn.php');
        $uname = $_SESSION['pz_uname'];
        $email = $_SESSION['pz_uid']
        #새로운 주문 번호 생성. 현재 마지막 주문번호를 가져와서 순번을 하나씩 증가시킴
        $sql = "select max(ordno) maxordno from porder";
        $result = $conn->query($sql);
        $row = $result-> fetch_assoc();
        #주문번호 형태를 년원일-순번으로 정함
        $today = date('Y').date('m').date('d'); // ex)20230617
        
        
        
        ?>
    </body>
</html>



