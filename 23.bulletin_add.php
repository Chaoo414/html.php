<?php     PHP 腳本的開始
    error_reporting(0);  禁用了錯誤報告
    session_start();   函數開始一個新的 session
    if (!$_SESSION["id"]) {   檢查用戶是否已登錄
        echo "please login first";  則顯示一條請求登錄的消息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  並在 3 秒後重定向到登錄頁面。否則，執行下面的代碼
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  使用提供的用戶名和密碼。連接到 "db4free.net" 主機上的 "immust" 數據庫
        $sql="insert into bulletin(title, content, type, time)    內容、類型和時間插入到 bulletin 表中。注意，這段程式碼使用了 $_POST 陣列來獲取表單提交的數據
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){       這部分執行 SQL INSERT 語句以將新佈告插入到數據庫中。如果插入操作失敗，則顯示 "新增命令錯誤"。如果成功，則顯示 "新增佈告成功" 的消息，並在 3 秒後重定向到 11.bulletin.php 頁面
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }  
    }     這裡結束了 if-else 語句的代碼塊
?>     PHP 腳本的結束
