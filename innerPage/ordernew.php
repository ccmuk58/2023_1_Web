<!DOCTYPE HTML>
<html>

<head>
    <title>Z-Burger Delivery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/ordernewStyle.css">
</head>

<body>
    <?php
        session_start();
        include_once('dbconn.php');
        $uname = $_SESSION['pz_uname'];
        $email = $_SESSION['pz_uid'];
        #새로운 주문 번호 생성. 현재 마지막 주문번호를 가져와서 순번을 하나씩 증가시킴
        $sql = "select max(ordno) maxordno from zorder";
        $result = $conn->query($sql);
        $row = $result-> fetch_assoc();
        #주문번호 형태를 년원일-순번으로 정함
        $today = date('Y').date('m').date('d'); // ex)20230617
        #zorder 테이블에서 검색한 가장 큰 주문번호의 년월일 가져오기
        $prefix = substr($row['maxordno'],0,strpos($row['maxordno'
        ],'-'));
        if($today == $prefix){ //오늘 날짜로 이미 주문한 내역이 존재
            $no = substr($row['maxordno'], strpos($row['maxordno'],'-')+1,2);
        $no++;  
        if($no>1 && $no <10) $ordno = $prefix."-0".$no;
        else $ordno = $prefix . "-" . $no;
        }
        else //오늘 첫 주문
            $ordno = $today."-01"; // 20230607-01
        #장바구니에 담긴 음식들의 총 가격을 가져오기
        $sql = "select sum(total) amount from cart where email = '$email'";
        $result = $conn -> query($sql); //select 실행 결과는 1건 나옴
        $row = $result -> fetch_assoc();
        $amount = $row['amount']; //sum(price) 결과 값을 가져옴        
        ?>
    <div class='maincontain'>
        <div class='logobox'>
            <a href="../index.php" class='logo'>Z</a>
        </div>
        <h2>Z-Burger Order</h2>
        <p>장바구니에 담긴 메뉴를 주문합니다</p>
        <hr>
        <div class="container">
            <form action="ordernewproc.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">주문자</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="uname" value="<?=$uname?>" readonly>
                        <input type="text" name="email" value="<?=$email?>" hidden>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">주문번호</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="ordno" value="<?=$ordno?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">배달주소</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="address" placeholder="Address..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">주문금액</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="amount" value="<?=$amount?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">배달료</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="delamt" value=5000 readonly>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="주문하기">
                </div>
            </form>
        </div>
        <p>&copy; 2023 Daejin University / Computer Science &amp; Engineering</p>
    </div>
</body>

</html>