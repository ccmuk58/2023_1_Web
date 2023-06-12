<!DOCTYPE html>
<html>
<head>
    <title>Burger Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
            body {
              background: yellow;
              text-align: center;
            }
            h1 {
                text-align: center;
                padding: 32px;
            }
            .card {
              background: #fff;
              border-radius: 2px;
              display: inline-block;
              height: 540px;
              margin: 10px;
              /*position: relative;*/
              width: 300px;
                border: 1px solid #999;
            }
            img {
                width: 100%;
                height: 400px;
                margin-top: 0;
            }
            .card-1 {
              box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
              /*transition: all 0.3s cubic-bezier(.25,.8,.25,1);*/
                overflow: hidden;
            }
            .card-1 img {
                object-fit: cover;
                display: block;
                width: 100%;
                height: 60%;
                transition: .3s transform ease-out;
            }
            .card-1:hover img{
              /*box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);*/
              transform: scale(1.15);
            }
            .card-1:hover h3 {
                color: navy;
                text-shadow: 1px 1px 1px darkorange;
                border-bottom: 1px dotted gray;
            }
            .card-1 .text {
                margin-top: 50px;
            }
            /* Add a black background color to the top navigation */
            .topnav {
                background-color: #333;
                overflow: hidden;
            }
 
            /* Style the links inside the navigation bar */
            .topnav a {
              float: left;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }
 
            /* Change the color of links on hover */
            .topnav a:hover {
              background-color: #ddd;
              color: black;
            }
 
            /* Add a color to the active/current link */
            .topnav a.active {
              background-color: #4CAF50;
              color: white;
            }
 
            /* Right-aligned section inside the top navigation */
            .topnav-right {
              float: right;
            }        
        </style>
    </head>
    <body>
        <?php
        # 세션 데이터 확인하고 로그인 상태 여부 체크하기
        session_start();
        $login = false;    # 초기값으로 생성해 둠
        if (isset($_SESSION['pz_uid'])) {
            $email = $_SESSION['pz_uid'];
            $uname = $_SESSION['pz_uname'];
            //echo "$uname 환영합니다.";
            $login = true;
            // 로그인한 사용자의 장바구니 담긴 물품 개수를 알아보자
            include_once('dbconn.php');
            $sql = "select count(*) pnum from cart where email = '$email'";
            $result = $conn->query($sql);  // 개수를 가지는 레코드 1개 있음 
            $row = $result->fetch_assoc();
        }
        ?>
        <div class="topnav">
            <?php
            if ($login) {
            ?>
            <a href="#"><?= $uname ?> 환영합니다.</a>
            <a href="signout.php">로그아웃</a>
            <a href="signmodify.php">회원정보수정</a>
            <a href="signdel.php">회원탈퇴</a>
            <a href="showcart.php">장바구니(<?=$row['pnum']?>)</a>
            <a href="showorder.php">주문정보</a>
            <a href="writeboard.php">글작성</a>
            <?php } else { ?>
            <a href="signup.html">회원가입</a>
            <a href="signin.html">로그인</a>
            <?php } ?>
        </div>
        <h1>Welcome to the best Pizza Mall</h1>
        <?php
        # mypizza 테이블의 레코드 검색해서 출력하기 
        include_once('dbconn.php');
        $sql = "select * from mypizza";
        $result = $conn->query($sql);  // select 실행으로 검색된 레코드 집합을 반환
        if($result->num_rows > 0) {    // 검색된 레코드가 있으면 
            while($row = $result->fetch_assoc()) {  // 레코드 한 개를 연관배열 형태로 가져옴 
        ?>
        <div class="card card-1">
            <a href="addcart.php?pizza=<?=$row['name']?>
                    &large=<?=$row['large']?>&small=<?=$row['small']?>">
                    <img src="images/<?= $row['photo'] ?>"></a>
            <div class="">
                <h3><?= $row['name'] ?></h3>
                <h3><?= $row['large'] ?></h3>
                <h3><?= $row['small'] ?></h3>
            </div>
        </div>
        <?php  } 
        }
        else echo "등록된 상품이 없습니다.";
        ?>
    </body>
</html>

