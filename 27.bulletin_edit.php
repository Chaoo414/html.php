<?php

    error_reporting(0);   不顯示錯誤
    session_start();   啟動會話，用於跟踪用戶的登錄狀態
    if (!$_SESSION["id"]) {   如果會話中的id不存在（即用戶未登錄）
        echo "請登入帳號";    輸出提示信息，要求用戶登錄帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";   3秒後刷新頁面，跳轉到登錄頁面
    }
    else{     如果用戶已經登錄
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  建立到MySQL數據庫的連接
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";  如果更新失敗，輸出錯誤信息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";  3秒後刷新頁面，跳轉到佈告欄列表頁面
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";  如果更新成功，輸出成功信息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";  3秒後刷新頁面，跳轉到佈告欄列表頁面
        }
    }

?>
