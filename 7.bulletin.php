<?php

error_reporting(0);: 禁用錯誤報告。如果發生任何錯誤它將不會被顯示。

$conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");: 這一行代碼建立了與 "db4free.net" 主機上名為 "immust" 的資料庫的連接，使用的帳號是 "immust"，密碼是 "immustimmust"。

$result=mysqli_query($conn, "select * from bulletin");: 這一行代碼執行了一個SQL查詢，從 "bulletin" 表中選擇了所有的列，並將結果存儲在 $result 變數中。

echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";: 這一行代碼輸出了HTML表格的開始標籤以及表格的標題行，每列包含了佈告的相關信息。

while ($row=mysqli_fetch_array($result)){: 這一行代碼開始了一個 while 迴圈，從結果集中提取每一行資料，並將其存儲在 $row 變數中。

echo "<tr><td>";: 開始標籤。

echo $row["bid"];: "bid" 列的值，表示佈告的編號。

echo "</td><td>";: 結束標籤，並開始下一個單元格。

echo $row["type"];:  "type" 列的值，表示佈告的類別。

echo "</td><td>";: 結束標籤，並開始下一個單元格。

echo $row["title"];:  "title" 列的值，表示佈告的標題。

echo "</td><td>";: 結束標籤，並開始下一個單元格。

echo $row["content"];:  "content" 列的值，表示佈告的內容。

echo "</td><td>";: 結束標籤，並開始下一個單元格。

echo $row["time"];:  "time" 列的值，表示佈告的發佈時間。

echo "</td></tr>";: 結束標籤。

}: while 迴圈的結束標記。

echo "</table>";: 這一行代碼輸出了HTML表格的結束標籤，表示表格的結束。

?>
