<?php
#mysqli_connect() 
$conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");: 這一行代碼建立了與 "db4free.net" 主機上的名為 "immust" 的資料庫的連接，
  使用的帳號是 "immust"，密碼是 "immustimmust"。

#mysqli_query() 

$result=mysqli_query($conn, "select * from user");: "user" 表中的所有列，並將結果保存在 $result 變數中。

#mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來: 註釋，指出下面的代碼將逐行從查詢結果中提取資料。

$login=FALSE;: 創建一個布林變數 $login 並將其初始化為FALSE。這將用於記錄用戶是否成功登入。

while ($row=mysqli_fetch_array($result)) {: 開始一個 while 迴圈，當從資料庫中獲取一行資料時，將其存儲在 $row 變數中。

if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) { $login=TRUE; }: 在迴圈中，檢查用戶提交的帳號和密碼是否與資料庫中的某一行匹配。
  如果匹配成功，將 $login 設置為TRUE，表示登入成功。

if ($login==TRUE) {: 如果登入成功，進入條件判斷。

session_start();: 啟動會話，以便可以使用會話變數。

$_SESSION["id"]=$_POST["id"];: 將用戶的帳號存儲在會話變數中。

echo "登入成功";: 輸出登入成功消息。

echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";: 輸出一個HTML <meta> 標籤，該標籤具有 http-equiv 屬性，
  其值為 "REFRESH"，這表示將重新加載當前頁面。content 屬性設置了重新加載的時間（3秒），以及重新加載後要跳轉的頁面URL（"11.bulletin.php"）。
  這將在登入成功後等待3秒，然後自動跳轉到佈告板頁面。

else {: 如果登入失敗，進入條件判斷。

echo "帳號/密碼 錯誤";: 輸出帳號/密碼錯誤消息。

echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";: 輸出一個HTML <meta> 標籤，用於重新加載當前頁面。content 屬性設置了重新加載的時間（3秒），
  以及重新加載後要跳轉的頁面URL（"2.login.html"）。這將在登入失敗後等待3秒，然後自動跳轉到登入頁面。
?>
