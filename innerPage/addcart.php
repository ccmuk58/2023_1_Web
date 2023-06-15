<link rel="stylesheet" href="../css/style.css"><!-- 네비게이션바 style.php css적용-->
<link rel="stylesheet" href="../css/addcartStyle.css"><!-- addcart.php css적용-->


<?php
# 세션을 통해 로그인 상태 여부를 확인, 아니라면 에러 출력후 index로 돌아감
/*session_start();
if(!isset($_SESSION['uid'])){
    echo "<script>alert('로그인되어있지 않습니다.')</script>";
    echo "<script>history.go(-1)</script>";
}*/

$menutype = $_GET['menutype'];

?>


<div id="navbar">
    <a href="" id="logo">Z</a>
</div>

<div class = "cartbody">
    <form action="addcartproc.php" method="post">
        <br><br><br>
        <div class="row">
            <div class="col-75">
                <?php
                if($menutype == "burger"){
                    $name = $_GET['burger'];
                    $single = $_GET['singlemenu'];
                    $set = $_GET['setmenu'];?>
                    <div class="col-25">
                        <?=$name;?>
                        </div>
                        <div class="col-75">
                            <input type="radio" name="set" value = "single" checked>싱글(<?=$single?>)
                            <input type="radio" name="set" value = "set">세트(<?=$set?>)
                            <input type="text" name="single" value="<?=single?>"hidden>
                            <input type="text" name="set" value="<?=set?>"hidden>
                         </div>
                         <?php
                }
                elseif($menutype == "beverage"){
                    $name = $_GET['name'];
                    $small = $_GET['small'];
                    $large = $_GET['large'];
                }
                elseif($menutype == "snack"){
                    $name = $_GET['name'];
                    $price = $_GET['price'];
                }

?>
            </div>



        <div class="row">
            <input type="submit" value="Put In" class="btn">
        </div>

</div>
