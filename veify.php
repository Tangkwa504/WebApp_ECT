<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard Meaw</h1>
    <hr>
    <div align="center">
        <!--เข้าสู่ระบบด้วย<br> 
    Login = <?php echo $_POST["login"]; ?><br>
    Password = <?php echo $_POST["pwd"]; ?><br> -->
        <?php
        if ($_POST["login"] == "admin" && $_POST["pwd"] == "ad1234") {
            echo "ยินดีต้อนรับคุณ ADMIN";
        } elseif ($_POST["login"] == "member" && $_POST["pwd"] == "mem1234") {
            echo "ยินดีต้อนรับคุณ MEMBER";
        } else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
        ?>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>

</html>