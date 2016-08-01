<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="">

    
    <title>{$title}</title>
<link rel="stylesheet" href="css/reg.css"/>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/userDetail.js"></script>
 </head>
<body onLoad="javascript:userdetailform.UserName.focus()">

 <nav class="navbar navbar-inverse navbar-fixed-top">
     


 <form id="userdetailform" name="userdetailform" action="userDetail_chk.php" method="post" onSubmit="return chkinput(this)">
 	<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
 	<tr>
    	<td colspan="5" align="center" valign="middle"><h2>{$title}</h2></td>
    </tr>
    <tr>
      <td width="81" height="25"><div align="right">用户名：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="UserName" name="UserName" type="text" value="{$UserName}"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" />
    </tr>
    <tr>
      <td height="25"><div align="right">真实姓名：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="RealName" name="RealName"  onBlur="javascript:chkRealName(userdetailform)"  type="text" value="{$RealName}" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="RealName1"><font color="#999999">请填写真实姓名</font></div></td>
    </tr>
    <tr>
    	<td height="25"><div align="right">身份证号：</div></td>
		<td height="25" colspan="3">&nbsp;
        <input id="IDCard" name="IDCard" type="text" value="{$IDCard}" maxlength="18" onBlur="javascript:chkIDCard(userdetailform)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
		<td height="25"><div id="IDCard1"><font color="#999999">请输入正确的身份帐号</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">QQ号码：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="QQNum" type="text" name="QQNum"  onBlur="javascript:chkQQNum(userdetailform)" value="{$QQNum}" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="25"><div id="QQNum1"><font color="#999999">请输入QQ号</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">性别：</div></td>
      <td height="25" colspan="3">&nbsp;
      	  <input name="Sex" type="radio" value="0"  checked/>男
      	  
      	  &nbsp;&nbsp;<input name="Sex" type="radio" value="1" checked/>女</td>
     </tr>
     <tr>
      <td height="25"><div align="right">身高：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="Height" name="Height" type="text" value="{$Height}" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      </tr>
    <tr>
      <td height="25"><div align="right">体重：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="Weight" name="Weight" type="text" value="{$Weight}" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      </tr>
    <tr>
    	<td height="25"><div align="right">学校：</div></td>
		<td height="25" colspan="3">&nbsp;
        <input id="School" name="School" type="text" maxlength="80" value="{$School}"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
		</tr>
    <tr>
    	<td height="25"><div align="right">专业：</div></td>
		<td height="25" colspan="3">&nbsp;
        <input id="Major" name="Major" type="text" maxlength="80" value="{$Major}"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
		</tr>
    <tr>
      <td height="25"><div align="right">理想职位：</div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">自我介绍：</div></td>
      <td height="25" colspan="3">&nbsp;
          <textarea cols="30" rows="5" id="Introduct" type="text" name="Introduct" value="{$Introduct}"/></textarea></td>
      </tr>
     <tr>
      <td height="25"><div align="right">支付宝账号：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="AliPay" type="text" name="AliPay" value="{$AilPay}" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      </tr>
    <tr>
      <td height="25"><div align="right">健康证明：</div></td>
      <td height="25" colspan="3">&nbsp;
      	  <input name="Health" type="radio" value="0" checked/>没有
      	  &nbsp;&nbsp;<input name="Health" type="radio" value="1"/>有</td>
     </tr>
    <tr>
      <td height="25"><div align="right">PicName：</div></td>
      </tr>
    <tr>
      <td height="25"><div align="right">验证码：</div></td>
      <td width="65" height="25">&nbsp;
        <input id="yzm" type="text" name="yzm" size="8" onBlur="javascript:chkyzm(userdetailform)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>
      <input name="yzm2" type="hidden" value="" /></td>
      <td width="65" align="center" valign="middle"><script>yzm(userdetailform)</script></td>
      <td width="51"><a href="javascript:code(userdetailform)">看不清</a></td>
      <td height="25"><div id="yzm1"><font color="#999999">输入验证码</font></div></td>
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

 </div><!-- /.container -->

 </body>