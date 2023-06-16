<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                    text-align: left;
                }
            #burger {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 70%;
                margin-left: auto;
                margin-right: auto;
                }
            #burger td, #burger th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #burger tr:hover {background-color: #ddd;}
            .btn {
                background-color: #E8BB44;
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
        <h1>Shoppingcart List</h1>
        <?php
        session_start();
        $email = $_SESSION['pz_uid'];
        include_once('dbconn.php');
        $sql = "select * from cart where email = '$email'";
        $result = $conn->query($sql);
        if(!$result)
            die("cart 테이블 검색 오류");
        ?>
        <form action="removecart.php" method="post">
        <table id="burger">
            <tr>
                <th></th><th>NO</th><th>Burger</th><th>Size</th><th>Quantity</th><th>Price</th>
            </tr>



</html>