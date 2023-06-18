<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Register Z-Burger</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap의 로그인 예시 페이지를 기반으로 한 추가 css -->
    <link rel="stylesheet" href="../css/accountStyle.css">
</head>

<body class="text-center">
    <?php
    session_start();
    include_once('dbconn.php');
    $uname = $_SESSION['z_uname'];
    $email = $_SESSION['z_uid'];
    ?>
    <main class="form-signin w-100 m-auto">
        <form action="accountproc.php" method="post">
            <a href="../index.php">
                <h3 class="mb-3 logo">Z</h3>
            </a>
            <h1 class="h3 mb-3 fw-normal">Z-Burger Account Setting</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" value=<?=$email?> readonly>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <?php //email로 기본 회원정보에 관한 콜룸 가져오기
        $sql = "select * from member where email = '$email'";
        $result = $conn -> query($sql);
        $row = $result->fetch_assoc();
        $uname = $row['name'];
        $telno = $row['telno'];    
    ?>
                <div class="form-floating">
                    <input type="uname" name="uname" class="form-control" id="floatingUname" placeholder="User name" value=<?=$uname?>>
                    <label for="floatingUname">User name</label>
                </div>

                <div class="form-floating">
                    <input type="telno" name="telno" class="form-control" id="floatingTelno" placeholder="Phone Number" value=<?= $telno?>>
                    <label for="floatingTelno">Phone Number</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">New Password</label>
                </div>

                <button class="mt-4 mb-1 w-100 btn btn-lg btn-success" type="submit">변경하기</button>
            </div>
        </form>
        <button class="w-100 btn btn-lg btn-danger" onclick="location.href='accountdel.php'">회원탈퇴</button>
        <p class="mt-5 mb-3 text-light">&copy; 2023 Daejin University / Computer Science &amp; Engineering</p>
    </main>
</body>

</html>