<!doctype html>
<html>

<head>
	<title>Z Burger</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- -------- fullpage.js -------- -->
	<script src="js/jquery.fullpage.min.js"></script>
	<link href="js/jquery.fullpage.min.css" rel="stylesheet">

	<!-- -------- bootstrap -------- -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
	<!-- -------- NAVER API -------- -->
	<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=o4tn68jcjx"></script>
	
	<link rel="stylesheet" href="css/style.css">

	<script>
		// fullpage.js 초기 설정
		$(document).ready(function () {
			$('#fullpage').fullpage({
				// 앵커 설정
				anchors:['title', 'menu', 'locate', 'info'], 
				// 스크롤 속도 설정
				scrollingSpeed: 700,
				// 세로 스크롤 순환 설정
				loopTop: false,
				loopBottom: false,
				// 슬라이드 네비게이션 표기 설정
				slidesNavigation: true,
				// 가로 슬라이드 루프 설정
				loopHorizontal: false
			});
		});
	</script>

</head>

<body>
	<!-- 상단 네비게이션 바 -->
	<div id="navbar">
	  <a href="" id="logo">Z</a>
	  <ul id="menu">
		<li><a href="#title">Title</a></li>
		<li><a href="#menu">Menu</a></li>
		<li><a href="#locate">Locate</a></li>
		<li><a href="#info">Info</a></li>
	  </ul>
	</div>
  
	<!-- 각 본문 섹션 -->
	<div id="fullpage">
	  <div class="section" id="titleSection">
		<?php include('html/title.html'); ?>
	  </div>

	  <div class="section" id="menuSection">
		<?php include('html/menu.html'); ?>
	  </div>

	  <div class="section" id="locateection">
		<?php include('html/locate.html'); ?>
	  </div>
	  
	  <div class="section" id="infoSection">
		<?php include('html/info.html'); ?>
	  </div>
	</div>
  </body>

</html>