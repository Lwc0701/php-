<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first"; //顯示文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //網址:http-equiv=REFRESH
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>登出</a>][<a href=user.php>管理使用者</a>][<a href=bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("localhost","root","", "mydb");//使用者root 資料庫mydb 本機使用者localhost 
        $result=mysqli_query($conn, "select * from bulletin"); //sql指令
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
                echo $row["bid"]; //顯示bid陣列 
            echo "</td><td>";
            echo $row["type"]; //顯示type陣列 
            echo "</td><td>"; 
            echo $row["title"]; //顯示title陣列
            echo "</td><td>";
            echo $row["content"];  //顯示content陣列
            echo "</td><td>";
            echo $row["time"]; //顯示time陣列
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
