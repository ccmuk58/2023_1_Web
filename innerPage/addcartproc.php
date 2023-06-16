<?php
# 세션 시작
session_start();
# DB 연결
include_once('dbconn.php');
# 데이터 가져오기
$email = $_SESSION['pz_uid'];
$menutype = $_POST['menutype'];
$food = $_POST['name'];
$size = $_POST['size'] ?? '';
$qty = $_POST['qty'];
$price = 0;

if ($menutype == "burger") {
	if ($size == "single")
		$price = $_POST['singleprice'];
	else
		$price = $_POST['setprice'];
} elseif ($menutype == "beverage") {
	if ($size == "small")
		$price = $_POST['small'];
	else
		$price = $_POST['large'];
} elseif ($menutype == "snack") {
	$price = $_POST['price'];
}
;
# 총합 금액
$total = $qty * $price;
# INSERT SQL 작성하고 실행

$sql = "insert into cart values('$email','$food','$size',$qty, $price, $total)";
if ($conn->query($sql)) {
	echo "<script> let yesno;
            yesno = confirm('장바구니로 이동하시겠습니까?');
            if(yesno) location.href='showcart.php'; 
            else location.href='../index.php#menu';
            </script>"; // 장바구니 이동에 yes시 showcart로 이동, 아니라면 index로 이동
} else
	echo "장바구니 등록 오류" . $conn->error;
$conn->close(); // 연결해제
?>