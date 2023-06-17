<!DOCTYPE html>
<html>

<head>
    <title>Z-Burger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/showorderStyle.css">
</head>

<body>
    <div class='logobox'>
        <a href="../index.php" class='logo'>Z</a>
    </div>
    <h1>주문내역</h1>
    <table id="list">
        <tr>
            <th>주문번호</th>
            <th>주문일자</th>
            <th>주소</th>
            <th>주문금액</th>
            <th>배달료</th>
            <th>결제금액</th>
        </tr>
        <?php
    # porder 테이블에서 레코드 검색하고 출력하기
    session_start();
    $email = $_SESSION['pz_uid'];
    include_once('dbconn.php');
    # 주문날짜의 내림차순으로 정렬해서 검색
    $sql = "select * from zorder where email = '$email' order by orddate desc";
    $result = $conn->query($sql);
    if(!$result) die('주문정보 테이블 검색 오류 : '.$conn->error);
    if($result->num_rows > 0) {
        $no = 1;
    ?>

        <?php
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><a href="showorddet.php?ordno=<?=$row['ordno']?>"><?=$row['ordno']?></a></td>
            <td><?=$row['orddate']?></td>
            <td><?=$row['address']?></td>
            <td><?=$row['amount']?></td>
            <td><?=$row['delamt']?></td>
            <td><?=$row['total']?></td>
        </tr>
        <?php } // while() ?>
        <?php } // if() ?>
    </table>

    <p class="copyright">&copy; 2023 Daejin University / Computer Science &amp; Engineering</p>
</body>

</html>