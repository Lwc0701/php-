<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first"; //顯示文字
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; 網址:http-equiv=REFRESH 
    }
    else{
        echo "
        <html>  //html格式
            <head><title>新增佈告</title></head> //標題
            <body>
                <form method=post action=bulletin_add.php> //post抓取值 來自bulletun_add.php
                    標    題：<input type=text name=title><br> //類型text 名稱title
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告  //類型radio 名稱type 值=1
                            <input type=radio name=type value=2>獲獎資訊//類型radio 名稱type 值=2
						
                            <input type=radio name=type value=3>徵才資訊<br>//類型radio 名稱type 值=3
                    發布時間：<input type=date name=time><p></p> //類型date 名稱time
                    <input type=submit value=新增佈告> <input type=reset value=清除> //類型submit 值=新增佈告 類型reset 值=清除
                </form>
            </body>
        </html>
        ";
    }
?>