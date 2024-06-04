<?php                         PHP 標籤，告訴伺服器開始執行 PHP 程式碼。
    session_start();         啟動 PHP 的會話機制  這行代碼通常位於 PHP 文件的頂部，因為它需要在任何會話變數被訪問或設置之前調用。
    unset($_SESSION["id"]);  這行代碼刪除 $_SESSION 超級全局變數中的 "id" 元素。這通常用於用戶登出時，移除用戶的會話數據。
    echo "登出成功....";     向客戶端（瀏覽器）輸出字符串 "登出成功...."。用於告知用戶登出操作已成功完成。
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";  用於自動刷新和重定向頁面  告訴瀏覽器在 3 秒後自動將當前頁面重定向到 2.login.html

?>   結束標籤
