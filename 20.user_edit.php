<?php     PHP 腳本的開始

    error_reporting(0);  禁用了錯誤報告
    session_start();   新的 session
    if (!$_SESSION["id"]) {   檢查用戶是否已登錄
        echo "請登入帳號";   輸出"請登入帳號"
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";    顯示一條請求登錄的消息，並在 3 秒後重定向到登錄頁面。否則，執行下面的代碼
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    使用提供的用戶名和密碼。連接到 "db4free.net" 主機上的 "immust"
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){   mysqli_query 函數執行一個 SQL UPDATE 查詢
            echo "修改錯誤";      輸出"修改錯誤"
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";    如果更新操作成功，則顯示 "修改成功，三秒鐘後回到網頁" 的消息並在 3 秒後重定向到 18.user.php 頁面。否則，顯示 "修改錯誤" 的消息並重定向到 18.user.php 頁面
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>    PHP 腳本的結束
