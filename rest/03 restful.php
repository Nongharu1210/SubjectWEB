<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="loadDoc()">
    <h1>Result</h1>
    <div id="result"></div>
    <script>
    function loadDoc(){
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            console.log(this.readyState + "," + this.status);
            if(this.readyState==4 && this.status==200){
                alert(this.responseText);
            }
        }
        xhttp.open("GET", "02 rest.php");
        xhttp.send();
    }
    </script>
</body>
</html>