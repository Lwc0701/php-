<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; //假如抓取的id值等於id排序中的一項並且抓取的pwd值等於pwd排序中的一項，login等於是。
     }
   } 
   if ($login==TRUE) {    //假設login為是
    session_start(); //開啟
    $_SESSION["id"]=$_POST["id"]; 
    echo "welcome!!"; //顯示welcome!!
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //顯示<meta http-equiv=REFRESH content='3, url=bulletin.php'>
   }

  else{
    echo "id/pwd wrong!!"; //顯示id/pwd wrong!!
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //顯示<meta http-equiv=REFRESH content='3, url=login.html'>
  }
?>