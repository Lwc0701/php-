<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first"; //顯示please login first
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //顯示<meta http-equiv=REFRESH content='3, url=login.html'>
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>logout</a>]<br>";
        $conn=mysqli_connect("localhost","root","", "mydb"); //連結資料庫
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
             echo "<tr><td>";
        echo $row["bid"];//顯示bid值的排序
        echo "</td><td>";
        echo $row["type"];//顯示type值的排序
        echo "</td><td>"; 
        echo $row["title"];//顯示title值的排序
        echo "</td><td>";
        echo $row["content"]; //顯示content值的排序
        echo "</td><td>";
        echo $row["time"];//顯示time值的排序
        echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
