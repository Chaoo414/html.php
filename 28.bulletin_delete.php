<?php
    error_reporting(0);  關閉所有錯誤報告
    session_start();  啟動 PHP 會話
    if (!$_SESSION["id"]) {  檢查用戶有沒有登入
        echo "請登入帳號";  輸出"請登入帳號"
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; 在 3 秒後自動重定向用戶到登入頁面 2.login.html
    }
    else{     表示用戶已登入，執行以下代碼塊
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  連接到 MySQL 數據庫。db4free.net 是數據庫服務器，immust 是用戶名，immustimmust 是密碼，immust 是數據庫名稱
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";  從 bulletin 表中刪除 bid 等於 $_GET["bid"] 的記錄。$_GET["bid"] 是從 URL 中獲取的 bid 參數
        #echo $sql;  
        if (!mysqli_query($conn,$sql)){   執行 SQL 查詢
            echo "佈告刪除錯誤";  輸出"佈告刪除錯誤"
        }else{
            echo "佈告刪除成功";  輸出"佈告刪除成功"
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";  無論成功或失敗，都會在 3 秒後自動重定向用戶到 11.bulletin.php 頁面
    }
?>
