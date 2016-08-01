<?php
session_start();
$UserID=$_SESSION['MyUserID'];
$JobID=$_GET['JobID'];
$TimeFrom=$_GET['TimeFrom'];
$TimeTo=$_GET['TimeTo'];
?>

<!-- HTML5文件 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>实兼-放心兼职</title>
    <link rel="stylesheet" href="Font-Awesome-master/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/agile/css/agile.layout.css">
    <link rel="stylesheet" href="assets/agile/css/flat/flat.component.css">
    <link rel="stylesheet" href="assets/agile/css/flat/flat.color.css">
    <link rel="stylesheet" href="assets/component/timepicker/timepicker.css">
    <link rel="stylesheet" href="assets/app/css/app.css">
    <link rel="stylesheet" href="css/star.css">
</head>
<body>
<div id="section_container">
    <section id="list_more_section" data-role="section" class="active">
        <article data-role="article" id="main_article" data-scroll="verticle" class="active" style="bottom:60px;position:relative;">
            <div id="main_scroller" class="scroller" style="height: 600px;">
                <div class="titlebar">
                    <h1>兼职详情</h1>
                </div>
                <ul class="listitem">
                    <li>
                        <div  class="img bigsquare" style="margin-right: 10px;" id="JobTypeIDColor">
                            <i class="bigsquare-icon fa " style="color:#ffffff;" id="JobTypeID"></i>
                            <span class="tip" id="JobTypeName"></span>
                        </div>
                        <div class="text">
                            <span id="Title"></span>
                            <i class="right iconfont iconline-fav"><span style="color: #F26649;" id="Price"></span>元/天</i>
                            <small>工作地点：<span id="Location"> </span><span class="right"><p id="TimeFrom"></p>至<p id="TimeTo"></p></span></small>
                            <small>报名人数:<span id="AvailQty"></span>/总人数:<span id="NeedQty"></span></small>
                        </div>
                    </li>
                </ul>
                <div class="form-common">
                    <label class="label-left">
                        <i class="fa fa-copyright fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;发布商家:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="CompanyName"></label>
                    <label class="label-left">
                        <i class="fa fa-intersex fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;性别要求:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="NeedSex"></label>
                    <label class="label-left">
                        <i class="fa fa-calendar-minus-o fa-1-5x"></i>
                        &nbsp;&nbsp;工作时间:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="WorkTime"></label>
                    <label class="label-left">
                        <i class="fa fa-clock-o fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;集合时间:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="GatherTime"></label>
                    <label class="label-left">
                        <i class="fa fa-compass fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;集合地点:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="GatherLoc"></label>
                    <label class="label-left">
                        <i class="fa fa-file-excel-o fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;职位简介:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="Description"></label>
                </div>
                <hr/>
                <div class="form-common">
                    <label class="label-left">
                        <i class="fa fa-street-view fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;是否面试:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="HasInterView"> </label>
                    <label class="label-left">
                        <i class="fa fa-glass fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;是否包吃:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="HasEatting"> </label>
                    <label class="label-left">
                        <i class="fa fa-hotel fa-1-5x"></i>
                        &nbsp;&nbsp;是否包住:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="HasSleepping"> </label>
                    <label class="label-left">
                        <i class="fa fa-flag-o fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;预定目标:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" id="Task"> </label>
                    <label class="label-left">
                        <i class="fa fa-plus-square fa-1-5x"></i>
                        &nbsp;&nbsp;&nbsp;其他信息:&nbsp;&nbsp;&nbsp;
                    </label>
                    <label class="label-right" ><small id="Others"> </small></label>
                </div>
            </div>
        </article>
    </section>
</div>
<footer>
    <div class="menubar" style="bottom:0px;">
        <a id="zixun" class="menu"  style="background-color: #1abc9c">
            <i class="fa fa-comments-o fa-2x" style="color: #ffffff;"></i>
            <span class="menu-text" style="color: #ffffff;">咨询</span>
        </a>
        <a id="toggle_PersonInfo" class="menu" value="0" onclick="userApply(this)" >
            <i class="fa fa-bell-o fa-2x" style="color: #ffffff;"></i>
            <span class="menu-text" style="color: #ffffff;" id="userApplyStatus"></span>
        </a>
    </div>
</footer>
<script type="text/html" id="evaluate_template">
    <div style="padding:10px 20px;">
        <div style="text-align:center;font-size:20px;color:#3498DB;font-weight:600;margin:5px 0;">评价</div>
        <div class="starts">
            <ul id="pingStar">
                <li rel="1" class="fa fa-star-o" title="特别差"></li>
                <li rel="2" class="fa fa-star-o" title="很差"></li>
                <li rel="3" class="fa fa-star-o" title="一般般"></li>
                <li rel="4" class="fa fa-star-o" title="很好"></li>
                <li rel="5" class="fa fa-star-o" title="非常好"></li>
                <span id="starDesc" style="padding-top: 0px"></span>
            </ul>
            <input type="hidden" value="" id="startP">
        </div>
        <div class="rowspace"></div>
        <textarea id="evaluate_text" class="full-width" placeholder="请输入你的评价，少于300字" style="height: 100px;resize: none;overflow-y:hidden"></textarea><div class="rowspace"></div>
        <button class="width-full">确认评价</button>
    </div>
</script>
<!--- third --->
<script src="assets/third/zepto/zepto.min.js"></script>
<script src="assets/third/iscroll/iscroll-probe.js"></script>
<script src="assets/third/arttemplate/template-native.js"></script>
<!-- agile -->
<script type="text/javascript" src="assets/agile/js/agile.js"></script>
<!--- bridge --->
<script type="text/javascript" src="assets/bridge/exmobi.js"></script>
<script type="text/javascript" src="assets/bridge/agile.exmobi.js"></script>
<!-- app -->
<script src="assets/component/timepicker/agile.timepicker.js"></script>
<script type="text/javascript" src="assets/component/extend.js"></script>
<script type="text/javascript" src="assets/app/js/app.js"></script>


<script type="text/javascript">

    var JobID='<?php echo $JobID; ?>';
    var UserID='<?php echo $UserID;?>';
    var TimeFrom='<?php echo $TimeFrom;?>';
    var TimeTo='<?php echo $TimeTo;?>';
    var NowDate=getNowFormatDate();
    var SearchTimeType='';
    if(TimeFrom>=NowDate){
        SearchTimeType=1;
    }else if(NowDate<=TimeTo){
        SearchTimeType=2;
    }else{
        SearchTimeType=3;
    }

    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var seperator2 = ":";
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
            + " " + date.getHours() + seperator2 + date.getMinutes()
            + seperator2 + date.getSeconds();
        return currentdate;
    }

    $(document).ready(function(){
        var mainColor = $('#mainColor').css("background-color");
        $('.menubar').css("background-color",mainColor);
        page_Load();
    });

    function  userApply(e){
        if("我要报名"==$('#userApplyStatus').html()){
            if(SearchTimeType==1){
                A.confirm('提示','确定报名吗？', function(){
                    User_AJAX(0);
                });
            }else{
                A.alert("工作已经开始，不能报名");
            }

        }else if("您已报名，点击取消报名"==$('#userApplyStatus').html()){
            A.confirm('提示','确定取消报名吗？', function(){
                User_AJAX(1);
            });

        } else if("已被录用，点击爽约"==$('#userApplyStatus').html()){
            A.confirm('提示','确定爽约吗？', function(){
                User_AJAX(2);
            });
        } else if("已完成，点击进行评论"==$('#userApplyStatus').html()){
            //A.confirm('提示','确定评价吗？', function(){
            EvaluationAjax(e);

            //});
        }
    }

    function initStar(){
        var m = $('#starDesc');
        var stars = $("#pingStar li");
        var input = $('#startP');  //保存所选值
        clearOne = function(i){
            $(stars[i]).attr("class", 'fa fa-star-o');
        };
        selectOne = function(i){
            $(stars[i]).attr("class",'fa fa-star');
        };
        clearAll = function () {
            for (var i = 0; i < stars.length; i++) {
                clearOne(i);
            }
        };
        for (var i = 0; i < stars.length; i++) {
            $(stars[i]).on(A.options.clickEvent, function(){
                var q = $(this).attr("rel");
                clearAll();
                input.val(q);
                for (var i = 0; i < q; i++) {
                    selectOne(i);
                }
                m.text($(this).attr("title"))
            });
        };
    }
    function EvaluationAjax(e){
        if($(e).attr("value")=="0"){
            $(e).attr("value","1");
            var $popup = A.popup({
                html: $('#evaluate_template').html(),
                css : {width:'auto'},
                pos : 'center'
            });
            $popup.popup.find('button').on(A.options.clickEvent, function(){
                A.confirm('提示','确定评价吗？', function(){
                    //写入评价函数
                    var assessToType = $('#startP').val();
                    var assessTo = $('#evaluate_text').val();
                    $.ajax({
                        type:'POST',
                        url:'userEvaluateSave.php',
                        dataType:'json',
                        data:{JobID:(JobID),UserID:(UserID),AssessToType:(assessToType),AssessTo:(assessTo)},
                        success:function(data){
                            if(false!=data['reBack']){
                                A.alert("评价成功");
                                $('#userApplyStatus').html("已完成");
                            }else{
                                A.alert("评价失败");
                                $(e).attr("value","0");
                            }
                        }
                    });

                    $popup.close();
                });
            });
            initStar();
        }
        else {
            A.closePopup();
            $(e).attr("value","0");
        }
    }



    function User_AJAX(ApplyType){

        $.ajax({
            type:'GET',
            url:"userApply.php",
            dataType:'json',
            data:{JobID:(JobID),ApplyType:(ApplyType),UserID:(UserID)},
            success:function(data){

                if(true==data['login']){
                    if(5==ApplyType){
                        if("false"==data['StatusID']){
                            if(SearchTimeType==1){
                                $('#userApplyStatus').html("我要报名");
                            }else if(SearchTimeType==2){
                                $('#userApplyStatus').html("工作已经开始，不能报名");
                            }else if(SearchTimeType==3){
                                $('#userApplyStatus').html("工作已经结束，不能报名");
                            }

                        }else if(0==parseInt(data['StatusID'])){
                            if(SearchTimeType==1){
                                $('#userApplyStatus').html("您已报名，点击取消报名");
                            }else if(SearchTimeType==2){
                                $('#userApplyStatus').html("工作已经开始，您未被录用");
                            }else if(SearchTimeType==3){
                                $('#userApplyStatus').html("工作已经结束");
                            }
                        }else if(1==parseInt(data['StatusID'])) {
                            if(SearchTimeType==1){
                                $('#userApplyStatus').html("已被录用，点击爽约");
                            }else if(SearchTimeType==2){
                                $('#userApplyStatus').html("已被录用，点击爽约");
                            }else if(SearchTimeType==3){
                                $('#userApplyStatus').html("工作已经结束，等待商家进行评价");
                            }
                        }else if(2==parseInt(data['StatusID'])){
                            $('#userApplyStatus').html("您已爽约");
                        }else if(3==parseInt(data['StatusID'])){
                            if('false'==data['AssessTo']){
                                $('#userApplyStatus').html("已完成，点击进行评论");
                            }else{
                                $('#userApplyStatus').html("已完成");
                            }

                        }
                    }else if(0==ApplyType){
                        if("false"==data['StatusID']){
                            A.alert("报名失败");
                            if('false'==data['ApplyNumber']){
                                A.alert("人数已满");
                            }
                            if("false"==data['Sex']){
                                A.alert("性别冲突");
                            }
                            if("false"==data['ReturnTime']){
                                A.alert("兼职时间冲突");
                            }
                            $('#userApplyStatus').html("我要报名");
                        }else if(0==parseInt(data['StatusID'])){
                            A.alert("您已报名，等待录用");
                            $('#userApplyStatus').html("您已报名，点击取消报名");
                        }
                    }else if(1==ApplyType){
                        if("false"==data['StatusID']){
                            A.alert("取消成功");
                            $('#userApplyStatus').html("我要报名");
                        }else if(0==parseInt(data['StatusID'])){
                            A.alert("取消失败，请重试");
                            $('#userApplyStatus').html("您已报名，点击取消报名");
                        }else if(1==parseInt(data['StatusID'])) {
                            A.alert("取消失败，您已被录用");
                            $('#userApplyStatus').html("已被录用，点击爽约");
                        }else if(2==parseInt(data['StatusID'])){
                            A.alert("取消失败，您已爽约");
                            $('#userApplyStatus').html("您已爽约");
                        }else if(3==parseInt(data['StatusID'])){
                            A.alert("取消失败，您已完成");
                            $('#userApplyStatus').html("已完成，点击进行评论");
                        }
                    }else if(2==ApplyType){
                        if("false"==data['StatusID']){
                            A.alert("爽约失败，您尚未报名");
                            $('#userApplyStatus').html("我要报名");
                        }else if(0==parseInt(data['StatusID'])){
                            A.alert("爽约失败，您未被录用");
                            $('#userApplyStatus').html("您已报名，点击取消报名");
                        }else if(1==parseInt(data['StatusID'])) {
                            A.alert("爽约失败，请重试");
                            if("false"==data['ReturnTime']){
                                A.alert("爽约时间过晚");
                            }
                            $('#userApplyStatus').html("已被录用，点击爽约");
                        }else if(2==parseInt(data['StatusID'])){
                            A.alert("爽约成功，您已爽约");
                            $('#userApplyStatus').html("您已爽约");
                        }else if(3==parseInt(data['StatusID'])){
                            A.alert("爽约失败，您已完成");
                            $('#userApplyStatus').html("已完成，点击进行评论");
                        }

                    }

                }else{
                    if(5!=ApplyType){
                        A.alert("请先完善个人简历登录");
                        top.location.href='index_user.php';
                    }else{
                        if(SearchTimeType==1){
                            $('#userApplyStatus').html("我要报名");
                        }else if(SearchTimeType==2){
                            $('#userApplyStatus').html("工作已经开始，不能报名");
                        }else if(SearchTimeType==3){
                            $('#userApplyStatus').html("工作已经结束，不能报名");
                        }
                    }
                }
            }
        });
    }

    function page_Load(){
        var JobID='<?php echo $JobID; ?>';
        $.ajax({
            type:'GET',
            url:"jobDetailSearch.php",
            dataType:'json',
            data:{JobID:(JobID)},
            success: function (data) {
                $.each(data,function(i,item){

                    var jobId=data[i].JobTypeID-1;
                    var JobsName=['派单','促销','客服','群众演员','礼仪','服务员','问卷调查','推广','试玩','其他','快递','家教'];
                    var jobClass=['fa-file-text-o','fa-bullhorn','fa-cutlery', 'fa-headphones', 'fa-truck', 'fa-mortar-board', 'fa-gamepad','fa-list'];
                    var jobColor=['#0092C7', '#FF7D48' ,'#F35A4A', '#F26378', '#1fa67a','#A320A3','#27B9F2','#7299A7'];
                    var jobStyle = ['margin: -5px 0px 0px 3px;','margin: -5px 0px 0px 3px;','margin: -5px 0px 0px 3px;','margin: -5px 0px 0px 2px;','margin: -5px 0px 0px 0px;','margin: -5px 0px 0px -3px;',';margin: -5px 0px 0px 0px;','margin: -5px 0px 0px 0px;'];
                    var className=['派单','促销','服务员','客服','快递','家教','试玩','其他'];
                    var jobTypeName=JobsName[jobId];

                    var timefrom=data[i].TimeFrom.split(' ')[0];
                    var timeend=data[i].TimeTo.split(' ')[0];

                    var jobClassId=className.indexOf(JobsName[jobId]);
                    if(jobClassId==-1){
                        jobClassId=className.indexOf('其他');
                    }
                    //$('#JobTypeIDColor').style="background-color: '+jobColor[jobClassId]+';margin-right: 10px;";
                    $('#JobTypeIDColor').attr('style',"background-color: "+jobColor[jobClassId]+";margin-right: 10px;");
                    //$('#JobTypeID').className="bigsquare-icon fa "+jobClass[jobClassId];
                    $('#JobTypeID').attr('class',"bigsquare-icon fa "+jobClass[jobClassId]);
                    $('#JobTypeID').attr('style',"color:#ffffff;"+jobStyle[jobClassId]);
                    $('#JobTypeName').html(className[jobClassId]);
                    $('#Title').html(data[i].Title);
                    $('#Location').html(data[i].Location);
                    $('#toggle_PersonInfo').attr('style','background-color:'+jobColor[jobClassId]);
                    var TimeFromFrist=data[i].TimeFrom.split(" ");
                    var TimeFromstr=TimeFromFrist[0].split("-");
                    //var TimeFrom=TimeFromstr[1]+"-"+TimeFromstr[2];
                    $('#TimeFrom').html(TimeFromFrist[0]);

                    var TimeToFrist=data[i].TimeTo.split(" ");
                    var TimeTostr=TimeToFrist[0].split("-");
                    // var TimeTo=TimeTostr[1]+"-"+TimeTostr[2];
                    $('#TimeTo').html(TimeToFrist[0]);
                    $('#Price').html(data[i].Price);
                    if(0==parseInt(data[i].NeedSex)){
                        $('#NeedSex').html("男");
                    }else if(1==parseInt(data[i].NeedSex)){
                        $('#NeedSex').html("女");
                    }else{
                        $('#NeedSex').html("男/女");
                    }
                    $('#CompanyName').html(data[i].CompanyName);
                    $('#NeedQty').html(data[i].NeedQty);
                    $('#AvailQty').html(data[i].AvailQty);
                    $('#GatherTime').html(data[i].GatherTime);
                    $('#DisbandTime').html(data[i].DisbandTime);
                    var GatherTimestr1=data[i].GatherTime.split(" ");
                    var GatherTimestr=GatherTimestr1[1].split(":");
                    var GatherTime=GatherTimestr[0]+":"+GatherTimestr[1];

                    var DisbandTimestr1=data[i].DisbandTime.split(" ");
                    var DisbandTimestr=DisbandTimestr1[1].split(":");
                    var DisbandTime=DisbandTimestr[0]+":"+DisbandTimestr[1];

                    var workTime=GatherTime+"-"+DisbandTime;


                    $('#WorkTime').html(workTime);
                    $('#GatherLoc').html(data[i].GatherLoc);
                    $('#Description').html(data[i].Description);
                    if(0==parseInt(data[i].HasInterView)){
                        $('#HasInterView').html("否");
                    }else{
                        $('#HasInterView').html("是");
                    }
                    if(0==parseInt(data[i].HasEatting)){
                        $('#HasEatting').html("否");
                    }else{
                        $('#HasEatting').html("是");
                    }
                    if(0==parseInt(data[i].HasSleepping)){
                        $('#HasSleepping').html("否");
                    }else{
                        $('#HasSleepping').html("是");
                    }

                    $('#Task').html(data[i].Task);
                    $('#Others').html(data[i].Others);
                    if(null==data[i].ContactNumber){   //为空时用默认的电话号码
                        $('#zixun').attr("href","tel:15682058207");
                    }else{                              //不为空时用数据库里面的号码
                        $('#zixun').attr("href","tel:"+data[i].ContactNumber);
                    }
                    A.refresh()

                });
            }
        });
        User_AJAX(5);
    }

    $('#main_article').on('scrollInit', function(){
        var scroll = A.Scroll(this);//已经初始化后不会重新初始化，但是可以得到滚动对象
        scroll.on('scrollTop', function(){
            scroll.refresh();
        });
        //监听滚动到底部事件，可以做一些逻辑操作
        scroll.on('scrollBottom', function(){
            scroll.refresh();
        });
        scroll.refresh();
    });
</script>

</body>
</html>