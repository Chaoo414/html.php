<html>        PHP 腳本的開始
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);  禁用了錯誤報告
        session_start();    開始一個新的 session 或者繼續當前的 session
        if (!$_SESSION["id"]) {   是否未設置 "id" 鍵。如果未設置，這意味著用戶尚未登錄。
            echo "請登入帳號";      "請登入帳號" 輸出到網頁
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";示瀏覽器在 3 秒後刷新頁面並重定向到登錄頁面（2.login.html）
        }
        else{   
            echo "<h1>使用者管理</h1>    用於當用戶已登錄時
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>   這一段程式碼輸出用戶管理頁面的 HTML 標記，包括標題、新增用戶和回到佈告欄列表的連結，以及顯示用戶信息的表頭
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  使用用戶名 "immust" 和密碼 "immustimmust"。它選擇名為 "immust" 
            $result=mysqli_query($conn, "select * from user");  這一行執行一個 SQL 查詢，從 "user" 表中選擇所有列，並將結果存儲在 $result 變量中
            while ($row=mysqli_fetch_array($result)){      while 循環，用於遍歷 SQL 查詢返回的結果集中的每一行
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";   它包括編輯和刪除用戶的連結、用戶的 ID 和密碼
            }
            echo "</table>";   閉 HTML 表格標籤
        }
    ?> 
    </body>
</html>
