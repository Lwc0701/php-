<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; //顯示文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //網址:http-equiv=REFRESH
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb"); //使用者root 資料庫mydb 本機使用者localhost 
        $sql="delete from bulletin where bid='{$_GET[bid]}'"; //sql指令
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤"; //顯示文字
        }else{
            echo "佈告刪除成功"; //顯示文字
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
    }
?>