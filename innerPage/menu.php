<link rel="stylesheet" href="css/menuStyle.css">
<script src="js/menuscript.js"></script>

<div class = "menubody">
    <div class = 'menubar'>
        <h3 class = "bar">&lt;&nbsp;</h3>
        <h3 class = 'menutype highlight' id = 'burger' onclick="highlight('burger');showClass('burgermenu')">Burger</h3>
        <h3 class = "bar">&nbsp;|&nbsp;</h3>
        <h3 class = 'menutype' id = 'beverage' 
        onclick="highlight('beverage'); showClass('beveragemenu')">Beverage</h3>
        <h3 class = "bar">&nbsp;|&nbsp;</h3>
        <h3 class = 'menutype' id = 'snack' 
        onclick="highlight('snack'); showClass('snackmenu')">Snack</h3>
        <h3 class = "bar">&nbsp;&gt;</h3>
    </div>


    <div id="menus">
        <div class="menu" id="burgermenu">
            <?php
            $sql = 'select * from burgermenu';
            $result = $conn -> query($sql);
            if($result->num_rows > 0) {    // 검색된 레코드가 있으면 
                    while($row = $result->fetch_assoc()) {  // 레코드 한 개를 연관배열로 가져오기 
            ?>
            <div class="card">
                    <a href="innerPage/addcart.php?menutype=burger&burger=<?=$row['name']?>
                            &singlemenu=<?=$row['singlemenu']?>&setmenu=<?=$row['setmenu']?>&photo=<?=$row['photo']?>">
                            <img src="img/<?= $row['photo'] ?>"></a>
                    <div class="foodText">
                        <h3 class = "foodname"><?= $row['name'] ?></h3>
                        <h3>Single&nbsp;&nbsp;&nbsp;<?= $row['singlemenu'] ?>&#8361;</h3>
                        <h3>Set&nbsp;&nbsp;&nbsp;<?= $row['setmenu'] ?>&#8361;</h3>
                    </div>
            </div>
            <?php  } 
            }
            else echo "등록된 상품이 없습니다.";
            ?>
        </div>

        <div class="menu hidden" id="beveragemenu">
            <?php
            $sql = 'select * from beveragemenu';
            $result = $conn -> query($sql);
            if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
            ?>
            <div class="card">
                    <a href="innerPage/addcart.php?menutype=beverage&beverage=<?=$row['name']?>
                            &small=<?=$row['small']?>&large=<?=$row['large']?>&photo=<?=$row['photo']?>">
                            <img src="img/<?= $row['photo'] ?>"></a>
                    <div class="foodText">
                        <h3 class = "foodname"><?= $row['name'] ?></h3>
                        <h3><?= $row['small'] ?>&#8361;</h3>
                        <h3><?= $row['large'] ?>&#8361;</h3>
                    </div>
            </div>
            <?php  } 
            }
            else echo "등록된 상품이 없습니다.";
            ?>
        </div>

        <div class="menu hidden" id="snackmenu">
            <?php
            $sql = 'select * from snackmenu';
            $result = $conn -> query($sql);
            if($result->num_rows > 0) {     
                    while($row = $result->fetch_assoc()) {
            ?>
            <div class="card">
                    <a href="innerPage/addcart.php?menutype=snack&snack=<?=$row['name']?>
                            &price=<?=$row['price']?>&photo=<?=$row['photo']?>">
                            <img src="img/<?= $row['photo'] ?>"></a>
                    <div class="foodText">
                        <h3 class = "foodname"><?= $row['name'] ?></h3>
                        <h3><?= $row['price'] ?>&#8361;</h3>
                    </div>
            </div>
            <?php  } 
            }
            else echo "등록된 상품이 없습니다.";
            ?>
        </div>
    </div>
</div>

<script>
    var login = <?php echo $login ? 'true' : 'false'; ?>;

    document.addEventListener('DOMContentLoaded', function() {
        if (!login) {
            var links = document.querySelectorAll('.card a');
            for (var i = 0; i < links.length; i++) {
                links[i].href = 'login.html';
                links[i].addEventListener('click', function(event) {
                    event.preventDefault();
                    alert('비로그인 상태에서는 메뉴를 주문할 수 없습니다.');
                });
            }
        }
    });
</script>


