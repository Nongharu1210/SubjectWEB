<?php
    include_once "01 db.php";
    include_once "util.php";
    $debug_mode = false;

    if($_SERVER['REQUEST_METHOD']=='GET'){
        debug_text("GET METHOD Process...", $debug_mode);
        echo json_encode(show_data($debug_mode));
    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        debug_text("POST METHOD May be implement soon...", $debug_mode);
        $message = array("status"=>print_r($_POST));
        echo json_encode($message);
    }else{
        debug_text("Error this site Unsupport This request", $debug_mode);
        http_response_code(405);
    }

    function show_data($debug_mode){
        $mydb = new db("root", "", "person_data", $debug_mode);
        $data = $mydb->query("select * from person");
        // print_r($data);
        $mydb->close();
        return $data;
    }
    function add_data(){
        //INSERT INTO `person` (`id`, `name`, `age`, `create_date`) VALUES (3, 'ggez', 21, '2021-03-18 06:31:25');
    }
?>