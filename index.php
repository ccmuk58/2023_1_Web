<!doctype html>
<html>

<head>
    <title>Z Burger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- -------- fullpage.js -------- -->
    <script src="js/jquery.fullpage.min.js"></script>
    <link href="js/jquery.fullpage.min.css" rel="stylesheet">

    <!-- -------- bootstrap -------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- -------- NAVER API -------- -->
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=o4tn68jcjx"></script>

    <link rel="stylesheet" href="css/style.css">

    <script>
        // fullpage.js 초기 설정  
        $(document).ready(function() {
            $('#fullpage').fullpage({
                // 앵커 설정
                anchors: ['title', 'menu', 'locate', 'info'],
                // 스크롤 속도 설정
                scrollingSpeed: 700,
                // 세로 스크롤 순환 설정
                loopTop: false,
                loopBottom: false,
                // 슬라이드 네비게이션 표기 설정
                slidesNavigation: true,
                // 가로 슬라이드 루프 설정
                loopHorizontal: false
            });
        });
    </script>

</head>

<body>
    <?php
    include_once('./innerPage/dbconn.php');
	session_start();
	$login = false;
	if (isset($_SESSION['pz_uid'])) {
		$email = $_SESSION['pz_uid'];
		$uname = $_SESSION['pz_uname'];
		$login = true;
		// // 로그인한 사용자의 장바구니 담긴 물품 개수를 알아보자
		// $sql = "select count(*) pnum from cart where email = '$email'";
		// $result = $conn->query($sql);
		// $row = $result->fetch_assoc();
	}
    ?>
    <!-- 상단 네비게이션 바 -->
    <div id="navbar">
        <a href="./index.php" id="logo">
            <p>Z<p>
        </a>
        <ul id="menu">
            <li><a class="menuLink" href="#title">Title</a></li>
            <li><a class="menuLink" href="#menu">Menu</a></li>
            <li><a class="menuLink" href="#locate">Locate</a></li>
            <li><a class="menuLink" href="#info">Info</a></li>

            <?php 
		if(!$login){ ?>
            <li><a class="menuIconLink" href="innerPage/login.html"><img src="./img/login.jpg"></a></li>
            <?php } else {?>
            <li><a class="menuIconLink" href="innerPage/showcart.php"><img src="./img/cart.jpg"></a></li>
            <li><a class="menuIconLink" href="innerPage/showorder.php"><img src="./img/showorder.png"></a></li>
            <li><a class="menuIconLink" href="innerPage/account.php"><img src="./img/setting.jpg"></a></li>
            <li><a class="menuIconLink" href="innerPage/logout.php"><img src="./img/logout.jpg"></a></li>
            <?php } ?>
        </ul>
    </div>

    <!-- 각 본문 섹션 -->
    <div id="fullpage">
        <div class="section" id="titleSection">
            <?php include('./innerPage/title.html'); ?>
        </div>

        <div class="section" id="menuSection">
            <?php include('./innerPage/menu.php'); ?>
        </div>

        <div class="section" id="locateSection">
            <?php include('./innerPage/locate.html'); ?>
        </div>

        <div class="section" id="infoSection">
            <?php include('./innerPage/info.html'); ?>
        </div>

    </div>
</body>

</html>