<!-- ตรวจสอบสิทธิ์ผ่านมาหน้านี้ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productlist</title>
</head>

<body>
    <h1 align="center">ยินดีต้อนรับเข้าสู่เมนูลูกค้า</h1>
    <div style="margin: 2px 1em 0 auto; width:150px; border:2px black solid; padding:5px; text-align: right;">
            <h3>
                <?php
                session_start();
                echo "Your Welcome<br>";
                print_r($_SESSION['name']);
                ?>
            </h3>
        </div>
    <p align="center">|<a href="#">สั่งซื้อสินค้า</a>|<a href="#">ชำระเงิน</a>|<a href="logout.php">ออกจากระบบ</a>|</p>
    <h1 align="center">SHOPSHOCK</h1>
    <h3 align="center">Select Product to Cart</h3>
    
    <?php
    include_once "db_shopshock.php";
    include_once "rest.php";
    show_productList($debug_mode);


    // ใช้ทดลองภายในหน้านี้ **เท่านั้น**
    // $mydb = new db("root", "", "shopshock", true);
    // $data = $mydb->query("select * from product");
    // print_r($data);
    ?>
</body>

</html>