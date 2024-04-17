<?php

#mysqli_connect() 建立資料庫連結

$conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");: 建立與 "db4free.net" 主機上的名為 "immust" 的資料庫的連接，
  使用的帳號是 "immust"，密碼是 "immustimmust"。

#mysqli_query() 從資料庫查詢資料

$result=mysqli_query($conn, "select * from user");: 執行一個SQL查詢，選擇 "user" 表中的所有列，並將結果保存在 $result 變數中。

#mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來

$login=FALSE;: 創建一個布林變數 $login 並將其初始化為FALSE。這將用於記錄用戶是否成功登入。

while ($row=mysqli_fetch_array($result)) {: 開始一個 while 迴圈，當從資料庫中獲取一行資料時，將其存儲在 $row 變數中。

if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) { $login=TRUE; }: 在迴圈中，檢查用戶提交的帳號和密碼是否與資料庫中的某一行匹配。如果匹配成功，將 $login 設置為TRUE，表示登入成功。

}

if ($login==TRUE) echo "登入成功"; else echo "帳號/密碼 錯誤";: 檢查 $login 變數的值，如果為TRUE，輸出 "登入成功"，否則輸出 "帳號/密碼 錯誤"。這表示根據用戶提交的帳號和密碼，在網頁上顯示相應的登入結果消息。

?>
