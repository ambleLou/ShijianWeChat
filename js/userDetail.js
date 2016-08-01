// JavaScript Document


function chkRealName(form){
	if(form.RealName.value==""){
		RealName1.innerHTML="<font color=#FF0000>请输入真实姓名！</font>"; 
	}else{
		RealName1.innerHTML="<font color=green>输入正确</font>";
	}
}

function chkIDCard(form){
	if(form.IDCard.value==""){
		IDCard1.innerHTML="<font color=#FF0000>请选择您的身份证号！</font>"; 
	}else if(form.IDCard.value.length != 15 && form.IDCard.value.length != 18){
		IDCard1.innerHTML="<font color=#FF000000>请输入正确的身份证号</font>";	
	}
	else{
		IDCard1.innerHTML="<font color=green>输入正确</font>";
	}
}

function chkQQNum(form){
	if(form.QQNum.value != "" && isNaN(form.QQNum.value)){
		QQNum1.innerHTML="<font color=#FF0000>联系QQ只能由数字组成！</font>"; 
	}else{
		QQNum1.innerHTML="<font color=green>输入正确</font>";
	}
}

function chkinput(form){
	if(form.RealName.value==""){
		form.RealName.focus();
		return false;
	}
	if(form.IDCard.value.length != 15 && form.IDCard.value.length !=18){
		form.IDCard.select();
		return false;
	}
	
	if(isNaN(form.QQNum.value)){
		alert("QQ号码只能由数字组成！");
		form.QQNum.select();
		return false;
	}
	if(form.Sex.value==""){
		form.Sex.focus();
		return false;
	}
	if(form.Health.value==""){
		form.Health.focus();
		return false;
	}
	if(form.yzm.value==""){
		form.yzm.focus();
		return false;
	}
	if(form.yzm.value!=form.yzm2.value){
		alert("效验码输入错误！");
		form.yzm.focus();
		return false;
	}
}

function chkyzm(form){
	if(form.yzm.value==""){
		yzm1.innerHTML="<font color=#FF0000>请输入效验码！</font>"; 
	}else if(form.yzm.value!=form.yzm2.value){
		yzm1.innerHTML="<font color=#FF0000>效验码输入错误!</font>";
	}else{
		yzm1.innerHTML="<font color=green>输入正确</font>";
	}
}
function yzm(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.write("<img name=codeimg src='yzm.php?num="+num+"'>");
	form.yzm2.value=num;
}
function code(form){
	var num1=Math.round(Math.random()*10000000);
	var num=num1.toString().substr(0,4);
	document.codeimg.src="yzm.php?num="+num;
	form.yzm2.value=num;
}