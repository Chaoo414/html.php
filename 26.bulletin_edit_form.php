<?php    PHP腳本的開始
    error_reporting(0);  錯誤不會被顯示
    session_start();    啟動一個新的會話
    if (!$_SESSION["id"]) {    是否未設置或者為空
        echo "please login first";   輸出 "請先登錄"
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  瀏覽器在3秒後刷新頁面並重定向到URL "2.login.html"
    }
    else{   如果用戶已登錄，執行以下代碼
        
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   建立了到MySQL數據庫的連接，該數據庫位於db4free.net，用戶名為"immust"，密碼為"immustimmust"，並選擇了數據庫"immust"
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");  執行了一個SQL查詢，從“bulletin”表中選擇了所有列，其中“bid”列匹配了通過GET參數“bid”傳遞的值。
        $row=mysqli_fetch_array($result);  查詢返回的結果集中提取了一行，並將其存儲在變量$row中
        $checked1="";    初始化了三個變量為空字符串
        $checked2="";   初始化了三個變量為空字符串
        $checked3="";  初始化了三個變量為空字符串
        if ($row['type']==1)
            $checked1="checked";    如果提取的行中“type”列的值為1，則將$checked1設置為“checked”
        if ($row['type']==2)
            $checked2="checked";     如果提取的行中“type”列的值為2，則將$checked2設置為“checked”
        if ($row['type']==3)
            $checked3="checked";    如果提取的行中“type”列的值為3，則將$checked3設置為“checked”
        echo "
        <html>
            <head><title>新增佈告</title></head>   碼向瀏覽器輸出HTML代碼。它輸出了一個表單，用於編輯佈告
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>  這將從提取的行中的“bid”列的值插入HTML輸出
                    標    題：<input type=text name=title value={$row['title']}><br>   這將從提取的行中的“title”列的值插入HTML輸出
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>  這將從提取的行中的“content”列的值插入
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>  輸出 HTML 表單
        ";
    }
?>    PHP腳本的結束
