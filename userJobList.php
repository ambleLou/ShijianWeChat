<?php
session_start();
$SearchTimeType=$_GET['SearchTimeType'];
if(''==$SearchTimeType){
    $SearchTimeType=1;
    $UserID='';
    $StatusID='';
}else{
    $UserID=$_SESSION['MyUserID'];
    $StatusID=$_GET['StatusID'];
}
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
</head>
<body>

<div id="section_container">
    <section id="list_job_section" data-role="section" class="active">
        <header>
            <div class="titlebar">
                <h1>兼职列表</h1>
                <div class="css_search" id="search" >
                    <form id="demo-b">
                        <input type="search" placeholder="Search" id="searchname" onkeyup="searchName()">
                    </form>
                </div>
            </div>
        </header><!--verticle -->
        <article data-role="article" id="article_user" class="active" data-scroll="pull" style="top: 44px;bottom:60px;">
            <div class="scroller">

                <ul class="listitem" id="job_list">
                    <hr />

                </ul>
            </div>
        </article>
        <div class="menubar" style="bottom:0px;background-color: #FFFFFF">
            <a id="toggle_register" class="menu" data-role="tab" href="jobList.php"
               style="color: #1b1b1b;border-top:1px solid #1abc9c;">
                <i class="fa fa-th fa-2x"></i>
                <span class="menu-text">所有兼职</span>
            </a>
            <a id="toggle_PersonInfo" class="menu" data-role="tab" href="index_user.php"
               style="color: #1b1b1b;border-top:1px solid #1abc9c;">
                <i class="fa fa-user fa-2x"></i>
                <span class="menu-text">个人中心</span>
            </a>
        </div>
    </section>
</div>
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
    $('.ui-searchbar').tap(function(){
        $('.ui-searchbar-wrap').addClass('focus');
        $('.ui-searchbar-input input').focus();
    });
    $('.ui-searchbar-cancel').tap(function(){
        $('.ui-searchbar-wrap').removeClass('focus');

    });

    var CurPage=1;
    var PageSize=10;
    var SearchTimeType=<?php echo $SearchTimeType;?>;
    var Name='';
    var UserID='<?php echo $UserID;?>';
    var StatusID='<?php echo $StatusID;?>';
    var JobType='';
    var notInJobType='';

    var sOldValue='';           //储存输入框的值
    startpage=function(){
        MyAjaxFunction('');
    };
    MyAjaxFunction=function(){
        $.ajax({
            type:'GET',
            url: "jobSearch.php" ,
            dataType: 'json',
            data: {CompanyID:(''),JobType:(JobType),SearchTimeType:(SearchTimeType),SearchName:(Name),CurPage:(CurPage),PageSize:(PageSize),UserID:(UserID),JobID:(''),StatusID:(StatusID),notInJobType:(notInJobType)},
            success:function(data){
                if(data==null){
                }else{
                    CurPage+=1;
                    var sdata=data['Data'];
                    $.each(sdata, function(i, item){

                        var jobId=sdata[i].JobTypeID-1;
                        var JobsName=['派单','促销','客服','群众演员','礼仪','服务员','问卷调查','推广','试玩','其他','快递','家教'];
                        var jobClass=['fa-file-text-o','fa-bullhorn','fa-cutlery', 'fa-headphones', 'fa-truck', 'fa-mortar-board', 'fa-gamepad','fa-list'];
                        var jobColor=['#0092C7', '#FF7D48' ,'#F35A4A', '#F26378', '#1fa67a','#A320A3','#27B9F2','#7299A7'];
                        var className=['派单','促销','服务员','客服','快递','家教','试玩','其他'];
                        var jobTypeName=JobsName[jobId];

                        var timefrom=sdata[i].TimeFrom.split(' ')[0];
                        var timeend=sdata[i].TimeTo.split(' ')[0];

                        var jobClassId=className.indexOf(JobsName[jobId]);
                        if(jobClassId==-1){
                            jobClassId=className.indexOf('其他');
                            jobTypeName='其他';
                        }
                        var li='<a href="JobDetail.php?JobID='+sdata[i].JobID +'&TimeFrom='+sdata[i].TimeFrom+'&TimeTo='+sdata[i].TimeTo+'">'+
                            '<li> <div class="img bigsquare" style="background-color: '+jobColor[jobClassId]+';margin-right: 10px;">'+
                            '<i class="bigsquare-icon fa '+jobClass[jobClassId]+'" style="color:#ffffff;margin: -5px 0px 0px 0px;"></i>'+
                            '<span class="tip">'+jobTypeName+'</span>'+
                            '</div> <div class="text">'+sdata[i].Title+
                            '<i class="right iconfont iconline-fav"><span style="color: #F26649;">'+sdata[i].Price+'</span>元/天</i>'+
                            '<small>工作地点：'+sdata[i].Location+'<span class="right">'+timefrom+'至'+timeend+'</span></small>'+
                            '</div> </li> </a>';

                        $('#job_list').append(li);

                    });

                }
            }

        });
    };

    function searchName(){
        var Jobname=$('#searchname').val();
        if (sOldValue != Jobname)
        {
            $("#job_list").empty();
            $("#job_list").append('<hr>');
            Name=Jobname;
            CurPage=1;
            MyAjaxFunction();
            sOldValue = Jobname;
        }
    }

    $('#article_user').on('articleload',function(){
        startpage();
    });
    $('#article_user').on('refreshInit', function(){
        var refresh = A.Refresh(this);
        refresh.on('pulldown', function(){
            //alert('ok,pulldown');
            refresh.refresh();
        });
        //上拉
        refresh.on('pullup', function(){
            $.ajax({
                    type:'GET',
                    url: "chkPhone.php" ,
                    dataType: 'json',
                    data: {CompanyID:(''),JobType:(JobType),SearchTimeType:(SearchTimeType),SearchName:(Name),CurPage:(CurPage),PageSize:(PageSize),UserID:(UserID),JobID:(''),StatusID:(StatusID),notInJobType:(notInJobType)},
                    success:function(data){
                        if(data==null){
                        }else{
                            CurPage+=1;
                            var sdata=data['Data'];
                            $.each(sdata, function(i, item){

                                var jobId=sdata[i].JobTypeID-1;
                                var JobsName=['派单','促销','客服','群众演员','礼仪','服务员','问卷调查','推广','试玩','其他','快递','家教'];
                                var jobClass=['fa-file-text-o','fa-bullhorn','fa-cutlery', 'fa-headphones', 'fa-truck', 'fa-mortar-board', 'fa-gamepad','fa-list'];
                                var jobColor=['#0092C7', '#FF7D48' ,'#F35A4A', '#F26378', '#1fa67a','#A320A3','#27B9F2','#7299A7'];
                                var className=['派单','促销','服务员','客服','快递','家教','试玩','其他'];
                                var jobTypeName=JobsName[jobId];

                                var timefrom=sdata[i].TimeFrom.split(' ')[0];
                                var timeend=sdata[i].TimeTo.split(' ')[0];

                                var jobClassId=className.indexOf(JobsName[jobId]);
                                if(jobClassId==-1){
                                    jobClassId=className.indexOf('其他');
                                    jobTypeName='其他';
                                }
                                var li='<a href="JobDetail.php?JobID='+sdata[i].JobID +'&TimeFrom='+sdata[i].TimeFrom+'&TimeTo='+sdata[i].TimeTo+'">'+
                                    '<li> <div class="img bigsquare" style="background-color: '+jobColor[jobClassId]+';margin-right: 10px;">'+
                                    '<i class="bigsquare-icon fa '+jobClass[jobClassId]+'" style="color:#ffffff;margin: -5px 0px 0px 0px;"></i>'+
                                    '<span class="tip">'+jobTypeName+'</span>'+
                                    '</div> <div class="text">'+sdata[i].Title+
                                    '<i class="right iconfont iconline-fav"><span style="color: #F26649;">'+sdata[i].Price+'</span>元/天</i>'+
                                    '<small>工作地点：'+sdata[i].Location+'<span class="right">'+timefrom+'至'+timeend+'</span></small>'+
                                    '</div> </li> </a>';
                                $('#job_list').append(li);
                            });

                        }
                    }

                }

            );

            refresh.refresh();
        });
    });
    searchJobType=function(e){
        CurPage=1;
        $("#job_list").empty();
        $("#job_list").append('<hr>');
        if(10==parseInt(e.id)){
            JobType='';
            notInJobType='1,2,3,6,9,11,12';
        }else{
            JobType= e.id;
            notInJobType='';
        }
        MyAjaxFunction();
    }

</script>


</body>
</html>