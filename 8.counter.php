<?php
session_start();

if (!isset($_SESSION["counter"])) $_SESSION["counter"]=1; else $_SESSION["counter"]++;: 這是條件語句。檢查是否已經在會話中設置了 "counter" 變數。
  如果 "counter" 變數不存在，則將其設置為1；如果存在，則將其增加1。這段代碼實現了一個計數器，用於記錄訪問該網頁的次數。

echo "counter=".$_SESSION["counter"];:  "counter" 變數的值。這將顯示當前的計數器值。

echo "<br><a href=9.reset_counter.php>重置counter</a>";: 一個超鏈接，指向 "9.reset_counter.php" 文件。當用戶單擊此鏈接時，將會執行該文件中的代碼，從而重置計數器。
?>
