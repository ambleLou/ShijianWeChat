// JavaScript Document
function chkPhone(form){
	if(form.Phone.value==""){
		Phone1.innerHTML="<font color=#FF0000>请输入用户名！</font>";
	}else if(form.Phone.value==""){
		Phone1.innerHTML="<font color=#FF0000>请输入联系电话！</font>"; 
	}else if(isNaN(form.Phone.value)){
		Phone1.innerHTML="<font color=#FF0000>联系电话只能由数字组成！</font>"; 
	}else if(form.Phone.value.length<8 || form.Phone.value.length>11){
		Phone1.innerHTML="<font color=#FF0000>联系电话位数不正确！</font>";
	}
	else{
		var myPhone = form.Phone.value;
		var url = "chkPhone.php?Phone="+myPhone;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4){
				var mymsg = xmlhttp.responseText;
				var temp = mymsg.replace(/(^\s+)|(\s+$)/g,"");
				if(temp == '2'){
					Phone1.innerHTML="<font color=green>恭喜您，可以注册!"+mymsg+"</font>";
					form.c_Phone.value = "yes";	
				}else{
					Phone1.innerHTML="<font color=#FF0000>用户名被占用!"+temp+"</font>";
					return false;
					
				}
			}
		}
		xmlhttp.send(null);
	}
}
function chkRegisterinput(form){
	if(form.Phone.value==""){
		form.Phone.focus();
		return false;
	}
	if(form.c_Phone.value == "not"){
		form.Phone.select();
		return false;
	}
	if(form.Password.value==""){
		form.Password.focus();
		return false;
	}
	/*if(form.Password2.value==""){
		form.Password2.focus();
		return false;
	}
	if(form.Password2.value!=form.Password1.value){
		form.Password1.select();
		return false;
	}*/
	if(form.Password.value.length<6){
		form.Password.select();
		return false;
	}
	if(form.Invitation.value!=""){
		if(isNaN(form.Invitation.value)){
			form.Invitation.focus();
			return false;
		}
	}
	
	
}



function chkPassword1(form){
	if(form.Password.value==""){
		Password11.innerHTML="<font color=#FF0000>密码格式错误！</font>";  
	}else if(form.Password.value.length<6){
		Password11.innerHTML="<font color=#FF0000>注册密码长度应大于6位！</font>";  
	}else{
		Password11.innerHTML="<font color=green>输入正确</font>";  
	}
}
/*function chkPassword2(form){
	if(form.Password2.value==""){
		Password21.innerHTML="<font color=#FF0000>请输入确认密码！</font>";  
	}else if(form.Password2.value.length<6){
		Password21.innerHTML="<font color=#FF0000>确认密码长度应大于6位！</font>";  
	}else if(form.Password.value!=form.Password2.value){
		Password21.innerHTML="<font color=#FF0000>注册密码与确认密码不同！</font>"; 
	}else{
		Password21.innerHTML="<font color=green>输入正确</font>";  
	}
}*/

function chkInvitation(form){
	if(isNaN(form.Invitation.value)){
		Invitation1.innerHTML="<font color=#FF0000>邀请码只能由数字组成！</font>"; 
	}
}