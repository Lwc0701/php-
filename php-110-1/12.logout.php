<?php
    session_start();
    unset($_SESSION["id"]); //重製
    echo "登出成功...."; //顯示登出成功....
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>"; //顯示<meta http-equiv=REFRESH content='3; url=login.html'>

?>