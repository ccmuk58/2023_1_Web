<link rel="stylesheet" href="../css/style.css"><!-- 네비게이션바 style.php css적용-->
<link rel="stylesheet" href="../css/showcartStyle.css"><!-- addcart.php css적용-->

<?php
session_start();
$email = $_SESSION['pz_uid'];
include_once('dbconn.php');
$sql = "select * from cart where email = '$email'";
$result = $conn->query($sql);
if(!$result)
    die("cart 테이블 검색 오류");
?>

<div id="navbar">
    <a href="../index.php" id="logo">
        <p>Z<p>
    </a>
</div>
<div id="container">
    <form action="removecart.php" method="post">
        <table id="cart">
            <tr>
                <th></th>
                <th>NO</th>
                <th>Menu</th>
                <th>Size</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <?php
            $no = 0;
            while($row = $result->fetch_assoc()){
                $no++;
                ?>
            <tr>
                <td>
                    <input type="checkbox" name="chk[]" value="<?=$row['food']?>@<?=$row['size']?>">
                </td>
                <td><?=$no?></td>
                <td><?=$row['food']?></td>
                <td><?=$row['size']?></td>
                <td><?=$row['qty']?></td>
                <td><?=$row['total']?></td>
            </tr>
            <?php } ?>
        </table>
        <input type="submit" value="Delete Cart" class="btn">
    </form>
    <button class="btn" id="orderBtn" onclick="location.href='ordernew.php'">Order</button>
</div>