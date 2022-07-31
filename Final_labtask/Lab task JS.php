<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Example</title>
    <style>
        div{
            background-color: green;
            width: 100px;
            height: 100px;
            position: relative;
        }
    </style>
</head>
<body>
        <h1>JS Example</h1>
        <input type="text" id="username" name="" value="">
        <input type="button" id="click" name="click" value="Click" onclick="move()"> <br><br>
        <div id="d1">Test</div>

        <script>
            //a = 10;
            //var b =20;
             let c = 30;
            const d = 40;
            let pix =20;
            

        
            let student = ['alamin', 12, 'alamin@aiub.edu'];

            function test(){
                document.getElementsByTagName('h1')[0].innerHTML = "test..";
            }

            function move(){
                let username = document.getElementById('username').value;
                pix = pix +20;
                if(username == ""){
                    document.getElementsByTagName('h1')[0].innerHTML = "null data";                    
                }else{
                    document.getElementsByTagName('h1')[0].innerHTML = username;
                    document.getElementById('d1').style.left = pix + "px";
                }

            }

        </script>
</body>
</html>