<!DOCTYPE HTML>
<html>
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/menuStyle.css">
</head>
<body>
    <?php
    include_once('dbconn.php');
    ?>
    <div class="slide" id="burgermenu">
        <?php
        $sql = 'select * from burgermenu';
        $result = $conn -> query($sql);
        if($result->num_rows > 0) {    // 검색된 레코드가 있으면 
                while($row = $result->fetch_assoc()) {  // 레코드 한 개를 연관배열 형태로 가져옴 
        ?>
        <div class="card card-1">
                <a href="addcart.php?pizza=<?=$row['name']?>
                        &singlemenu=<?=$row['singlemenu']?>&setmenu=<?=$row['setmenu']?>">
                        <img src="images/<?= $row['photo'] ?>"></a>
                <div class="">
                    <h3><?= $row['name'] ?></h3>
                    <h3><?= $row['singlemenu'] ?></h3>
                    <h3><?= $row['setmenu'] ?></h3>
                </div>
        </div>
        <?php  } 
        }
        else echo "등록된 상품이 없습니다.";
        ?>
    </div>
    <div class="slide" id="beveragemenu">
        <?php
        $sql = 'select * from beveragemenu';
        $result = $conn -> query($sql);
        if($result->num_rows > 0) {    // 검색된 레코드가 있으면 
                while($row = $result->fetch_assoc()) {  // 레코드 한 개를 연관배열 형태로 가져옴 
        ?>
        <div class="card card-1">
                <a href="addcart.php?pizza=<?=$row['name']?>
                        &small=<?=$row['small']?>&large=<?=$row['large']?>">
                        <img src="images/<?= $row['photo'] ?>"></a>
                <div class="">
                    <h3><?= $row['name'] ?></h3>
                    <h3><?= $row['small'] ?></h3>
                    <h3><?= $row['large'] ?></h3>
                </div>
        </div>
        <?php  } 
        }
        else echo "등록된 상품이 없습니다.";
        ?>
    </div>
    <div class="slide" id="snackmenu">
        <?php
        $sql = 'select * from snackmenu';
        $result = $conn -> query($sql);
        if($result->num_rows > 0) {    // 검색된 레코드가 있으면 
                while($row = $result->fetch_assoc()) {  // 레코드 한 개를 연관배열 형태로 가져옴 
        ?>
        <div class="card card-1">
                <a href="addcart.php?pizza=<?=$row['name']?>
                        &price=<?=$row['price']?>">
                        <img src="images/<?= $row['photo'] ?>"></a>
                <div class="">
                    <h3><?= $row['name'] ?></h3>
                    <h3><?= $row['price'] ?></h3>
                </div>
        </div>
        <?php  } 
        }
        else echo "등록된 상품이 없습니다.";
        ?>
    </div>
</body>
    
</html>
