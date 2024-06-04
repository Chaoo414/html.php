<?php   PHP 開始

error_reporting(0);  禁用了所有錯誤報告
session_start();    開始一個新的會話
if (!$_SESSION["id"]) {  檢查 $_SESSION["id"] 是否存在
    echo "請登入帳號";  輸出 "請登入帳號" 
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";   3 秒後將頁面重定向到 2.login.html
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); 接受四個參數：資料庫伺服器的主機名、使用者名、密碼和資料庫名稱。
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; 新使用者的帳號 (id) 和密碼 (pwd) 插入到 user 表中。$_POST
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";  函數執行 SQL 插入語句。如果執行失敗，則輸出 "新增命令錯誤"
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";  輸出 "新增使用者成功，三秒鐘後回到網頁"，並在 3 秒後重定向到 18.user.php。
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";  
   }
}
?>  PHP 結束
