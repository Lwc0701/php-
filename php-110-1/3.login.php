<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))
        echo "Welcome"; //假如id的值等於john和pwd的值等於john1234顯示Welcome字樣。
    else
        echo "fail login";//如果條件沒有成立，顯示fail login字樣。
?>
