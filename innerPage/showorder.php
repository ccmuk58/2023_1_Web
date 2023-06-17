<!DOCTYPE html>
<html>
<head>
    <title>Z-Burger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
                text-align: center;
            }
            #pizza {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }
            #pizza td, #pizza th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #pizza tr:nth-child(even){background-color: #f2f2f2;}
            #pizza tr:hover {background-color: #ddd;}
            #pizza th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
        #pizza img {
            width: 120px;
            height: 80px;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 70%;
            opacity: 0.9;
            margin-top: 10px;
        }
        .btn:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
	<h1>주문내역</h1>
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
    <table id="pizza">
        <tr>
            <th>주문번호</th><th>주문일자</th><th>주소</th><th>주문금액</th>
            <th>배달료</th><th>결제금액</th>
        </tr>
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
    </table>
    <?php } // if() ?>
</body>
</html>

