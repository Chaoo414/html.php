$conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");: 使用 mysqli_connect() 函式建立與資料庫的連線。
這裡的參數依次是資料庫的主機名、使用者名稱、密碼和資料庫名稱。

$result=mysqli_query($conn, "select * from user");: 使用 mysqli_query() 函式向資料庫發送查詢，選擇了名為 "user" 的資料表中的所有資料。
查詢的結果存儲在 $result 變數中。

while ($row=mysqli_fetch_array($result)) { ... }: 使用 while 迴圈遍歷查詢結果中的每一行資料。
mysqli_fetch_array() 函式會將查詢結果的下一行資料讀取到 $row 變數中，當沒有更多的資料可讀取時，迴圈將結束。

echo $row["id"]." ".$row["pwd"]."<br>";: 在每次迴圈運行時，將目前行的 "id" 和 "pwd" 欄位的值輸出到網頁上，並換行。
