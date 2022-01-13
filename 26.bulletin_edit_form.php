<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first"; //顯示文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //網址:http-equiv=REFRESH
    }
    else{
        
        $conn=mysqli_connect("localhost","root","","mydb"); //使用者root 資料庫mydb 本機使用者localhost 
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET[bid]}"); //sql指令
        $row=mysqli_fetch_array($result);
        $checked1=""; //checked1 = ""
        $checked2="";//checked2 = ""
        $checked3="";//checked3 = ""
        if ($row['type']==1)//陣列type = 1
            $checked1="checked"; //checked1 = "checked"
        if ($row['type']==2)//陣列type = 2
            $checked2="checked"; //checked2 = "checked"
        if ($row['type']==3) //陣列type = 3
            $checked3="checked"; //checked3 = "checked"
        echo "
        <html>
            <head><title>新增佈告</title></head> //html格式
            <body>
                <form method=post action=bulletin_edit.php> //post抓取值 來自buuetin_edit.php檔案
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>