<?php
    session_start(); //開啟
    unset($_SESSION["counter"]); //重製counter
    echo "counter重置成功...."; //顯示counter重製成功。。。
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>"; //顯示<meta http-equiv=REFRESH content='2; url=counter.php'>

?>