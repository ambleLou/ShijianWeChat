<table width="580" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0">兼职类型</td>
    <td align="center" bgcolor="#F0F0F0">添加时间</td>
    <td align="center" bgcolor="#F0F0F0">操作</td>
  </tr>
{{section name=jobtype_id loop=$jobtype}}
  <tr>
    <td height="20" align="center">{$jobtype[jobtype_id].TypeName}</td>
    <td align="center">{$jobtype[jobtype_id].CreateTime}</td>
    <td align="center"><a href="typemanage.php?jobtype_id={$jobtype[jobtype_id].ID}" target="_blank">修改</a>/<a href="jobtypedelete.php?jobtype_id={$jobtype[jobtype_id].ID}">删除</a></td>
  </tr>
{{/section}}
</table>
