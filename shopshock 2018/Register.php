<!-- เพิ่มข้อมูลผู้ใช้ระบบ -->
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <div style="margin: 0 auto ; width:500px;border:2px red solid;padding:50px">
        <form action="rest.php" method="post">
            <h2 style="margin: 0;">ShopShock Member Register</h2><br>
            <hr>
            <table style="margin-right: auto;margin-left: auto;">
                <input type="hidden" name="Register">
                <tr style="text-align: right;">
                    <td><label for="">Name : </label></td>
                    <td><input type="text" name="name" id="" required></td>
                </tr>
                <tr style="text-align: right;">
                    <td><label for="">NickName : </label></td>
                    <td><input type="text" name="nickname" id="" required></td>
                </tr>
                <tr style="text-align: right;">
                    <td><label for="">Password : </label></td>
                    <td><input type="text" name="pass" id="" required></td>
                </tr>
                <tr style="text-align: right;">
                    <td><label for="">Confirm Password : </label></td>
                    <td><input type="text" name="con_pass" id="" required></td>
                </tr>
            </table>
            <hr>
            <table style="margin-right: auto;margin-left: auto;">
                <tr>
                    <td style="text-align: right;"><button type="submit">submit</button></td>
                    <td>
                        <button type="reset">Reset</button>
                        <button onclick="location.href='login.php'">Back</a> </button>
                    </td>
                </tr>
            </table>

        </form>
    </div>

</body>

</html>