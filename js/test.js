// JavaScript Document
function chkname(form){
	if(form.name.value==""){
		name1.innerHTML="<font color=#FF0000>请输入用户名！</font>";
	}else{
		var user = form.name.value;
		var url = "testchkname.php?user="+user;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var msg = xmlhttp.responseText;
				if(msg == '2'){
					name1.innerHTML="<font color=#FF0000>用户名被占用！</font>";
					return false;
				}else if(msg == '1'){
					name1.innerHTML="<font color=green>恭喜您，可以注册!</font>";
					form.c_name.value = "yes";
					
				}else{
					name1.innerHTML="<font color=green>"+msg+"</font>";
				}
			}
		}
		xmlhttp.send(null);
	}
}
function chkinput(form){
	if(form.name.value==""){
		form.name.focus();
		return false;
	}
	if(form.c_name.value == "not"){
		form.name.select();
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
	
	return true;
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