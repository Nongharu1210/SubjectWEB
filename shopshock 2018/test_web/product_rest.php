<?php 
    session_start();
?>
<?php
    include_once("class.db.php");
    if($_SERVER["REQUEST_METHOD"]=='GET'){
        echo json_encode(product_list(),JSON_UNESCAPED_UNICODE);
    }else if($_SERVER["REQUEST_METHOD"]=='POST'){
        echo json_encode(print_r(open_bill()));

    }
    function product_list(){
        $db = new database();
        $db->connect();
        $sql = "SELECT Product_id,Product_code,Product_Name,
                       brand.Brand_name, unit.Unit_name,
                       product.Cost, product.Stock_Quantity
                FROM  product,brand,unit 
                WHERE product.Brand_ID = brand.Brand_id
                and   product.Unit_ID  = unit.Unit_id";
        $result = $db->query($sql);
        $db->close();
        return $result;
    }
    
    function open_bill() {
        //1. check have some openbill?
        //1a no: create new open_bill
        //1b yes: check status open_bill = 1
        //  1.1a yes:
        //      1.2.1a check produck id exist yes: update qty in bill_detail
        //      1.2.2b check produck id exist no: add produck yo bill_detail 
        //  1.1b no:

        $db = new database();
        $db->connect();
        $sql ="SELECT Bill_id, Bill_status FROM bill WHERE Cus_ID ='{$_SESSION['cus_id']}' order by Bill_id desc limit 1";
        $bill_result = $db->query($sql);
        $p_id = $_POST['p_id'];
        $p_qty = $_POST['p_qty'];
        $p_price = $_POST['p_price'];
        if (sizeof($bill_result)== 0) {
            // insert new
            $sql = "INSERT INTO bill(Bill_id, Cus_ID, Bill_Status) VALUES (1,'{$_SESSION['cus_id']}',0)";
            $result = $db->exec($sql);
            
            $sql = "INSERT INTO bill_detail(Bill_id, Product_ID, Quantity, Unit_Price) VALUES (1,'{p_id}','{p_qty}','{p_price}')";
            $result = $db->exec($sql);
        } else {
            // check [0][0]billid 
            //       [0][1] bill status
            if ($bill_result[0][1]==0) {
                $sql ="SELECT Bill_id, Product_ID FROM bill_detail WHERE Bill_id ='{$_SESSION['cus_id']}' and Product_ID = '{$p_id}'";
                $result = $db->query($sql);
                if (sizeof($result)==0) {
                    //add new product
                    $sql = "INSERT INTO bill_detail(Bill_id, Product_ID, Quantity, Unit_Price) VALUES ({$bill_result[0][1]},{p_id},{p_qty},{p_price})";
                    $result = $db->exec($sql);
                } else {
                    //update current item

                }
            }
        }
        #INSERT INTO bill(Bill_id, Cus_ID,Bill_Status) VALUES (1,1,1)
        
        return $bill_result;
    }
?>