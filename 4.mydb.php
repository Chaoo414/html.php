<?php

$conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");: 使用 mysqli_connect() 函式建立與資料庫的連線。
其中，"db4free.net" 是資料庫的主機名，"immust" 是資料庫的使用者名稱，"immustimmust" 是資料庫的密碼，"immust" 是要連接的資料庫名稱。

$result=mysqli_query($conn, "select * from user");: 使用 mysqli_query() 函式向資料庫發送查詢，選擇了名為 "user" 的資料表中的所有資料。這個查詢的結果會存儲在 $result 變數中。

$row=mysqli_fetch_array($result);: 使用 mysqli_fetch_array() 函式從查詢結果中取出一行資料，並將其存儲在 $row 變數中。在這個情況下，它取出了查詢結果的第一行資料。

echo $row["id"] . " " . $row["pwd"]."<br>";: 輸出 $row 中的 "id" 和 "pwd" 欄位的值，並換行。

$row=mysqli_fetch_array($result);: 再次使用 mysqli_fetch_array() 函式，取出查詢結果的下一行資料。

echo $row["id"] . " " . $row["pwd"];: 再次輸出下一行資料的 "id" 和 "pwd" 欄位的值。

?>
