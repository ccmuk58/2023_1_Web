<!DOCTYPE HTML>
<html>

<head>
    <title>장바구니</title>
    <link rel="stylesheet" href="../css/showcartStyle.css">
</head>

<body>
    <?php
session_start();
$email = $_SESSION['z_uid'];
include_once('dbconn.php');
$sql = "select * from cart where email = '$email'";
$result = $conn->query($sql);
if(!$result)
    die("cart 테이블 검색 오류");
?>

    <div id="navbar">
        <div class='logobox'>
        <a href="../index.php" class='logo'>Z</a>
    </div>
    <h1> Z-Burger 장바구니 </h1>
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
</body>

</html>
