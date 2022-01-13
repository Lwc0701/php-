<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; //顯示文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{   
        $conn=mysqli_connect("localhost", "root","","mydb"); //使用者root 資料庫mydb 本機使用者localhost 
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); //SQL指令
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=user_edit.php> POST取值 來自user_edit.php檔案
            <input type=hidden name=id value={$row['id']}> //類型hidden 名稱id 值為陣列id
            帳號：{$row['id']}<br>  帳號 = 陣列id
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p> //類型text 名稱pwd 值為陣列pwd
            <input type=submit value=修改> //類型submit 值為修改
        </form>
        ";
    }
    ?>
    </body>
</html>