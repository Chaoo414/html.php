<?php    PHP 腳本的開始
    error_reporting(0);   禁用了錯誤報告
    session_start();   開始一個新的 session
    if (!$_SESSION["id"]) {   檢查用戶是否已登錄
        echo "please login first";  如果 $_SESSION["id"] 未設置（即用戶未登錄）
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";   顯示一條請求登錄的消息，並在 3 秒後重定向到登錄頁面。否則，執行下面的代碼
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>                      這部分輸出一個 HTML 表單，用於新增佈告。它包括輸入標題、內容、佈告類型、發布時間的字段，以及提交和重置按鈕。表單的 action 屬性指定了提交表單時要執行的腳本（23.bulletin_add.php）。
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }    這裡結束了 if-else 語句的代碼塊
?>    PHP 腳本的結束
