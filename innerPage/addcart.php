<link rel="stylesheet" href="../css/style.css"><!-- 네비게이션바 style.php css적용-->
<link rel="stylesheet" href="../css/addcartStyle.css"><!-- addcart.php css적용-->


<?php

$menutype = $_GET['menutype'];

?>


<div id="navbar">
	<a href="" id="logo">Z</a>
</div>

<div class="cartbody">
	<form action="addcartproc.php" method="post">
		<br><br><br>
		<div class="container">
			<div class="row">
				<?php
				if ($menutype == "burger") {
					$name = $_GET['burger'];
					$single = $_GET['singlemenu'];
					$set = $_GET['setmenu']; ?>
					<div class="col-75">
						<?= $name ?>
					</div>
					<div class="col-25">
						<input type="text" name="menutype" value="<?= $menutype ?>" hidden>
						<input type="text" name="name" value="<?= $name ?>" hidden>
						<input type="radio" name="size" value="single" checked>싱글(<?= $single ?>)
						<input type="radio" name="size" value="set">세트(<?= $set ?>)
						<input type="text" name="singleprice" value="<?= $single ?>" hidden>
						<input type="text" name="setprice" value="<?= $set ?>" hidden>

					</div>
					<div class="col-25">
						<input type="number" name="qty" value="1" min="1" max="10">
					</div>
					<?php
				} elseif ($menutype == "beverage") {
					$name = $_GET['beverage'];
					$small = $_GET['small'];
					$large = $_GET['large']; ?>
					<div class="col-75">
						<?= $name ?>
					</div>
					<div class="col-25">
						<input type="radio" name="size" value="small" checked>S(
						<?= $small ?>)
						<input type="radio" name="size" value="large">L(
						<?= $large ?>)
						<input type="text" name="small" value="<?= $small ?>" hidden>
						<input type="text" name="large" value="<?= $large ?>" hidden>
					</div>
					<div class="col-25">
						<input type="number" name="qty" value="1" min="1" max="10">
					</div>
					<?php
				} elseif ($menutype == "snack") {
					$name = $_GET['snack'];
					$price = $_GET['price']; ?>
					<div class="col-75">
						<?= $name ?>
					</div>
					<div class="col-25">
						<input type="radio" name="price" value="price" checked>가격(
						<?= $price ?>)
					</div>
					<div class="col-25">
						<input type="number" name="qty" value="1" min="1" max="10">
					</div>
					<?php
				} ?>
			</div>
			<div class="row">
				<input type="submit" value="Put In" class="btn">
			</div>
		</div>
	</form>
</div>