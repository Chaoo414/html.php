<html>    開始HTML
    <head><title>明新科技大學資訊管理系</title>  標題“明新科技大學資訊管理系”
    <meta charset="utf-8">   字符編碼為UTF-8
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">  引入Flexslider的CSS文件
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>  引入jQuery庫
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>    引入Flexslider的JavaScript文件    
    <script>
        $(window).load(function() {           整個網頁加載完成後執行的匿名函數
            $('.flexslider').flexslider({     選擇所有具有flexslider類的元素，並對它們初始化Flexslider插件
                animation: "slide",         設置Flexslider插件的動畫效果為“滑動”
                rtl: true                     設置Flexslider插件的滑動方向為從右向左
            });                            結束Flexslider插件的初始化設置
        });          結束窗口加載事件的匿名函數
    </script>
    <style>     開始內聯CSS樣式設置
        *{
            margin:0;     取消所有元素的外邊距
            color:gray;    字體顏色設置為灰色
            text-align:center;  文本居中對齊
        }
        .top{      top”部分的樣式設置開始
             background-color: white;  背景顏色為白色
        }
        .top .container{
            display: flex;   使用flexbox佈局
            align-items: center;  垂直居中對齊
            justify-content: space-between;  水平間隔分布
            padding:10px;  內邊距為10px
        }
        .top .logo{
            /*border:1px solid red;*/  邊框樣式
            font-size: 35px;    ogo元素的字體大小為35px
            font-weight: bold;  字體加粗
        }
        .top .logo img{
            width: 100px;   圖片寬度為100px
            vertical-align: middle;  垂直對齊中間
        }
        .top .top-nav{
            /*border:1px solid red;*/
            font-size: 25px;    導航欄的字體大小為25px
            font-weight: bold;        字體加粗
        }  
        .top .top-nav a{
            text-decoration: none;   超連結的文字將不會出現下劃線
        }
        /* nav */
        .nav {
            background-color:#333;   導航欄背景顏色為#333
            display: flex;   flexbox佈局
            justify-content: center;  內容居中對齊
        }
        .nav ul { 
            list-style-type: none;    移除列表項的預設樣式，例如圓點或數字
            margin: 0;   移除上下邊距
            padding: 0;    移除內邊距
            overflow: hidden;   隱藏多餘的部分而不顯示滾動條
            background-color: #333;   背景顏色為深灰色
        }
        .nav li {
            float: left;    將列表項左浮動，使其在同一行內水平排列
        }
        .nav li a {    
            display: block;    將超連結設置為區塊級元素，使其佔據整個父元素的寬度
            color: white;     文字顏色為白色
            text-align: center;   文字水平居中對齊
            padding: 14px 16px;    設置上下和左右的內邊距
            text-decoration: none;  
        }
        .nav li a:hover {    滑鼠懸停在超連結上時的樣式
            background-color: #111;   設置背景顏色為較深的灰色
        }
        /*下拉式選單*/
        .dropdown:hover .dropdown-content {   定義當滑鼠懸停在下拉式選單的觸發點上時，下拉式選單的樣式
            display: block;   /*使用block呈現上下排列*/   下拉式選單顯示出來
        }
        li.dropdown:hover{    定義當滑鼠懸停在具有 .dropdown 類別的列表項上時的樣式
            background-color: #333;  /*設定背景顏色*/  設置背景顏色為深灰色
        }
        .dropdown-content {  /*設定下拉選單內容格式*/   設置下拉式選單的樣式
            display: none;    默認情況下，將下拉式選單設置為隱藏
            position: absolute;   將下拉式選單設置為絕對定位，以便它能夠準確地相對於其父元素定位
            background-color: #333;   背景顏色為深灰色
            min-width: 160px;  最小寬度為160像素
            z-index: 1;   下拉式選單的堆疊順序設置為1
        }
        .dropdown-content a {/*設定下拉選單連結內容格式*/  設置下拉式選單中超連結的樣式
            color: black;    設置文字顏色為黑色
            padding: 12px 16px;  設置上下和左右的內邊距
            text-decoration: none;  移除超連結的文字下劃線
            display: block;   下拉式選單顯示出來
            text-align: left;    文字靠左對齊
        }

        /* slider */
        .slider{
            background-color: black;  slider類別的元素的背景顏色設置為黑色
        }
        /* banner*/
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);    banner類別的元素的背景設置為一個線性漸變，從#ABDCFF到#0396FF
            padding:30px;   元素內容的上下左右內邊距設置為30px
        }
        .banner h1{
            padding: 20px;   banner內部的<h1>元素的內邊距設置為20px
        }        
        /*faculty*/
        .faculty {
            display: block;    faculty類別的元素的顯示方式設置為區塊級元素（display: block;），這意味著它將佔據父元素的整個寬度
            justify-content: center;   將內容居中對齊
            background-color:white;  背景顏色設置為白色
            padding:40px;   上下左右內邊距設置為40px
        }
        .faculty h2 {
            font-size: 25px;   字體大小設置為25px
            color: rgb(50,51,52);  文字顏色設置為RGB值為(50,51,52)的深灰色
            padding-bottom:40px;  元素底部添加40px的內邊距
        }
        .faculty .container {
            /*border:1px solid red;*/    
            display: flex;     將擁有.faculty類別下的.container類別的元素設置為彈性佈局，子元素水平排列，並在主軸上等距分佈
            justify-content: space-around;
            align-items: center;    對齊子元素居中
        }
        .faculty .teacher{
            /*border:1px solid blue;*/
            display:block;  將擁有.faculty類別下的.teacher類別的元素設置為區塊級元素，這樣它將佔據父元素的整個寬度
            text-decoration: none;  移除超連結的文字下劃線
        }
        .faculty .teacher img{
            height: 200px;    將擁有.faculty類別下的.teacher類別的元素內的圖像設置為高度200px，寬度200px
            width: 200px;
        }
        .faculty .teacher h3{
            color: White;   將擁有.faculty類別下的.teacher類別的元素內的<h3>元素的文字顏色設置為白色
            background-color: rgba(39,40,34,.500);  背景顏色為RGBA值為(39,40,34,.500)的半透明黑色
            text-align: center;             文字居中對齊
        }
        /*contact*/
        .contact {
            display: block;         將.contact元素設置為區塊級元素，使其在頁面上佔據一個區域
            justify-content: center;  在主軸上水平居中對齊
            margin-top: 30px;  上方30px的外邊距
            margin-bottom: 30px;       下方30px的外邊距    
        }
        .contact h2{
            color: rgb(54, 82, 110);   文字顏色設置為RGB值為(54, 82, 110)的深藍色
            font-size: 25px;  字體大小設置為25px
        }
        .contact .infos{
            display:flex;    將擁有.contact類別下的.infos類別的元素設置為彈性佈局，子元素水平排列，並在主軸上等距分佈
            margin-top: 30px;   在交叉軸上對齊子元素居中
            justify-content: center;  上方添加30px的外邊距
        }
        .contact .infos .left{
            display:block;    將擁有.contact類別下的.infos類別內的.left類別的元素設置為區塊級元素，使其佔據整個父元素的寬度
            text-align: left;   設置為左對齊
            margin-right: 30px;  右側添加30px的外邊距
        }
        .contact .infos .left b{
            display:block;   將擁有.contact類別下的.infos類別內的.left類別內的<b>元素設置為區塊級元素
            text-align: left;  文字對左對齊
            margin-top: 10px;  上方添加10px的外邊距
            text-decoration: bold;  
            color: Gray;  文字顏色設置為灰色
            font-size: 18px;   文字大小設置為18px
            line-height: 18px;   設置行高為18px
        }
        .contact .infos .left span{
            display:block;   將擁有.contact類別下的.infos類別內的.left類別內的<span>元素設置為區塊級元素
            text-align: left;  文字對左對齊
            margin-top: 10px;  上方添加10px的外邊距
            color: rgba(39,40,34,0.5);    文字顏色設置為RGBA值為(39,40,34,0.5)的深灰色
            font-size: 16px;   文字大小設置為16px
            padding-left: 27px;    左側添加27px的內邊距
        } 
        .contact .infos .right{   將擁有.contact類別下的.infos類別內的.right類別的元素設置為區塊級元素
            height: 200px;          高度設置為200px      
        }
        .contact .infos .right iframe{ 
            width: 100%;   元素的寬度100%
            height: 100%;  高度設置為100%
            border: 1px solid rgba(39,40,34,0.50);    將邊框設置為1px寬的RGBA值為(39,40,34,0.50)的深灰色，具有50%的不透明度
        }
        /*footer*/
        .footer{
            display: flex;   將具有.footer類別的元素設置為彈性盒子（flexbox）
            justify-content: center;   居中對齊內容
            background-color: rgb(25,26,30);  背景顏色設置為RGB值為(25,26,30)的深灰色
            padding: 30px 0;   上下方向上添加30px的內邊距，左右方向上無內邊距
        }
        /*登入畫面css*/
        .modal {
            display: none; /* Hidden by default */  將具有.modal類別的元素設置為隱藏狀態（display: none），默認不可見
            position: fixed; /* Stay in place */  將元素定位方式設置為固定（position: fixed），使其固定在視窗中，不隨滾動而移動
            z-index: 1; /* Sit on top */  將元素的堆疊順序設置為最上層（z-index: 1），使其位於其他元素之上
            right: 50;   將元素的右側固定到視窗的50%位置
            top: 50;    將元素的上方固定到視窗的50%位置
            width: 20%; /* Full width */   寬度為視窗寬度和高度的20%
            height: 20%; /* Full height */  高度為視窗寬度和高度的20%
            overflow: auto; /* Enable scroll if needed */   如果內容超出元素的高度，則允許垂直方向上的滾動
            background-color: rgba(255,255,255,0.9); /* Black w/ opacity */  背景顏色設置為RGBA值為(255,255,255,0.9)的白色
            padding-top: 50px;  在元素頂部添加50px的內邊距
        }  /*登入畫面css*/
        /*佈告欄*/
        .bulletin{
            display: block;   將具有.bulletin類別的元素設置為塊級元素（display: block）
            justify-content: center;  居中對齊內容
            background-color: rgb(255,204,153);  背景顏色設置為RGB值為(255,204,153)的淺黃色
            padding: 30px 0;  在上下方向上添加30px的內邊距，左右方向上無內邊距

        }
        .bulletin h1{
            padding:10px;    上下內邊距設置為10px，左右內邊距保持默認
        }
        .bulletin table{
            border-collapse:collapse;  設置佈告欄內的表格（<table>）的邊框顯示方式為合併
            font-family: 微軟正黑體;  文字字體設置為微軟正黑體
            font-size:16px;   表格內的文字字體大小設置為16px
            border:1px solid #000;  表格的邊框為1px寬的黑色實線
        }
        .bulletin table th{
            background-color: #abdcff;    表頭單元格的背景顏色為淺藍色
            color: #ffffff;   表頭單元格中的文字顏色設置為白色
        }
        .bulletin table td{
            background-color: #ffffff;  背景顏色為白色
            color: #0396ff;   文字顏色設置為深藍色
        }
    </style>
    </head>
    <body>
        <div class="top">    網站的頂部
            <div class="container">  包裹網站頂部的內容
                <div class="logo">   顯示網站的標誌和名稱
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">  圖片元素
                  明新科技大學資訊管理系  網站的名稱
                </div>
                <div class="top-nav">  頂部的導航連結
                  <a href=>明新科大</a> 超連結元素，連結到明新科大
                  <a href=>明新管理學院</a>  超連結元素，連結到明新管理學院
                  <!---跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>   當點擊時會觸發JavaScript函數，將id為"login"的元素的顯示樣式設置為"block"，從而顯示登入畫面
                  <div id="login" class="modal">  登入畫面的彈出窗口
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>  當點擊時會觸發JavaScript函數，將id為"login"的元素的顯示樣式設置為"none"，從而隱藏登入畫面
                    <form method=post action="10.login.php">    表單元素
                        帳號：<input type=text name="id"><br />   輸入帳號
                        密碼：<input type=password name="pwd"><p></p>    輸入密碼
                        <input type=submit value="登入"> <input type=reset value="清除">  重置按鈕
                    </form>    表單的結束
                  </div>  
                  <!---登入畫面-->
                </div>
              </div>
        </div>
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>   包含了一個超連結，點擊後將跳轉到頁面中的"home"
                <li><a href="#introduction">系所簡介</a></li>   包含了一個超連結，點擊後將跳轉到頁面中
                <li  class="dropdown"><a href="#faculty">成員簡介</a>   下拉式選單
                    <div class="dropdown-content">  下拉式選單的內容區域，包含了成員簡介的各個選項
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
        <div class="slider">
            <div class="flexslider">   用於定義圖片輪播區域
                <ul class="slides">  包裹圖片輪播中的各個幻燈片
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!---佈告欄--->
        <div class="bulletin">
           <h1>最新公告</h1>    "最新公告"標題
            <?php   PHP代碼區塊   這是一個<div>元素，具有類名"bulletin"，用於定義佈告欄區域
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                $result=mysqli_query($conn, "select * from bulletin");
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!---佈告欄--->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>    顯示一個 Google 地圖
                    </div>
                </div>
        </div>
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>
