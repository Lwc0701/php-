<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; //顯示文字 請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; 
    }
    else{    
        echo "
            <form action=user_add.php method=post> //來自user_add.php 使用POST取值
                帳號：<input type=text name=id><br> //類型TEXT 名稱NAME
                密碼：<input type=text name=pwd><p></p> //類型TEXT 名稱PWD
                <input type=submit value=新增> <input type=reset value=清除> 類型sumbit 顯示新增 類型reset 顯示清除
            </form>
        ";
    }
?>
    </body>
</html>