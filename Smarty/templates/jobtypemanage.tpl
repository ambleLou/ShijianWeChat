<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/userDetail.js"></script>
<title>兼职类型插入</title>
</head>

<body>


<table>
  <tr>
    <td width="237" height="500" align="center" valign="top">
		<table>
		
			<tr>
			  <td height="296" align="center" valign="top" bgcolor="#FFFFFF">
			  <table>

   <tr>
    <td height="25" align="center" valign="middle" ></td>
    <td height="25" ><a href='jobtypemanage.php?caption=type_manage'>兼职类型查询</a></td>
  </tr>
   <tr>
    <td height="36" align="center" valign="middle" ></td>
    <td height="36" ><a href='jobtypemanage.php?caption=type_insert'>新增兼职类型</a></td>
  <tr>
    <td height="35" >&nbsp;</td>
    <td height="25" >&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="2" height="20"></td>
  </tr>
</table>
			  </td>
			</tr>
		</table>
	</td>
    <td width="653" align="center" valign="top" bgcolor="#f0f0f0">
	<table >
	
		<tr>
			<td width="42" height="34" align="right" valign="middle" background="images/line.jpg">&nbsp;</td>
		    <td width="190" align="left" valign="middle" >{$title}</td>
		    <td width="413" align="right" valign="middle" ><a href="adminlogout.php" ;">退出登录</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td height="15" colspan="3" bgcolor="#f0f0f0">&nbsp;</td>
		</tr>
		<tr>
			<td height="427" colspan="3" align="center" valign="top">{include file=$jobtype_tpl}</td>
		</tr>
		<tr>
			<td height="15" colspan="3" bgcolor="#f0f0f0">&nbsp;</td>
		</tr>
	</table>
	
	</td>
   </tr>
</table>
</body>
</html>