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
    <?php echo "ต้องการดูกระทู้หมายเลข ".$_GET["id"];?>
    <br>
    <?php
        if($_GET["id"]%2==0){
            echo "เป็นกระทู้หมายเลขคู่";
        }else{
            echo "เป็นกระทู้หมายเลขคี่";
        }       
    ?>
    <table style="border: 2px solid black;width:40%" align="center">
    <tr><td colspan="2" style="background-color: #6CD2FE">แสดงความคิดเห็น</td></tr>
    <tr><td><textarea type="text" name="login" size="40"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"a></td></tr>
    </table>
    <br>
    <div align="center">
        <a href="index.php">กลับไปหน้าหลัก</a>    
    </div>
    </div>
</body>
</html>