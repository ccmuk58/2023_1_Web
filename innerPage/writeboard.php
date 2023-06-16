<link rel="stylesheet" href="../css/writeboardStyle.css">
<link rel="stylesheet" href="../css/style.css">

<?php session_start(); ?>
<div id="navbar">
	  <a href="../index.php" id="logo"><p>Z<p></a>
</div>
<?php
$email = $_SESSION['pz_uid'];
$uname = $_SESSION['uname'];
$wdate = date('Y/m/d');
?>
<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'newboard')" id="defaultOpen">게시글 작성</button>
    <button class="tablinks" onclick="openTab(event, 'showboard')">게시글 목록</button>
</div>
<!--왼쪽 탭에 뜨는 탭 버튼-->

<div id="newboard" class="tabcontent">
    <h2>게시글 작성</h2>
    <p>게시판에 새 글을 게시합니다.</p>
    <div class="container">
        <form action="writeboardproc.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label for="fname">작성자</label>
                </div>
                <div class="col-75">
                    <input type="text" name="email" value="<?=$uname?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">작성일</label>
                </div>
                <div class="col-75">
                    <input type="text" name="wdate" value="<?=$wdate?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">제목</label>
                </div>
                <div class="col-75">
                    <input type="text" name="title" placeholder="Title..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">게시글</label>
                </div>
                <div class="col-75">
                    <textarea rows="10" name="note"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">첨부파일</label>
                </div>
                <div class="col-75">
                    <input type="file" name="att">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
<!--게시글 작성부분 인터페이스-->

<div id="showboard" class="tabcontent">
    <iframe src="showboard.html" style="width:100%; height:100%; border:none"></iframe>
</div>
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
