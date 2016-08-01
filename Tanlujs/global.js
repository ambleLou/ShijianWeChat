window.networkType;
//---------------------------------------------Cookie-----------------------------------------
var cookie = {
	// 用户选择的当前城市
	getCityId : function() {
		if (getCookie('tl_m_cityid') == null || isNaN(getCookie('tl_m_cityid'))) {
			return 0;
		}
		return getCookie('tl_m_cityid');
	},
	// Cookie操作
	get : function(c_name) {
		return jQuery.cookie(c_name);
	},
	getUserId : function() {
		if ($.cookie('tl_m_userid') == null || isNaN($.cookie('tl_m_userid'))) {
			return 0;
		}
		return $.cookie('tl_m_userid');
	},
	getToken : function() {
		var token = $.cookie('tl_m_token');
		if (token == null) {
			return 0;
		}
		return $.cookie('tl_m_token');
	},
	add : function(cookieName, value, time) {

		var cookietime = new Date();
		cookietime.setTime(cookietime.getTime() + time);// coockie保存时间，毫秒
		$.cookie(cookieName, value, {
			expires : cookietime
		});

	},

	remove : function(c_name) {
		jQuery.cookie(c_name, null);
	}
};

jQuery.cookie = function(key, value, options) {
	if (arguments.length > 1 && (value === null || typeof value !== "object")) {
		options = jQuery.extend({}, options);

		if (value === null) {
			options.expires = -1;
		}

		if (typeof options.expires === 'number') {
			var days = options.expires, t = options.expires = new Date();
			t.setDate(t.getDate() + days);
		}

		return (document.cookie = [
				encodeURIComponent(key),
				'=',
				options.raw ? String(value) : encodeURIComponent(String(value)),
				options.expires ? '; expires=' + options.expires.toUTCString()
						: '', options.path ? '; path=' + options.path : '',
				options.domain ? '; domain=' + options.domain : '',
				options.secure ? '; secure' : '' ].join(''));
	}

	options = value || {};
	var result, decode = options.raw ? function(s) {
		return s;
	} : decodeURIComponent;
	return (result = new RegExp('(?:^|; )' + encodeURIComponent(key)
			+ '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};
// ---------------------------------------------Cookie
// End-----------------------------------------

// ---------------------------------------------格式化方法-----------------------------------------
/*
 * Date.prototype.Format = function (fmt) { var o = { "M+": this.getMonth() + 1,
 * "d+": this.getDate(), "h+": this.getHours(), "m+": this.getMinutes(), "s+":
 * this.getSeconds(), "q+": Math.floor((this.getMonth() + 3) / 3), "S":
 * this.getMilliseconds() }; if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1,
 * (this.getFullYear() + "").substr(4 - RegExp.$1.length)); for (var k in o) if
 * (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1,
 * (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" +
 * o[k]).length))); return fmt; };
 */
// ---------------------------------------------格式化方法结束-----------------------------------------
// ---------------------------------------------参数相关-----------------------------------------
// 获取URL参数
function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if (r != null)
		return unescape(r[2]);
	return null;
}

function getQueryNumber(name) {
	return parseFloat(getQueryString(name));
}

// 修改参数值
function changeURLPar(url, ref, value) {
	var str = "";
	if (url.indexOf('?') != -1)
		str = url.substr(url.indexOf('?') + 1);
	else
		return url + "?" + ref + "=" + value;
	var returnurl = "";
	var setparam = "";
	var arr;
	var modify = "0";
	if (str.indexOf('&') != -1) {
		arr = str.split('&');
		for (i in arr) {
			if (arr[i].split('=')[0] == ref) {
				setparam = value;
				modify = "1";
			} else {
				setparam = arr[i].split('=')[1];
			}
			returnurl = returnurl + arr[i].split('=')[0] + "=" + setparam + "&";
		}
		returnurl = returnurl.substr(0, returnurl.length - 1);
		if (modify == "0")
			if (returnurl == str)
				returnurl = returnurl + "&" + ref + "=" + value;
	} else {
		if (str.indexOf('=') != -1) {
			arr = str.split('=');
			if (arr[0] == ref) {
				setparam = value;
				modify = "1";
			} else {
				setparam = arr[1];
			}
			returnurl = arr[0] + "=" + setparam;
			if (modify == "0")
				if (returnurl == str)
					returnurl = returnurl + "&" + ref + "=" + value;
		} else
			returnurl = ref + "=" + value;
	}
	return url.substr(0, url.indexOf('?')) + "?" + returnurl;
}

// 删除参数值
function delQueStr(url, ref) {
	var str = "";
	if (url.indexOf('?') != -1) {
		str = url.substr(url.indexOf('?') + 1);
	} else {
		return url;
	}
	var arr = "";
	var returnurl = "";
	// var setparam = "";
	if (str.indexOf('&') != -1) {
		arr = str.split('&');
		for (i in arr) {
			if (arr[i].split('=')[0] != ref) {
				returnurl = returnurl + arr[i].split('=')[0] + "="
						+ arr[i].split('=')[1] + "&";
			}
		}
		return url.substr(0, url.indexOf('?')) + "?"
				+ returnurl.substr(0, returnurl.length - 1);
	} else {
		arr = str.split('=');
		if (arr[0] == ref) {
			return url.substr(0, url.indexOf('?'));
		} else {
			return url;
		}
	}
}

// ---------------------------------------------参数相关结束-----------------------------------------

// 文本框限输入整数
function inputTextMustInt(id) {
	$(id).keydown(
			function() {
				var e = $(this).event || window.event;
				var code = parseInt(e.keyCode);
				if (code >= 96 && code <= 105 || code >= 48 && code <= 57
						|| code == 8) {
					return true;
				} else {
					return false;
				}
			});
}

// ----------------------------------------------弹出框------------------------------
var hideAlert_num = 0;
function alert(content) {
	var str = "<div id='alertDiv' class='gray' onclick='hideAlert();$(this).off()'><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td valign='middle'><div class='Pop-up pstyle-1'>"
			+ "<div class='Pop-upCon tc'>"
			+ content
			+ "</div></div></td></tr></table></div>";
	if ($("#alertDiv").length > 0) {
		$("#alertDiv").remove();
	}
	$("body").append(str);

	hideAlert_num = setTimeout(hideAlert, 2000);
}

function hideAlert() {
	if (hideAlert_num != 0) {
		clearInterval(hideAlert_num);
	}
	$("#alertDiv").animate({
		opacity : 0
	}, 500, function() {
		$("#alertDiv").remove();
	});
}

/** 分页 */
var page = {
	home : function() {
		window.location.href = changeURLPar(window.location.href, 'page', 1);
	},
	next : function(currpage) {
		if (parseFloat(currpage) < 1) {
			currpage = 0;
		}
		window.location.href = changeURLPar(window.location.href, 'page',
				currpage + 1);
	},
	last : function(currpage) {
		if (parseFloat(currpage) < 2) {
			currpage = 2;
		}
		window.location.href = changeURLPar(window.location.href, 'page',
				currpage - 1);
	},
	end : function(page) {
		window.location.href = changeURLPar(window.location.href, 'page', page);
	}
};

// /**下拉加载、上拉刷新*/
// var flip ={
// currpage : 1,//当前页
// /** 下拉刷新 （自定义实现此方法） * myScroll.refresh();// 数据加载完成后，调用界面更新方法*/
// pullDownAction:function(){
// //alert("下拉刷新");
// flip.pullUpAction(1);
// myScroll.refresh();
// },
//	
// /** 滚动翻页 （自定义实现此方法） * myScroll.refresh();// 数据加载完成后，调用界面更新方法*/
// pullUpAction:function(currpage){
// //alert("滚动翻页");
// //自定义 数据加载func
// myLoadPageData();
// },
//	
// /** 初始化iScroll控件 */
// loaded:function(){
// pullDownEl = document.getElementById('pullDown');
// pullDownOffset = pullDownEl.offsetHeight;
// pullUpEl = document.getElementById('pullUp');
// pullUpOffset = pullUpEl.offsetHeight;
// myScroll = new iScroll('wrapper', {
// scrollbarClass: 'myScrollbar',
// useTransition: false,/* 是否使用css变换*/
// topOffset: pullDownOffset,
// onRefresh: function() {
// if (pullDownEl.className.match('loading')) {
// pullDownEl.className = '';
// pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
// } else if (pullUpEl.className.match('loading')) {
// pullUpEl.className = '';
// pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
// }
// },
// onScrollMove: function() {
// if (this.y > 5 && !pullDownEl.className.match('flip')) {
// pullDownEl.className = 'flip';
// pullDownEl.querySelector('.pullDownLabel').innerHTML = '松手开始更新...';
// this.minScrollY = 0;
// } else if (this.y < 5 && pullDownEl.className.match('flip')) {
// pullDownEl.className = '';
// pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
// this.minScrollY = -pullDownOffset;
// } else if (this.y < (this.maxScrollY - 5) &&
// !pullUpEl.className.match('flip')) {
// pullUpEl.className = 'flip';
// pullUpEl.querySelector('.pullUpLabel').innerHTML = '松手开始更新...';
// this.maxScrollY = this.maxScrollY;
// } else if (this.y > (this.maxScrollY + 5) &&
// pullUpEl.className.match('flip')) {
// pullUpEl.className = '';
// pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
// this.maxScrollY = pullUpOffset;
// }
// },
// onScrollEnd: function() {
// if (pullDownEl.className.match('flip')) {
// pullDownEl.className = 'loading';
// pullDownEl.querySelector('.pullDownLabel').innerHTML = '加载中...';
// flip.pullDownAction(); // Execute custom function (ajax call?)
// } else if (pullUpEl.className.match('flip')) {
// pullUpEl.className = 'loading';
// pullUpEl.querySelector('.pullUpLabel').innerHTML = '加载中...';
// flip.pullUpAction(); // Execute custom function (ajax call?)
// }
// }
// });
// setTimeout(function() {
// document.getElementById('wrapper').style.left = '0';
// }, 800);
// }
// };

/* 加载中的遮罩 */
var mask = {
	html : '<div class="mask"><div></div></div>',
	show : function(obj) {
		if (obj != undefined) {
			$(obj).addClass('disabled');
			$(obj).attr('_onclick', $(obj).attr('onclick'));
			$(obj).removeAttr('onclick');
		}
		//		
		// if($('.mask').size()>0){
		// $('.mask').show();
		// }else{
		// $('body').append(mask.html);
		// }

	},
	hide : function(obj) {
		if (obj != undefined) {
			$(obj).removeClass('disabled');
			$(obj).attr('onclick', $(obj).attr('_onclick'));
			$(obj).removeAttr('_onclick');
		}
		$('.mask').remove();
	}
};

/* 加载中的遮罩 */
var mask_loading = {
	html : '<div class="mask1"><div class="mask1_content" style="position:absolute;top:55%;left:0;right:0;bottom:0;text-align:center;">加载中...</div></div>',
	show : function(content, obj) {
		if (obj != undefined) {
			$(obj).addClass('disabled');
			$(obj).attr('_onclick', $(obj).attr('onclick'));
			$(obj).removeAttr('onclick');
		}
		//		
		if($('.mask1').size()>0){
			if(content != "" && content != undefined){
				$(".mask1_content").html(content);
			}
			$('.mask1').show();
		}else{
			if(content != "" && content != undefined){
				mask_loading.html='<div class="mask1"><div class="mask1_content" style="position:absolute;top:55%;left:0;right:0;bottom:0;text-align:center;">'+content+'</div></div>';
			}
			$('body').append(mask_loading.html);
		}

	},
	hide : function(obj) {
		if (obj != undefined) {
			$(obj).removeClass('disabled');
			$(obj).attr('onclick', $(obj).attr('_onclick'));
			$(obj).removeAttr('_onclick');
		}
		$('.mask1').remove();
	}
};

var getReferrer = function() {
	var referrer = '';

	try {
		referrer = window.top.document.referrer;
	} catch (e) {
		if (window.parent) {
			try {
				referrer = window.parent.document.referrer;
			} catch (e2) {
				referrer = '';
			}
		}
	}
	if (referrer === '') {
		referrer = document.referrer;
	}
	return referrer;
};

$(function() {
	/* ajax全局配置 */
	$.ajaxSetup({
		type : "GET",
		cache : false,
		beforeSend : function() {
			mask.show();
		},
		complete : function() {
			mask.hide();
		}
	});
});

function closeConfirm() {
	$("#confirm").remove();
	return;
}

function confirm(content, callBack) {
	var str = "<table id='confirm'  width='100%'   cellspacing='0' cellpadding='0' class='tixianmima' style='border:0 auto;display: inner-block;'>"
			+ "<tr> <td align='center' valign='middle'>"
			+ "<div class='box'> <h2 class='tc pb15 pt15 f16' >"
			+ content
			+ "</h2>"
			+ "<div class='mm-btn mt20' id='okDiv'>"
			+ "<a href='javascript:void(0)' onclick='closeConfirm()'>取 消</a>"
			+ "<a href='javascript:void(0)'  id='confirmsure'>确 定</a></div></div></td></tr></table>";
	$("body").append(str);
	$('#confirmsure').on('click', function() {
		$("#confirm").remove();
		callBack();
	});
}

function confirm(content, successCallBack, cancelCallBack) {
	var str = "<table id='confirm'  width='100%'   cellspacing='0' cellpadding='0' class='tixianmima' style='border:0 auto;display: inner-block;'>"
			+ "<tr> <td align='center' valign='middle'>"
			+ "<div class='box'> <h2 class='tc pb15 pt15 f16' >"
			+ content
			+ "</h2>"
			+ "<div class='mm-btn ' id='okDiv'>"
			+ "<a href='javascript:void(0)' id='confirmcancel'>取 消</a>"
			+ "<a href='javascript:void(0)'  id='confirmsure'>确 定</a></div></div></td></tr></table>";
	$("body").append(str);
	$('#confirmsure').on('click', function() {
		$("#confirm").remove();
		successCallBack();
	});
	$('#confirmcancel').on('click', function() {
		$("#confirm").remove();
		if(cancelCallBack){
			cancelCallBack();
		}
	});
}
/**
 * 
 * @param leftBtn 左侧按钮 （默认为取消）
 * @param rightBtn 右侧按钮 （默认为确定）
 * @param content 主体内容
 * @param successCallBack （右侧按钮点击事件）
 * @param cancelCallBack （左侧按钮点击事件）
 */
function confirmDIY(leftBtn, rightBtn, content, successCallBack, cancelCallBack) {
	leftBtn = leftBtn || "取 消";
	rightBtn = rightBtn || "确 定";
	var str = "<table id='confirm'  width='100%'   cellspacing='0' cellpadding='0' class='tixianmima' style='border:0 auto;display: inner-block;'>"
			+ "<tr> <td align='center' valign='middle'>"
			+ "<div class='box'> <h2 class='tc p15 f14' >"
			+ content
			+ "</h2>"
			+ "<div class='mm-btn mt20' id='okDiv'>"
			+ "<a href='javascript:void(0)' id='confirmcancel'>"+ leftBtn +"</a>"
			+ "<a href='javascript:void(0)'  id='confirmsure'>"+ rightBtn +"</a></div></div></td></tr></table>";
	$("body").append(str);
	$('#confirmsure').on('click', function() {
		$("#confirm").remove();
		successCallBack();
	});
	$('#confirmcancel').on('click', function() {
		$("#confirm").remove();
		if(cancelCallBack){
			cancelCallBack();
		}
	});
}

function confirmSingleBtn(content, callBack) {
	var str = "<table id='confirm'  width='100%'   cellspacing='0' cellpadding='0' class='tixianmima' style='border:0 auto;display: inner-block;'>"
			+ "<tr> <td align='center' valign='middle'>"
			+ "<div class='box'> <h2 class='tc pb15 pt15 f16' >"
			+ content
			+ "</h2>"
			+ "<div class='mm-btn mt20' id='okDiv'>"
			+ "<a class ='singlebtn' href='javascript:void(0)' id='confirmsure'>确 定</a></div></div></td></tr></table>";
	$("body").append(str);
	$('#confirmsure').on('click', function() {
		$("#confirm").remove();
		callBack();
	});
}

function sendSearch() {
	var searchContent = $("#searchContent").val();//调用新接口，返回参数是有值的
	/*var la=$("la");//la
	var lo=$*/
	
	if(searchContent != ""){
		window.location.href = basePath + "job/searchv120?title=" + searchContent;
	}else{
		alert("请输入关键字");
	}
}
/**
 * 如果当前定位成功了，则返回正确的距离，如果定位不成功，则返回"-"
 * 距离大于 1000米，则返回 1千米
 * 距离少于1000米，则返回 1000米
 * 结果保留一位小数点
 * @param lng
 * @param lat
 * @returns {String}
 */
function distance(lng, lat) {
	var ttt=document.createElement("map");
	var map = new BMap.Map(ttt);
	// 读取cookie 的经纬度 然后和传入的参数做对比
	var currentLng = $.cookie("tl_m_queryaround_lo");// 1小时
	var currentLat = $.cookie("tl_m_queryaround_la");// 1小时
	if (null == currentLng || null == currentLat) {
		return "-";
	}
	var pointA = new BMap.Point(currentLng, currentLat); // 创建点坐标A--大渡口区
	var pointB = new BMap.Point(lng, lat); // 创建点坐标B--江北区
	var distance = (map.getDistance(pointA, pointB)).toFixed(1);
	if (distance > 1000) {
		distance = (distance / 1000).toFixed(1);
		return distance + "千米";
	}
	return distance + "米";

}

//---------formatTime(1396178344662, 'yyyy-MM-dd HH:mm:ss')---------------
var formatTime = function(time, format){ 
	var t = new Date(time); 
	var tf = function(i){return (i < 10 ? '0' : '') + i}; 
	return format.replace(/yyyy|MM|dd|HH|mm|ss/g, function(a){ 
		switch(a){ 
		case 'yyyy': 
			return tf(t.getFullYear()); 
			break; 
		case 'MM': 
			return tf(t.getMonth() + 1); 
			break; 
		case 'mm': 
			return tf(t.getMinutes()); 
			break; 
		case 'dd': 
			return tf(t.getDate()); 
			break; 
		case 'HH': 
			return tf(t.getHours()); 
			break; 
		case 'ss': 
			return tf(t.getSeconds()); 
			break; 
		}; 
	}); 
} 

String.prototype.format = function(){    
    var args = arguments;    
    return this.replace(/\{(\d+)\}/g,                    
        function(m,i){    
            return args[i];    
        });    
} 

/**
 * 隐藏中间位数为星号
 * @param prefixNum 前面显示位数
 * @param suffixNum 后面显示位数
 */
function hideByStar(str,prefixNum,suffixNum){
	if(!prefixNum){
		prefixNum=0;
	}
	if(!suffixNum){
		suffixNum=0;
	}
	
	if(!str || (prefixNum==0 && suffixNum==0) || str.length < (prefixNum+suffixNum)){
		return str;
	}
	
	var len = str.length;
	var prefix = str.substring(0,prefixNum);
	var suffix = str.substring(len-suffixNum,len);
	var diff = len-prefix-suffix;
	while(diff>0){
		prefix+="*";
		diff--;
	}
	
	return prefix+suffix;
}

/**
 * 隐藏下载广告
 */
function hidedownload(){
	$(".download_float").css({"display":"none"});
	$(".download_rightnow").css({"display":"none"});
	$(".gdzw").css({"display":"none"});
}

$(function(){
	$(document).ready(function(){
		//app访问去除底部
		var url=window.location.search;
		if(url.indexOf("?")!=-1){
			var str = url.substr(1);
			strs = str.split("&");
			for(i=0;i<strs.length;i++){
				var params = strs[i].split("=");
				if(params[0]=="source" && params[1]=="app"){
					if($(".download_float")){
						$(".download_float").hide();
						$(".download_float").next().hide().next().hide();
					}
				}
			}
		}
	});
})