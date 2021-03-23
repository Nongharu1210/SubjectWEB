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
    <br>
    <p align="center">|<a href="#">สั่งซื้อสินค้า</a>|<a href="#">ชำระเงิน</a>|<a href="#">ออกจากระบบ</a>|</p>
    <h1 align="center">SHOPSHOCK</h1>
    <h3 align="center">Select Product to Cart</h3>
    <?php
    include_once "db_shopshock.php";
    // ใช้ทดลองภายในหน้านี้ **เท่านั้น**
    $mydb = new db("root", "", "shopshock", true);
    $data = $mydb->query("select * from product");
    print_r($data);
    ?>
</body>

</html>