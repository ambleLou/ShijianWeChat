// JavaScript Document

function chkinput(form){
	if(form.Phone.value==""){
		form.Phone.focus();
		return false;
	}
	if(form.Password.value==""){
		form.Password.focus();
		return false;
	}
	if(form.Password.value.length<6){
		form.Password.select();
		return false;
	}
}