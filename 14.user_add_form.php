<html> 建立了一個 HTML 文件
    <head><title>新增使用者</title></head>  標題為 "新增使用者"
    <body>
<?php        開始 PHP 程式碼段
    error_reporting(0); 禁用了所有錯誤報告。這樣做可以避免在頁面上顯示任何 PHP 錯誤訊息
    session_start();  啟動新會話
    if (!$_SESSION["id"]) {  檢查 $_SESSION["id"] 是否存在
        echo "請登入帳號";  輸出 "請登入帳號" 
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  在 3 秒後將頁面重定向到 2.login.html
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>  如果 $_SESSION["id"] 存在（表示使用者已登入），則顯示一個新增使用者的表單
                帳號：<input type=text name=id><br>   輸入框  帳號
                密碼：<input type=text name=pwd><p></p>  輸入框  密碼
                <input type=submit value=新增> <input type=reset value=清除>   兩個按鈕（提交和清除）  當表單提交時，資料會被送到 15.user_add.php。
            </form>
        ";
    }
?>
    </body>
</html>   結束 HTML
