<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE; //login等於否
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; //假如抓取的id值等於id排序中的一項並且抓取的pwd值等於pwd排序中的一項，login等於是。
     }
   } 
   if ($login==TRUE) //假設login等於是
     echo "welcome!!"; //顯示welcome
  else
     echo "id/pwd wrong!!"; //不是則顯示id/pwd wrong!!
?>