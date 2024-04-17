<?php
#mysqli_connect() 建立資料庫連結: 這

$conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");: 這一行代碼建立了與名為 "immust" 的資料庫
  在 "db4free.net" 主機上的連接，使用的帳號是 "immust"，密碼是 "immustimmust"。

#mysqli_query() 從資料庫查詢資料: 說明下面的代碼將從資料庫中查詢資料。

$result=mysqli_query($conn, "select * from user");: 這一行代碼執行了一個SQL查詢，選擇了 "user" 表中的所有列，並將結果保存在 $result 變數中。

#mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來: 指出下面的代碼將從查詢結果中逐行提取資料。

while ($row=mysqli_fetch_array($result)) {: 這一行代碼開始了一個 while 迴圈，它會在每次從結果集中提取出一行資料時執行。

echo $row["id"]." ".$row["pwd"]."<br>";: 這一行代碼輸出了從資料庫中獲取的每一行資料的 "id" 和 "pwd" 字段值，
  並在每行的末尾添加了一個斷行標籤 "<br>"，以使輸出呈現在HTML頁面上。

}: 這是 while 迴圈的結束標記。

?>
