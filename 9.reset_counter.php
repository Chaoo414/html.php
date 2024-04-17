<?php
session_start();
unset($_SESSION["counter"]);: 這一行代碼從會話中刪除了名為 "counter" 的變數。這樣就重置了計數器。

echo "counter重置成功....";: 這一行輸出一條消息，通知用戶計數器已經成功重置。

echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";: 這一行輸出了一個 HTML 元標籤 <meta>，
  它具有 http-equiv 屬性，其值為 "REFRESH"，這表示將重新加載當前頁面。content 屬性設置了重新加載的時間，這裡是2秒。
  url 屬性指定了重新加載後要跳轉的頁面，這裡是 "8.counter.php"。因此，當用戶訪問這個PHP文件時，將在重置成功後等待2秒，然後自動跳轉到 "8.counter.php" 頁面。

?>
