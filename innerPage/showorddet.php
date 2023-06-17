<!DOCTYPE html>
<html>

<head>
    <title>Z-Burger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/showorddetStyle.css">

</head>

<body>
    <?php
    $ordno=$_GET['ordno'];
    ?>
    <div class='logobox'>
        <a href="../index.php" class='logo'>Z</a>
    </div>
    <h1>주문번호 : <?=$ordno?></h1>
    <?php
    # 주문정보 페이지에서 선택한 특정 주문의 물품 내역을 검색하고 출력하기
    $ordno = $_GET['ordno'];
    include_once('dbconn.php');
    $sql = "select * from orditem where ordno = '$ordno'";
    $result = $conn->query($sql);
    if(!$result) die('주문상세내역 검색 오류 : '.$conn->error);
    if($result->num_rows > 0) {
    ?>
    <table id="list">
        <tr>
            <th>No</th>
            <th>피자</th>
            <th>사이즈</th>
            <th>수량</th>
            <th>가격</th>
            <th>주문금액</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?=$row['seq']?></td>
            <td><?=$row['pizzaname']?></td>
            <td><?=$row['size']?></td>
            <td><?=$row['qty']?></td>
            <td><?=$row['price']?></td>
            <td><?=($row['price'])*($row['qty'])?></td>
        </tr>
        <?php } // while() ?>
        <?php } ?>
    </table>
</body>

</html>