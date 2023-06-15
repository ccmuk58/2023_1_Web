<link rel="stylesheet" href="../css/style.css"><!-- 네비게이션바 style.php css적용-->
<link rel="stylesheet" href="../css/addcartStyle.css"><!-- addcart.php css적용-->

<!-- 상단 네비게이션 바 -->
<div id="navbar">
    <a href="" id="logo">Z</a>
</div>

<div class = "cartbody">
    <form action="addcartproc.php" method="post">
        <br><br><br>
        <div class="row">
            <div class="col-75">
                
            </div>



        <div class="row">
            <input type="submit" value="Put In" class="btn">
        </div>

</div>




<?php
# 세션을 통해 로그인 상태 여부를 확인, 아니라면 에러 출력후 index로 돌아감
session_start();
if(!isset($_SESSION['uid'])){
    echo "<script>alert('로그인되어있지 않습니다.')</script>";
    echo "<script>history.go(-1)</script>";
}




?>