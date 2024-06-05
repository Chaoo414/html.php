<html>
    <head><title>修改使用者</title></head>    HTML 文件的開始，包括標題 "修改使用者"
    <body>
    <?php
    error_reporting(0);  禁用了錯誤報告
    session_start();   啟動了一個會話
    if (!$_SESSION["id"]) {   檢查用戶是否已登錄
        echo "請登入帳號";    請求登錄的消息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; 並使用 meta 標記在 3 秒後重定向到登錄頁面
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  連接到名為 "db4free.net" 的 MySQL 數據庫，並使用提供的用戶名和密碼。 

        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");  執行一個 SQL 查詢，從 "user" 表中選擇所有列，其中用戶 ID 等於從 URL 中獲取的 id 參數值
        $row=mysqli_fetch_array($result);   查詢結果中的一行作為關聯數組和數字索引數組返回
        echo "
        <form method=post action=20.user_edit.php>                    TML 表單，該表單包含用戶的 ID 和密碼的輸入字段，以及一個提交按鈕。這個表單將提交到 20.user_edit.php 進行處理
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>       PHP 代碼的結束
    </body>
</html>      HTML 文件的結尾
