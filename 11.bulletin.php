<?php
error_reporting(0);:禁止顯示任何錯誤
session_start();

if (!$_SESSION["id"]) {:"id" 的變數。如果不存在，則認為用戶尚未登入。

echo "請先登入";: 要求用戶先登入。

echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";: 輸出一個HTML <meta> 標籤，用於重新加載當前頁面。
  content 屬性設置了重新加載的時間（3秒），以及重新加載後要跳轉的頁面URL（"2.login.html"）。
  這將在提示消息顯示後等待3秒，然後自動跳轉到登入頁面。

else {:用戶已經登入，則進入 else 塊。

echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
: 如果用戶已登入，則輸出歡迎消息，包括用戶名和三個鏈接，分別用於登出、管理使用者和新增佈告。

$conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");: 這一行代碼建立了與 "db4free.net" 主機上的名為 "immust" 的資料庫的連接，
  使用的帳號是 "immust"，密碼是 "immustimmust"。

$result=mysqli_query($conn, "select * from bulletin");: 這一行代碼執行了一個SQL查詢，從 "bulletin" 表中選擇了所有的列，並將結果存儲在 $result 變數中。

echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
: 這一行代碼輸出了HTML表格的開始標籤以及表格的標題行，包括了佈告的相關信息。

while ($row=mysqli_fetch_array($result)){: 這是一個 while 迴圈，循環處理從資料庫中檢索出來的每一行佈告內容。

echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
: 這一行代碼輸出了表格中每一行的第一列，包含了修改和刪除佈告的超鏈接。

echo $row["bid"];:佈告的編號。

echo "</td><td>";: 表格中的單元格結束標籤，並開始下一個單元格。

echo $row["type"];: 佈告的類別。

echo "</td><td>";: 表格中單元格結束標籤，並開始下一個單元格。

echo $row["title"];: 佈告的標題。

echo "</td><td>";:表格中的單元格結束標籤，並開始下一個單元格。

echo $row["content"];: 佈告的內容。

echo "</td><td>";: 表格中的單元格結束標籤，並開始下一個單元格。

echo $row["time"];: 佈告的發佈時間。

echo "</td></tr>";: 表格中的行結束標籤。

echo "</table>";: L表格的結束標籤，表示表格的結束。
      }
?>
