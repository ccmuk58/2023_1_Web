<html>
<head>
	<link rel="stylesheet" href="../css/addcartStyle.css"><!-- addcart.php css적용-->
	<link rel="stylesheet" href="../css/style.css"><!-- 네비게이션바 style.php css적용-->
	
</head>

<body>
	<?php $menutype = $_GET['menutype']; ?>

	<div id="navbar">
	  <a href="../index.php" id="logo"><p>Z<p></a>
	  <ul id="menu">
	</ul>
</div>

	<div class="cartbody">
		<form class="container" action="addcartproc.php" method="post">
					<?php
					if ($menutype == "burger") {
						$name = $_GET['burger'];
						$single = $_GET['singlemenu'];
						$set = $_GET['setmenu']; ?>

						<div class="row" id="menutitle">
							<?= $name ?>
						</div>
						<div class="row" id="menuimg">
							<img src='../img/<?= trim($name) ?>.jpg'>
						</div>
						<div class="row"  id="menuoption">
							<input type="radio" name="size" value="single" checked>싱글(<?= $single ?>)<input type="radio" name="size" value="set">세트(<?= $set ?>)<input type="text" name="singleprice" value="<?= $single ?>" hidden>
							<input type="text" name="setprice" value="<?= $set ?>" hidden>

						</div>
						<div class="row" id="menuqty">
							<input type="number" name="qty" value="1" min="1" max="10">
						</div>
				<?php
					} elseif ($menutype == "beverage") {
						$name = $_GET['beverage'];
						$small = $_GET['small'];
						$large = $_GET['large']; ?>
						<div class="row" id="menutitle">
							<?= $name ?>
						</div>
						<div class="row" id="menuimg">
							<img src='../img/<?= trim($name) ?>.jpg'>
						</div>
						<div class="row" id="menuoption">
							<input type="radio" name="size" value="small" checked>S(<?= $small ?>)
							<input type="radio" name="size" value="large">L(<?= $large ?>)
							<input type="text" name="small" value="<?= $small ?>" hidden>
							<input type="text" name="large" value="<?= $large ?>" hidden>
						</div>
						<div class="row" id="menuqty">
							<input type="number" name="qty" value="1" min="1" max="10">
						</div>

				<?php
					} elseif ($menutype == "snack") {
						$name = $_GET['snack'];
						$price = $_GET['price']; ?>
						<div class="row" id="menutitle">
							<?= $name ?>
						</div>
						<div class="row" id="menuimg">
							<img src='../img/<?= trim($name) ?>.jpg'>
						</div>
						<div class="row" id="menuoption">
							<input type="radio" name="price" value="<?= $price ?>" checked>가격(<?= $price ?>)
						</div>
						<div class="row" id="menuqty">
							<input type="number" name="qty" value="1" min="1" max="10">
						</div>
						<?php
					} ?>

				<input type="text" name="menutype" value="<?= $menutype ?>" hidden>
				<input type="text" name="name" value="<?= $name ?>" hidden>
				<div class="row">
					<input type="submit" value="Put In" class="btn">
				</div>
		</form>
	</div>
</body>
</html>