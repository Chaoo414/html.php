<?php   PHP 開始
    error_reporting(0);  禁用所有錯誤報告
    session_start();  啟動會話
    if (!$_SESSION["id"]) {  檢查使用者是否已登入
        echo "請登入帳號";  顯示訊息 "請登入帳號"
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  在 3 秒後將頁面重定向到 2.login.html（登入頁面）
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  建立與資料庫的連接 連接到 db4free.net 資料庫，使用者名是 immust，密碼是 immustimmust，資料庫名稱是 immust
        $sql="delete from user where id='{$_GET["id"]}'";  SQL 刪除語句，用於刪除 user 表中 id 與 $_GET["id"] 相同的使用者
        #echo $sql;  輸出 SQL 語句來檢查是否正確
        if (!mysqli_query($conn,$sql)){   執行 SQL 語句
            echo "使用者刪除錯誤";  顯示 "使用者刪除錯誤"
        }else{
            echo "使用者刪除成功";  顯示 "使用者刪除成功"
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";  無論刪除是否成功，在 3 秒後重定向到 18.user.php
    }
?>  PHP 結束
