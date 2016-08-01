
var job = {};
job.listurl = basePath + 'job/list';
job.listsource ='';
job.listcityid ='';
job.myScroll;
job.pullDownEl;
job.pullDownOffset;
job.pullUpEl;
job.pullUpOffset;
job.html = '';
job.generatedCount = 0,
job.districtid,
job.jobtypeid,
job.settlecircleid,
job.title,
job.searchInfo,
job.themeId="",
job.la,
job.lo,
job.sla,
job.slo,
job.tla,
job.tlo,
job.SpecialType;

/**
 * by yejianzhou
 */
//职位列表-初始化下拉列表
function initDownList(){
    showBox("rsswitch");
    showBox("price");
    showBox("housetype");   
	$("#dialog").click(function() {
		hideDialog();
	});
	$(".header,.footerMenu,.close").click(function() {
		hideDialog();
	});
	
	var url=window.location.search;
	console.log(url);
	if(url.indexOf("?")!=-1){   
		if(url.indexOf("page=1&jobtypeid=20")!=-1){job.flip.pullUpAction(1,null, 20, null);$("#filter2").css({"color":"#14AE67"});return;}
		else if(url.indexOf("page=1&jobtypeid=3")!=-1){job.flip.pullUpAction(1,null,3, null);$("#filter2").css({"color":"#14AE67"});return;}
		else if(url.indexOf("page=1&jobtypeid=14")!=-1){job.flip.pullUpAction(1,null, 14, null);$("#filter2").css({"color":"#14AE67"});return;}
		else if(url.indexOf("page=1&jobtypeid=18")!=-1){job.flip.pullUpAction(1,null, 18, null);$("#filter2").css({"color":"#14AE67"});return;}
		else if(url.indexOf("page=1&jobtypeid=2")!=-1){job.flip.pullUpAction(1,null,2, null);$("#filter2").css({"color":"#14AE67"});return;}
		else if(url.indexOf("page=1&jobtypeid=6")!=-1){job.flip.pullUpAction(1,null, 6, null);$("#filter2").css({"color":"#14AE67"});return;}
		else if(url.indexOf("page=1&settlecircleid=1")!=-1){job.flip.pullUpAction(1,null,null,1);$("#filter3").css({"color":"#14AE67"});return;}
		else if(url.indexOf("page=1&jobtypeid=1")!=-1){job.flip.pullUpAction(1,null,1, null);$("#filter2").css({"color":"#14AE67"});return;}
		else if(url.indexOf("la=")!=-1&&url.indexOf("tla=")<0&&url.indexOf("sla=")<0){
			//   /job/themesListv120?la=34.75661&lo=113.645642&page=1&size=20
			var str = url.substr(1); 
		    strs = str.split("&"); 
		    var key=new Array(strs.length);
		    var value=new Array(strs.length);
		    for(i=0;i<strs.length;i++){ 
			    key[i]=strs[i].split("=")[0] //例子中的 username 参数
			    value[i]=unescape(strs[i].split("=")[1]); //例子中的 kwl  值
		    	if("la" == key[i]){
		    		job.la = value[i];
		    	}else if("lo" == key[i]){
		    		job.lo = value[i];
		    	}
		    } 
			job.flip.pullUpAction(1,null,null,null,null,null,null,job.la, job.lo);
		}else if(url.indexOf("sla=")!=-1){
			var str = url.substr(1); 
		    strs = str.split("&"); 
		    var key=new Array(strs.length);
		    var value=new Array(strs.length);
		    for(i=0;i<strs.length;i++){ 
			    key[i]=strs[i].split("=")[0] //例子中的 username 参数
			    value[i]=unescape(strs[i].split("=")[1]); //例子中的 kwl  值
		    	if("sla" == key[i]){
		    		job.sla = value[i];
		    	}else if("slo" == key[i]){
		    		job.slo = value[i];
		    	}else if("title" == key[i]){
		    		
		    		job.searchInfo = decodeURI(escape(value[i]));
		    	}
		    } 
			job.flip.pullUpAction(1,null,null,null,null,null,null, null, null,job.sla, job.slo, job.searchInfo);
		}
		else{
			var str = url.substr(1); 
		    strs = str.split("&"); 
		    var key=new Array(strs.length);
		    var value=new Array(strs.length);
		    for(i=0;i<strs.length;i++){ 
			    key[i]=strs[i].split("=")[0] //例子中的 username 参数
			    value[i]=unescape(strs[i].split("=")[1]); //例子中的 kwl  值
			    if(key[i] == "districtid" || key[i] == "jobtypeid" || key[i] == "settlecircleid"){ 	return;   }
			    else if(key[i] == "title"){
			    	console.log("sTitle---"+decodeURI(escape(value[i])));//decodeURI
			    	job.title = decodeURI(escape(value[i]));
			    	job.flip.pullUpAction(1, null, null, null, job.title);
			    	return;
			    }else if(key[i] == "themeId"){
			    	job.themeId = value[i];
			    	 for(j=0;j<strs.length;j++){ 
						    key[j]=strs[j].split("=")[0] 
						    value[j]=unescape(strs[j].split("=")[1]); 
						    if("tla" == key[j]){
					    		job.tla = value[j];
					    	}else if("tlo" == key[j]){
					    		job.tlo = value[j];
					    	}
					 }
			    	
			    	if(url.indexOf("SpecialType") != -1){
			    		job.SpecialType = "true";
			    		console.log("themeId---"+value[i]+"SpecialType---"+job.SpecialType);
			    	}
			    	job.flip.pullUpAction(1, null, null, null, null, job.themeId, job.SpecialType,null, null, null, null,job.tla,job.tlo); 
			    	return;
			    }/*else if(key[i] == "la"){
			    	job.la = value[i];
			    	if(url.indexOf("lo=") != -1){
			    		job.lo = substring();
			    		console.log("themeId---"+value[i]+"SpecialType---"+job.SpecialType);
			    	}
			    	job.flip.pullUpAction(1, null, null, null, null, job.themeId, job.SpecialType); 
			    	return;
			    }*/else{	job.flip.pullUpAction(1);  return;  }//不是初始化，是获取第一页,加上查询条件，然后去获取数据
		    	console.log(key[i]+"="+value[i]);
		    } 
	    }
	}else{job.flip.pullUpAction(1,null,null,null);return;}
}
/*显示下拉框*/
function showBox(id) {
	$('#' + id).click(function() {
		if($(this).hasClass("active")){
			hideDialog()
		}else{
			$(this).addClass("active").siblings().removeClass("active");
			var boxId = id + "info";
			$("#dialog").fadeIn();
			$("#optionlist").show();
			$('#' + boxId).show().siblings().hide();
			$('body,html').addClass("bdhide");
		}
	});
}
/*隐藏下拉框*/
function hideDialog(){
	$(".topRe>ul>li").removeClass("active");
	$("#optionlist,#dialog").hide();
	$('body,html').removeClass("bdhide");
}

job.list = {
	/*地区*/
	click_district:function(id, name){
		console.log(name+".name----------");
		/*job.districtid = id;*/
		var param = '';
		if(id != ''){
			param = 'districtid=' + id;
		}
		if($('#jobtypeid').val() != ''){
			param += '&jobtypeid=' + $('#jobtypeid').val();
		}
		if($('#settlecircleid').val() != ''){
			param += '&settlecircleid=' + $('#settlecircleid').val();
		}
		param += job.listsource + job.listcityid;
		if(param.charAt(0) == '&'){
			param = param.substring(1);
		}
		window.location.href = job.listurl+'?'+ param;
		/*job.html = '';
		job.flip.pullUpAction(1, job.districtid, job.jobtypeid, job.settlecircleid);*/
		$('#districtid').val(id);
		$("#filter1").html(name).css({"color":"#14AE67"});
		console.log(name+"====");
		if($('#jobtypeid').val() != ''){
			$('#jobtypeid').val($('#jobtypeid').val());
		}
		if($('#settlecircleid').val() != ''){
			$('#settlecircleid').val($('#settlecircleid').val());
		}
		
		hideDialog();
	},
	/*职位类型*/
	click_jobtype:function(id, name){
		//job.jobtypeid = id;
		var param = '';
		if(id != ''){
			param = 'jobtypeid=' + id;
		}
		if($('#districtid').val() != ''){
			param += '&districtid=' + $('#districtid').val();
		}
		if($('#settlecircleid').val() != ''){
			param += '&settlecircleid=' + $('#settlecircleid').val();
		}
		param += job.listsource + job.listcityid;
		if(param.charAt(0) == '&'){
			param = param.substring(1);
		}
		window.location.href = job.listurl+'?'+ param;
		/*job.html = '';
		job.flip.pullUpAction(1, job.districtid, job.jobtypeid, job.settlecircleid);*/
		$('#jobtypeid').val(id);
		$("#filter2").html(name).css({"color":"#14AE67"});
		$('#districtid').val($('#districtid').val());
		$('#settlecircleid').val($('#settlecircleid').val());
		hideDialog();
	},
	/*结算周期*/
	click_settlecircle:function(id, name){
		//job.settlecircleid = id;
		var param = '';
		if(id != ''){
			param = 'settlecircleid=' + id;
		}
		if($('#jobtypeid').val() != ''){
			param += '&jobtypeid=' + $('#jobtypeid').val();
		}
		if($('#districtid').val() != ''){
			param += '&districtid=' + $('#districtid').val();
		}
		param += job.listsource + job.listcityid;
		if(param.charAt(0) == '&'){
			param = param.substring(1);
		}
		window.location.href = job.listurl+'?'+ param;
		/*job.html = '';
		job.flip.pullUpAction(1, job.districtid, job.jobtypeid, job.settlecircleid);*/
		$('#settlecircleid').val(id);
		$("#filter3").html(name).css({"color":"#14AE67"});
		$('#jobtypeid').val($('#jobtypeid').val());
		$('#districtid').val($('#districtid').val());
		hideDialog();
	},
	/*职位搜索*/
	search:function(){
		var param = '';
		if($("#title").val() != ''){
			param = 'title=' + $("#title").val();
		}
		
		window.location.href = basePath + 'job/search?'+ param; 
	}
};

job.detail = {
	/*职位报名*/
	apply:function(obj){
		if($('input:checked').length == 0){
			alert('请选择工作日期');
			return false;
		}
		$('#_timestamp').val(new Date().getTime());
		mask.show(obj);
		$.ajax({
			url:basePath + 'job/apply',
			data:$('#job_form').serialize(),
			dataType:'json',
			type:'get',
			cache:false,
			success:function(result){
				if(result.status == -4){
					confirm("您的简历不完整，是否完善简历",function(){
						window.location.href = basePath + 'user/editresume';
					});
				}else if(result.status == -5){
					$('#job_apply_error .errror_info').html(result.msg);
					$('#job_apply_error .ok_sure').attr('href', basePath + 'user/myjobdetail?resumeid=' + result.resumeid + "&jobid="+$('#jobid').val());
					$('#job_apply_error').show();
				}
				else if(result.status != 0){
					alert(result.msg);
				}
				
				if(result.status == 0){
					$('#ok_sure').attr('href', basePath + 'user/myjobdetail?resumeid=' + result.resumeid + "&jobid="+$('#jobid').val());
					$('#jobsure_confirm').show();
				}
				
				setTimeout(function(){
					if(result.status == 501){
						window.location.href = basePath + 'user/login';
					}
				}, 2000);

				mask.hide(obj);
			}
		});
	},
	pass:function(){
		
		var obj = $('#resume_pass');
 		var resumeid = $(obj).attr('data-resumeid');
		confirm('确定签约吗?',function(){
			mask.show(obj);
			$.ajax({
				url:basePath + 'user/sign',
				data:{				
					'resumeid' : resumeid,
					'_timestamp' : new Date().getTime()
				  },
				dataType:'json',
				type:'get',
				cache:false,
				success:function(result){
					alert(result.msg);
					setTimeout(function(){
						if(result.status == 0){
							window.location.reload();
						}else if(result.status == 501){
							window.location.href = basePath + 'user/login';
						}
					}, 2000);
					mask.hide(obj);
				}
			});
	    });
	},
   nopass:function(){
		
		var obj = $('#resume_nopass');
 		var resumeid = $(obj).attr('data-resumeid');
		confirm('确定拒绝签约吗?',function(){
			mask.show(obj);
			$.ajax({
				url:basePath + 'user/unapply',
				data:{				
					'resumeid' : resumeid,
					'otype' : 2,
					'_timestamp' : new Date().getTime()
				  },
				dataType:'json',
				type:'get',
				cache:false,
				success:function(result){
					alert(result.msg);
					setTimeout(function(){
						if(result.status == 0){
							window.location.reload();
						}else if(result.status == 501){
							window.location.href = basePath + 'user/login';
						}
					}, 2000);
					mask.hide(obj);
				}
			});
	    });
	},
	cancel:function(){
		var obj = $('#resume_cancel');
		var resumeid = $(obj).attr('data-resumeid');
		confirm('确定取消报名吗?',function(){
			mask.show(obj);
			$.ajax({
				url:basePath + 'job/unapply',
				data:{				
					'resumeid' : resumeid,
					'_timestamp' : new Date().getTime(),
					'otype':1
					},
				dataType:'json',
				type:'get',
				cache:false,
				success:function(result){
					alert(result.msg);
					setTimeout(function(){
						if(result.status == 0){
							window.location.reload();
						}else if(result.status == 501){
							window.location.href = basePath + 'user/login';
						}
					}, 2000);
					mask.hide(obj);
				}
			});
	    });
	},
	refuse:function(){
		var obj = $('#resume_refuse');
		var resumeid = $(obj).attr('data-resumeid');
		confirm('确定解约吗?',function(){
		mask.show(obj);
		$.ajax({
			url:basePath + 'job/unapply',
			data:{
				'resumeid' : resumeid,
				'_timestamp' : new Date().getTime(),
				'otype':3
				},
			dataType:'json',
			type:'get',
			cache:false,
			success:function(result){
				alert(result.msg);
				setTimeout(function(){
					if(result.status == 0){
						window.location.reload();
					}else if(result.status == 501){
						window.location.href = basePath + 'user/login';
					}
				}, 2000)
				mask.hide(obj);
			}
		});
	  });
	}
};
/*职位报名确认*/
job.jobsure={
	init:function(millisecond){
		FastClick.attach(document.body);
		 $(".sDate").click(function() { //弹出日历效果Js
		        $(".date-table").toggle();
		  });
		 
		 $(".date-btn a.sureLink").click(function() { //确定选择日期
	     	$(".date-table").hide();
	     	 $("#workTimeLabel").html("选择工作日期");
	     	var $arr = $('input:checked');
	        if ($arr.length > 0) {
	        	var length = 0;
	        	var days = "";
	        	$arr.each(function(i,n){
	        		days += $(n).attr('title') + ', ';
	        	});
	            $("#workTimeLabel").html(days + $arr.length + '天');	            
	        }		       
		  });
		 $(".date-btn a.cancelLink").click(function() { //取消选择日期
	     	$("#workTimeLabel").html("选择工作日期");
	     	$('input:checked').iCheck('uncheck');
	     	$(this).hide();
	     	$(".date-btn a.allLink").show();
		});
		 $(".date-btn a.allLink").click(function() { //全选日期
			 //$("#workTimeLabel").html("选择工作日期");
		     $('input:checkbox').not(':disabled').iCheck('check');
		     $(this).hide();
		     $(".date-btn a.cancelLink").show();
		});
		 
		var curr = new Date();
		curr.setTime(millisecond);
		curr.setHours(0, 0, 0, 0);		
//		var date_str = "";
		var data_num = 0;
	  $(':checkbox').each(function(i,n){
		  if(Date.parse($(n).val()) >= curr.getTime()){
			  //不做默认全选
//			  $(n).attr('checked','true');
			  data_num ++;
//			  date_str += $(n).attr('title') + ', ';
		  }else{
			  $(n).removeAttr('checked');
			  $(n).attr('disabled','disabled');
			  $(n).next().addClass('lineThrough');
		  }
	  });
	  if(data_num == 0){
		  $('#sendButton').html('已过期');
		  $('#sendButton').addClass('disabled');
		  $('#sendButton').removeAttr('onclick');
	  }
//	  $('#workTimeLabel').html(date_str + data_num + '天');
	  $('#workTimeLabel').html('选择工作日期');
	  
		$('input').iCheck({
		    checkboxClass: 'icheckbox_square-green',
		    radioClass: 'iradio_square-green',
		    increaseArea: '20%' // optional
		  });
		
		$('.dateitem').on('click',function(){
			if(!$(this).find('span').hasClass('lineThrough')){
				$(this).find('input').iCheck('toggle');
			}
		});
	},
	cancel:function(){
		
	}
};
job.remind={
	reply:function(obj){
		mask.show(obj);
		$.ajax({
			url:basePath + 'job/replyremind',
			data:{				
				'resumeid' : $(obj).attr('data-resumeid'), 'status': $(obj).attr('data-status')			
			  },
			dataType:'json',
			type:'get',
			cache:false,
			success:function(result){
				alert(result.msg);
				if(result.status == 0){
					setTimeout(function(){
						window.location.reload();
					}, 2000);
				}
				
//				setTimeout(function(){
//					if(result.status == 501){
//						window.location.href = basePath + 'user/login';
//					}
//				}, 2000);
				mask.hide(obj);
			}
		});
	}
}

job.consultation = {
		submit:function(obj){
			if(!/.{2,70}/.test($('#content').val())){
				alert('请输入想提问的问题，2-70个字');
				$('#content').focus();
				return false;
			}
			mask.show(obj);
			$.ajax({
				url : basePath + "job/submitconsultation",
				type : "GET",
				data : {
					'content' :$('#content').val(),
					'jobid' : $(obj).attr('data-jobid')
				},
				dataType : "json",
				cache:false,
				success : function(result) {
					 alert(result.msg);
					if (result.status == 0) {
						setInterval(function(){
							window.location.href = basePath + 'job/detail?jobid=' + $(obj).attr('data-jobid');
						}, 2000);
					} else {
						// alert(result.msg);
					}
					mask.hide(obj);
				}
			});
		}
	}

job.flip={
	/** 下拉刷新 （自定义实现此方法）	* myScroll.refresh();// 数据加载完成后，调用界面更新方法	*/	
	pullDownAction:function(){
		//alert("下拉刷新");
		job.html = '';
		job.flip.pullUpAction(1, job.districtid, job.jobtypeid, job.settlecircleid, job.title, job.themeId, job.SpecialType, job.la, job.lo, job.sla, job.slo, job.tla, job.tlo,job.searchInfo);
		job.myScroll.refresh();
	},
	
	/** 滚动翻页 （自定义实现此方法） * myScroll.refresh();// 数据加载完成后，调用界面更新方法    */
	pullUpAction:function(currpage, districtid, jobtypeid, settlecircleid, title, themeId, SpecialType, la, lo, sla, slo, tla, tlo, searchInfo){
		//alert("滚动翻页");
		var data = {},
			url="";
		url = basePath + 'job/listjson';
		if(currpage !== 1){
			currpage = parseInt($("#currpage").val());
		}else{
			job.districtid = districtid;
			job.jobtypeid = jobtypeid;
			job.settlecircleid = settlecircleid;
			if(title != undefined){
				job.title = title;
			}
			
			/*job.themeId = themeId;
			job.SpecialType = SpecialType;*/
			console.log("districtid:"+districtid+",jobtypeid:"+jobtypeid+",settlecircleid:"+settlecircleid+",title:"+job.title+",themeId:"+job.themeId+",SpecialType:"+job.SpecialType);
		}
		data['page']=currpage;
		if(job.districtid == null){}else{data['districtid']=job.districtid;}
		if(job.jobtypeid == null){}else{data['jobtypeid']=job.jobtypeid;}
		if(job.settlecircleid == null){}else{data['settlecircleid']=job.settlecircleid;}
		if(job.title == undefined){}else{data['title']=job.title; url = basePath + 'job/searchjsonv120';}
		if(job.themeId != ""){
			data['themeId']=job.themeId;
			data['tla']=job.tla;
			data['tlo']=job.tlo;
			/*if(job.SpecialType){
				data['SpecialType']="true"; 
			}*/
			url = basePath + 'job/themesListjson';console.log(url);
		}
		
		if("" != job.la && undefined != job.la){
			data['la']=job.la;
			data['lo']=job.lo;
			url = basePath + 'job/themesListv120json';
			console.log(url+","+job.la);
		}
		
		if("" != job.sla && undefined != job.sla){
			data['sla']=job.sla;
			data['slo']=job.slo;
			data['title']=job.searchInfo;
			url = basePath + 'job/searchjsonv120';
			console.log(url+","+job.sla);
		}
		
		//console.log("==========="+currpage);
		
		$.ajax({
			url: url,
			/*data:{
				'page' : currpage,
				'districtid' : job.districtid,
				'jobtypeid' : job.jobtypeid,
				'settlecircleid' : job.settlecircleid
				},*/
			data:data,
			dataType:'json',
			type:'get',
			cache:false,
			success:function(result){
				//alert(JSON.stringify(result));
				//console.log(result.jobs[0].id);
				//console.log("result="+result);
				
				var len = result.jobs.length;
				if(len < 1){
					//alert("没有更多数据！");
					if(currpage > 1){}else{$("#thelist").html("");}
					$(".pullUpLabel").html("更多兼职，敬请期待！");
					return;
				}else{
					
					for(var i=0; i<len; i++){
						var labelss = '';
						var titleImg = '';
						result.jobs[0]
						for(var j=0; j<result.jobs[i].labels.length; j++){
							if(result.jobs[i].labels[j] !== ""){
								var count = j+1;
								labelss += '<span class="labels label_new'+count+'">'+result.jobs[i].labels[j]+'</span>';
							}
						}
						if(result.jobs[i].titlelabels.length > 1){
							if("10.1" == result.jobs[i].titlelabels[0]){
								titleImg += '<span class="tenOne"></span>';
							}
							if( "满" == result.jobs[i].titlelabels[1]){
								titleImg += '<span class="full"></span>';
							}
						}
						
						
						
						/*job.html += '<li><a href="'+basePath+'job/detail?jobid='+result.jobs[i].id+'">'+
										'<div class="fr ml10">'+
											'<p class="link-grey f12">'+
												'<i class="f24 link-yel mr5">'+result.jobs[i].salary+'</i> '+result.jobs[i].settletype+''+
											'</p>'+
										'</div> '+
										'<img src="'+result.jobs[i].icon+'" height="50" class="fl mr15">'+
										'<h3 class="f16">'+result.jobs[i].title+'</h3>'+
										'<div class="clearfix link-grey mt10 con">'+labels+
											'<span>'+result.jobs[i].starttime+'-'+result.jobs[i].endtime+'</span>'+
											'<span class="labels label${sta.count}">${label}</span>'+
										'</div>'+
										'<div class="clearfix link-grey mt10 con">'+
											'<span class="fr">'+result.jobs[i].district+'</span>'+
											'<span class="date">'+result.jobs[i].workdays+'</span>'+
										'</div>'+
								'</a></li>';*/
						
						
						job.html += '<li><a href="'+basePath+'job/detail?jobid='+result.jobs[i].id+'">'+
												'<div class="fr ml10 mt5">'+
													'<p class="link-grey f12">'+
														'<i class="f24 link-yel mr5">'+result.jobs[i].salary+'</i> '+result.jobs[i].settletype+''+
													'</p>'+
												'</div> '+
												'<img src="'+result.jobs[i].icon+'" height="50" class="fl mr15 mb20">'+
												'<h3 class="f16">'+
													/*'<span class="tenOne"></span>'+
													'<span class="full"></span>'+*/
													titleImg +
													result.jobs[i].title+
												'</h3>'+
												'<div class="fl" style=" width: calc(100% - 66px);">'+
												'<div class="fl f12" style="width:140px;height: 25px; line-height: 25px;"><span class="date_new">工作日期&nbsp;'+
												formatTime(result.jobs[i].begindate, "MM.dd")+'-'+formatTime(result.jobs[i].enddate, "MM.dd")+
													'</span></div><div class="clearfix link-grey mt10 con1">'+
													labelss+
												'</div></div><br />'+
												//formatTime
												'<div class="fl f12" style="width:160px;height: 25px; line-height: 25px;color:#999999;">'+
													result.jobs[i].pageview +'人浏览/'+ result.jobs[i].distance +
												'</div>'+
												'<div class="clearfix link-grey con1" style="color:#8bda79;">'+
												result.jobs[i].settlecircle+
												'</div>'+
											'</a>'+
									'</li>';
						
					}
					$("#thelist").html(job.html);
					$("#currpage").val(parseInt(currpage)+1);
					job.myScroll.refresh();
				}
				
			},
			error:function(result){	
				alert("后台请求失败，稍后再试。。");
				console.log(JSON.stringify(result));		
			}
		});
	},
	
	/** 初始化iScroll控件 */
	loaded:function(){
		job.pullDownEl = document.getElementById('pullDown');
		job.pullDownOffset = job.pullDownEl.offsetHeight;
		job.pullUpEl = document.getElementById('pullUp');
		job.pullUpOffset = job.pullUpEl.offsetHeight;
		job.myScroll = new iScroll('wrapper', {
			scrollbarClass: 'myScrollbar',
			/* 重要样式 */
			useTransition: false,
			/* 此属性不知用意，本人从true改为false */
			topOffset: job.pullDownOffset,
			onRefresh: function() {
				if (job.pullDownEl.className.match('loading')) {
					job.pullDownEl.className = '';
					job.pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
				} else if (job.pullUpEl.className.match('loading')) {
					job.pullUpEl.className = '';
					job.pullUpEl.querySelector('.pullUpLabel').innerHTML = '';
				}
			},
			onScrollMove: function() {
				if (this.y > 5 && !job.pullDownEl.className.match('flip')) {
					job.pullDownEl.className = 'flip';
					job.pullDownEl.querySelector('.pullDownLabel').innerHTML = '松手开始更新...';
					this.minScrollY = 0;
				} else if (this.y < 5 && job.pullDownEl.className.match('flip')) {
					job.pullDownEl.className = '';
					job.pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
					this.minScrollY = -job.pullDownOffset;
				} else if (this.y < (this.maxScrollY - 5) && !job.pullUpEl.className.match('flip')) {
					job.pullUpEl.className = 'flip';
					job.pullUpEl.querySelector('.pullUpLabel').innerHTML = '松手开始更新...';
					this.maxScrollY = this.maxScrollY;
				} else if (this.y > (this.maxScrollY + 5) && job.pullUpEl.className.match('flip')) {
					job.pullUpEl.className = '';
					job.pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
					this.maxScrollY = job.pullUpOffset;
				}
			},
			onScrollEnd: function() {
				if (job.pullDownEl.className.match('flip')) {
					job.pullDownEl.className = 'loading';
					job.pullDownEl.querySelector('.pullDownLabel').innerHTML = '加载中...';
					job.flip.pullDownAction(); // Execute custom function (ajax call?)
				} else if (job.pullUpEl.className.match('flip')) {
					job.pullUpEl.className = 'loading';
					job.pullUpEl.querySelector('.pullUpLabel').innerHTML = '加载中...';
					job.flip.pullUpAction(); // Execute custom function (ajax call?)
				}
			}
		});
		setTimeout(function() {
			document.getElementById('wrapper').style.left = '0';
		}, 800);
	}
}

/**电话咨询加一*/
job.telInquiry = function(jobid){
	$.ajax({
		url: basePath + 'job/telInquiry',
		data:{'jobid' : jobid},
		dataType:'json',
		type:'get',
		cache:false,
		success:function(result){
			console.log(result);
		}
	});
}
