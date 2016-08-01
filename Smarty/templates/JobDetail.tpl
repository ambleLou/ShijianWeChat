<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/userDetail.js"></script>
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



<table width="580" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center" bgcolor="#F0F0F0">发布公司</td>
  	<td align="center" bgcolor="#F0F0F0">兼职标题</td>
    <td align="center" bgcolor="#F0F0F0">兼职类型</td>
    <td align="center" bgcolor="#F0F0F0">兼职开始时间</td>
    <td align="center" bgcolor="#F0F0F0">兼职结束时间</td>
    <td align="center" bgcolor="#F0F0F0">每日工资</td>
     <td align="center" bgcolor="#F0F0F0">兼职地点</td>
     <td align="center" bgcolor="#F0F0F0">要求性别</td>
     <td align="center" bgcolor="#F0F0F0">需求人数</td>
     <td align="center" bgcolor="#F0F0F0">已报名人数</td>
     <td align="center" bgcolor="#F0F0F0">是否包吃</td>
     <td align="center" bgcolor="#F0F0F0">是否包住</td>
     <td align="center" bgcolor="#F0F0F0">预定目标</td>
     <td align="center" bgcolor="#F0F0F0">其他信息</td>
  </tr>

  <tr>
 {section name=job_id loop=$job}
    <td align="center">{$job[job_id].CompanyName}</td>
<td align="center">{$job[job_id].Title}</td>
<td align="center">{$job[job_id].TypeName}</td>
<td align="center">{$job[job_id].TimeFrom}</td>
<td align="center">{$job[job_id].TimeTo}</td>
<td align="center">{$job[job_id].Price}</td>
<td align="center">{$job[job_id].Location}</td>
{/section}
{section name=jobdetail_id loop=$jobdetail}
    <td align="center">{$jobdetail[jobdetail_id].NeedSex}</td>
<td align="center">{$jobdetail[jobdetail_id].NeedQty}</td>
<td align="center">{$jobdetail[jobdetail_id].AvailQty}</td>
<td align="center">{$jobdetail[jobdetail_id].GatherTime}</td>
<td align="center">{$jobdetail[jobdetail_id].GatherLoc}</td>
<td align="center">{$jobdetail[jobdetail_id].Description}</td>
<td align="center">{$jobdetail[jobdetail_id].HasInterView}</td>
<td align="center">{$jobdetail[jobdetail_id].HasEatting}</td>
<td align="center">{$jobdetail[jobdetail_id].HasSleepping}</td>
<td align="center">{$jobdetail[jobdetail_id].Others}</td>
<td align="center"><a href="jobapply.php?JobID={$jobdetail[jobdetail_id].JobID}" >我要报名</a></td>
 {/section}
  </tr>

</table>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>



