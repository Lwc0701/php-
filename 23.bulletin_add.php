<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first"; //顯示文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; 網址:http-equiv=REFRESH 
    }
    else{
        $conn=mysqli_connect("localhost","root","", "mydb"); //使用者root 資料庫mydb 本機使用者localhost  
        $sql="insert into bulletin(title, content, type, time) //sql指令
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; //值={$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        }
    }
?>
