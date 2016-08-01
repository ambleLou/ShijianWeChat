<?php
$JobID=$_GET['JobID'];
?>
<!-- HTML5文件 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>我的兼职</title>
    <link rel="stylesheet" href="assets/agile/css/agile.layout.css">
    <link rel="stylesheet" href="assets/agile/css/flat/flat.component.css">
    <link rel="stylesheet" href="assets/agile/css/flat/flat.color.css">
    <link rel="stylesheet" href="assets/agile/css/flat/iconline.css">
    <link rel="stylesheet" href="assets/app/css/app.css">
    <link rel="stylesheet" href="frozen/css/frozen.css">


    <!-- js-->
    <script src="assets/third/jquery/jquery-2.1.3.min.js"></script>
    <script src="assets/third/jquery/jquery.mobile.custom.min.js"></script>
    <script src="assets/third/iscroll/iscroll-probe.js"></script>
    <script src="assets/third/arttemplate/template-native.js"></script>
    <script src="frozen/js/frozen.js"></script>
    <script src="http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304"></script>
    <!-- agile -->
    <script type="text/javascript" src="assets/agile/js/agile.js"></script>
    <!--- bridge --->
    <script type="text/javascript" src="assets/bridge/exmobi.js"></script>
    <script type="text/javascript" src="assets/bridge/agile.exmobi.js"></script>
    <!-- app -->
    <script type="text/javascript" src="assets/app/js/app.js"></script>
</head>
<body>
<div id="section_container">
    <section id="list_more_section" data-role="section" class="active">
        <header>
            <div class="titlebar">
                <a data-toggle="back" href="#"><i class="iconfont iconline-arrow-left"></i></a>
                <h1>兼职详情</h1>
            </div>
        </header>
        <article data-role="article" id="main_article" data-scroll="verticle" class="active" style="top:44px;bottom:0px;">


            <div class="scroller">


                <ul class="listitem">

                    <li>
                        <!--<i class="ricon iconfont iconline-arrow-right"></i>-->
                        <div style="background-image:url(assets/app/img/ca.png);" class="img appimg" id="JobType"></div>
                        <div class="text" id="Title">
                            电话问卷调查
                            <i class="right ">100.00元/天</i>
                            <small><i class="iconfont iconline-user">已签约2人/招聘20人</i><font class="right">月结</font></small>
                        </div>
                    </li>
                    <li>
                        <div class="form-common">
                            <label class="label-left">发布商家:</label>
                            <label class="label-right">会展中心</label>
                            <label class="label-left">工作日期:</label>
                            <label class="label-right">11.08-12.07</label>
                            <label class="label-left">工作时间:</label>
                            <label class="label-right">9:00-20:30</label>
                            <label class="label-left">性别要求:</label>
                            <label class="label-right">2男3女</label>
                            <label class="label-left">集合时间:</label>
                            <label class="label-right">11.08,8:00</label>
                            <label class="label-left">集合地点:</label>
                            <label class="label-right">沙湾会展中心</label>
                            <label class="label-left">是否包吃:</label>
                            <label class="label-right">是</label>
                            <label class="label-left">是否包住:</label>
                            <label class="label-right">否</label>
                            <label class="label-left">工作描述:</label>
                            <label class="label-right">搬砖，搬砖，搬砖，搬砖，搬砖，搬砖，搬砖，搬砖，搬砖，</label>
                        </div>
                    </li>
                    <li>
                        <span class=" iconline-map-location" >工作地点</span><br>
                        北教场西洋路8号五楼
                    </li>
                </ul>

            </div>
        </article>
    </section>
</div>
<footer>
    <nav class="menubar">
        <a class="menu active" data-role="tab" href="#page1" data-toggle="page">
            <span class=" iconfont iconline-chat-bubbles"></span>
            <span class="menu-text">咨询</span>
        </a>
        <a class="menu" data-role="tab" href="#page2" data-toggle="page">
            <span class=" iconfont iconline-cursor"></span>
            <span class="menu-text">我要报名</span>
        </a>
    </nav>
</footer>

<script  type="text/javascript">
    $(document).ready(
        function(){
            page_Load();
        }
    );


</script>

</body>
</html>
