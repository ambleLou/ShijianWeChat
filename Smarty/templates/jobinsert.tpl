<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/jobinsert.js"></script>
<title>{$title}</title>
</head>

<body>
 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="companyindex.php">首页</a></li>
            <li><a href="jobinsert.php">录入兼职信息</a></li>
            <li><a href="jobDetail.php">查看已发布的兼职</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<form id="job" name="job" action="jobmanage_chk.php" method="post" onSubmit="return chkinput(this)">
 	<table >
 	<tr>
    	<td colspan="5" align="center" valign="middle"><h2></h2>
    	<input id="ID"  name="ID" type="hidden" value="{$ID}" /></td>
    	
    </tr>
    <tr>
      <td ><div align="right">兼职标题：</div></td>
      <td>&nbsp;
          <input id="Title" name="Title" type="text" value="{$Title}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">兼职类型：</div></td>
      <td>&nbsp;
          <input id="JobTypeID" name="JobTypeID" type="text" value="{$JobTypeID}" />
          </td>
          
      
    </tr>
    <tr>
      <td ><div align="right">兼职开始时间：</div></td>
      <td>&nbsp;
          <input id="TimeFrom" name="TimeFrom" type="text" value="{$TimeFrom}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">兼职结束时间：</div></td>
      <td>&nbsp;
          <input id="TimeTo" name="TimeTo" type="text" value="{$TimeTo}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">每日工资：</div></td>
      <td>&nbsp;
          <input id="Price" name="Price" type="text" value="{$Price}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">兼职地点：</div></td>
      <td>&nbsp;
          <input id="Location" name="Location" type="text" value="{$Location}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">要求性别：</div></td>
      <td>&nbsp;
          <input name="NeedSex" type="radio" value="0"/>男
           &nbsp;&nbsp;<input name="NeedSex" type="radio" value="1"/>女
           &nbsp;&nbsp;<input name="NeedSex" type="radio" value="2"/>不限
       </td>
    </tr>
    <tr>
      <td ><div align="right">需求人数：</div></td>
      <td>&nbsp;
          <input id="NeedQty" name="NeedQty" type="text" value="{$NeedQty}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">集合时间：</div></td>
      <td>&nbsp;
          <input id="GatherTime" name="GatherTime" type="text" value="{$GatherTime}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">集合地点：</div></td>
      <td>&nbsp;
          <input id="GatherLoc" name="GatherLoc" type="text" value="{$GatherLoc}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">兼职描述：</div></td>
      <td>&nbsp;
          <input id="Description" name="Description" type="text" value="{$Description}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">是否需要面试：</div></td>
      <td>&nbsp;
          <input  name="HasInterView" type="radio" value="0" />不需要
          &nbsp;&nbsp;<input  name="HasInterView" type="radio" value="1" />需要
          </td>
    </tr>
    <tr>
      <td ><div align="right">是否包吃：</div></td>
      <td>&nbsp;
          <input name="HasEatting" type="radio"  value="0"/>不
           &nbsp;<input name="HasEatting" type="radio"  value="1"/>包吃
          </td>
      
    </tr>
    <tr>
      <td ><div align="right">是否包住：</div></td>
      <td>&nbsp;
          <input name="HasSleepping" type="radio" value="0" />不包住
          &nbsp;&nbsp;<input name="HasSleepping" type="radio" value="1" />包住
      </td>
      
    </tr>
    <tr>
      <td ><div align="right">预定目标：</div></td>
      <td>&nbsp;
          <input id="Task" name="Task" type="text" value="{$Task}" /></td>
      
    </tr>
    <tr>
      <td ><div align="right">其他信息：</div></td>
      <td>&nbsp;
          <input id="Others" name="Others" type="text" value="{$Others}" /></td>
      
    </tr>
   
    <tr>
      <td height="25" colspan="2">&nbsp;
          <input type="submit" value="提交"/>
        &nbsp;&nbsp;
        <input type="reset" value="重写" /></td>
      <td height="25" colspan="3"><div style="color:#FF0000">带“*”号的为必填项</div></td>
    </tr>
    </table>
  </form>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

