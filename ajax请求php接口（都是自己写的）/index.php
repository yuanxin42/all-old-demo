
<?php
 require_once('message.php');
 echo $res[0]['id'];
?>

<!-- 前两句是自己练习的php语法 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
     .input{  
            width:200px;  
            height:24px;  
            display:inline-block;
            line-height:24px;  
            font-size:14px;  
            padding:5px 8px;  
            border:1px solid #ddd;  
        }  
     .input:empty::before {  
        content: attr(placeholder);  
    }
    </style>
</head>
<body>
    <h1><?php echo $res[0]['id'];?></h1>
    用户名：<div contenteditable class="input user">ss</div>
    意见：<div contenteditable class="input">ss</div>
    <button id='submit'>提交</button>
    <script src="./js/jquery.min.js"></script>
    <script>
        let username = $(".user").html()
        $('#submit').on('click',()=>{
            $.ajax({
                type: "POST",
                // url: "./data_operation/insert.php",
                url: "./data_operation/select.php",
                data: `name=${username}`,
                success: function(msg){
                    alert(msg)
                },
                error :function(){
                    alert(23)
                }
            });
        })
    </script>
</body>
</html>