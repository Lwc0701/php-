<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; //顯示文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb"); //使用者root 資料庫mydb 本機使用者localhost 
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){  //sql指令
            echo "修改錯誤"; //顯示文字
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁"; //顯示文字
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
        }
    }

?>