//找到url中匹配的字符串
function findInUrl(str){
	url = location.href;
	return url.indexOf(str) == -1 ? false : true;
}
//获取url参数
function queryString(key){
    return (document.location.search.match(new RegExp("(?:^\\?|&)"+key+"=(.*?)(?=&|jQuery)"))||['',null])[1];
}

//产生指定范围的随机数
function randomNumb(minNumb,maxNumb){
	var rn=Math.round(Math.random()*(maxNumb-minNumb)+minNumb);
	return rn;
	}

jQuery(document).ready(function(e) {
	wHeight=jQuery(window).height();
    jQuery('.navbar-inverse .navbar-collapse').height(wHeight-51);
});

var youku_client_id='876cd40a21540f7f';//优酷代码id
var wWidth;//窗口宽度
var wHeight;//窗口高度
var nb1,nb2,nb3,nb4,nb5,nb6,nb7,nb8,nb9,nb10,nb11,nb12,nb13,nb14,nb15,nb16,nb17,nb18,nb19,nb20;//延时显示内容 距离页面顶部距离
var sb1,sb2,sb3,sb4,sb5,sb6,sb7,sb8,sb9,sb10,sb11,sb12,sb13,sb14,sb15,sb16,sb17,sb18,sb19,sb20;//缓动内容 距离页面顶部距离
var sbh1,sbh2,sbh3,sbh4,sbh5,sbh6,sbh7,sbh8,sbh9,sbh10,sbh11,sbh12,sbh13,sbh14,sbh15,sbh16,sbh17,sbh18,sbh19,sbh20;//缓动内容 距离页面顶部距离+容器高度
var sbw1,sbw2,sbw3,sbw4,sbw5,sbw6,sbw7,sbw8,sbw9,sbw10,sbw11,sbw12,sbw13,sbw14,sbw15,sbw16,sbw17,sbw18,sbw19,sbw20;//缓动内容 容器高度

var isMobile=false;//是否移动端 宽度小于等于767
var isSwipe=false;//底部内容滑动
var fcpLen=0;//底部内容块数
var fcpNumb=0;//底部内容滑动索引值
var isFisrtFoot=true;
var footPos;

//通用位置初始化
function getPos(){

	wWidth=parseInt(jQuery(window).width());
	wHeight=parseInt(jQuery(window).height());
	if(wWidth>1340){
		wWidth=1340;
		}

	//底部内容块数获取
	fcpLen=jQuery('.footContent').length;

	jQuery('.vGallery').hover(function(){
		jQuery(this).find('.vCover').css('opacity','1');
		},function(){
			jQuery(this).find('.vCover').css('opacity','0');
			});

	if(wWidth<=767){//初始化移动端
		isMobile=true;
		jQuery('.footTopContent').width(wWidth*fcpLen);
		jQuery('.footTopContent').css('transform','translateX('+(-fcpNumb*wWidth)+'px)');

		jQuery('body').attr('style','');

		if(!isSwipe){
			isSwipe=true;
			jQuery('.footTopContent').swipe( {
				swipeLeft:function(event, direction, distance, duration, fingerCount) {
					ftcSwipe('left');
					},
				swipeRight:function(event, direction, distance, duration, fingerCount) {
					ftcSwipe('right');
					}
				});
			}
		}
		else{//初始化PC端
			isMobile=false;
			isSwipe=false;
			jQuery(".footTopContent").swipe("destroy");
			jQuery('.footTop').removeAttr('style');
			jQuery(".footTopContent").removeAttr('style');
			jQuery('.footNav span').removeClass('fnActive').eq(0).addClass('fnActive');

			if(wWidth>767){
				if(wWidth%4==0){
					jQuery('body').attr('style','');
					}
					else{
						var w4=wWidth%4;
						jQuery('body').width(wWidth-w4);
						}
				}
				else{
					jQuery('body').attr('style','');
					}
			}
	}

//底部内容滑动
function ftcSwipe(dir){
	if(dir=='right'){
		fcpNumb=fcpNumb-1;
		if(fcpNumb<0){
			fcpNumb=fcpLen-1;
			}
		jQuery('.footTopContent').css('transform','translateX('+(-fcpNumb*wWidth)+'px)');
		}
		else if(dir=='left'){
			fcpNumb++;
			if(fcpNumb>=fcpLen){
				fcpNumb=0;
				}
			jQuery('.footTopContent').css('transform','translateX('+(-fcpNumb*wWidth)+'px)');
			}
	jQuery('.footNav span').removeClass('fnActive').eq(fcpNumb).addClass('fnActive');
	}

//foot effect && backToTop
var isGoingTop=false;
function footeffect(){
	jQuery('.backToTop').click(function(){
		if(!isGoingTop){
			isGoingTop=true;
			jQuery('html,body').animate({scrollTop:'0px'}, 500 ,'linear',function(){
				//jQuery(window).scrollTop(0);
				isGoingTop=false;
				});
			}
		});
	var wstt=jQuery(window).scrollTop();
	if(wstt+50>wHeight){
		jQuery('.backToTop').fadeIn(500);
		}
		else{
			jQuery('.backToTop').fadeOut(500);
			}

	if(wWidth>767){
		footPos=parseInt(jQuery('.footContent').offset().top);
		var wsf=jQuery(window).scrollTop()+wHeight;
		if(wsf>footPos&&isFisrtFoot){
			isFisrtFoot=false;
			//jQuery('.footContent').css('transform','translate(0,30px)');
			jQuery('.footContent').eq(0).addClass('fc1');
			jQuery('.footContent').eq(1).addClass('fc2');
			jQuery('.footContent').eq(2).addClass('fc3');
			}
		}
	}

//通用加载完毕
jQuery(document).ready(function(){
	getPos();
	});
//通用窗口大小改变
jQuery(window).resize(function(){
	getPos();
	});
//通用滚动
jQuery(window).scroll(function(){
	footeffect();
	});

//首页位置获取
function indexPos(){
	//首页kv全屏
	if((wHeight-50)>1113){
		jQuery('.container .jumbotron').height(1113);
		}
		else{
			jQuery('.container .jumbotron').height(wHeight-50);
			}
	if(wWidth/(wHeight-50)>=1.73){
		jQuery('.jumbotron').css('background-size','100% auto');
		}
		else if(parseInt(jQuery('.jumbotron').width())>1240){
			jQuery('.jumbotron').css('background-size','100% auto');
			}
			else{
				jQuery('.jumbotron').css('background-size','auto 100%');
				}

	//首页 内容块1 延时显示内容、缓动内容
	nb1=parseInt(jQuery('.indexLine1 .needShowa').offset().top);
	sb1=parseInt(jQuery('.indexLine1left').offset().top)+200;
	sbw1=parseInt(jQuery('.indexLine1left').height());
	sbh1=sb1+sbw1;

	//首页 内容块2 延时显示内容、缓动内容
	nb2=parseInt(jQuery('.indexLine2 .needShowa').offset().top);
	sb2=parseInt(jQuery('.indexLine2left').offset().top)+200;
	sbw2=parseInt(jQuery('.indexLine2left').height());
	sbh2=sb2+sbw2;
	}

var manifest;
var preload;
function loadIndexImg() {
	manifest = [];
	for(var i=1;i<=66;i++){
		var s=i;
		s=s.toString();
		if(s.length==1){
			s='00'+s;
			}
			else if(s.length==2){
				s='0'+s;
				}
		manifest.push('images/index/act/'+s+'.png');
		}

	startPreload();
}
function startPreload() {
	preload = new createjs.LoadQueue(false);
    //preload.on("progress", handleFileProgress);
    preload.on("complete", loadComplete);
    preload.loadManifest(manifest);
  }
function loadComplete(event) {
	kvt=setInterval(function(){playKv()},35);
	}

var kvt;
var kvs=1;
var kvm=66;
function playKv(){
	if(kvs>kvm){
		clearInterval(kvt);
		return false;
		}
	var kvsstr=kvs.toString();
	if(kvsstr.length==1){
		kvsstr='00'+kvsstr;
		}
		else if(kvsstr.length==2){
			kvsstr='0'+kvsstr;
			}
	jQuery('.kvEf').css('background-image','url(images/index/act/'+kvsstr+'.png)');
	kvs++;
	}

//首页滚动事件
function indexScorll(){
	var wst=jQuery(window).scrollTop();
	var this_scrollTop1 = (wst+wHeight*0.8);
	var this_scrollTop2 = (wst+wHeight);

    if(this_scrollTop1>=nb1){
		jQuery('.indexLine1 .needShowa,.indexLine1 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.indexLine1left').css('transform','translate(0,0)');
		jQuery('.indexLine1Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb1&&this_scrollTop2<(sbh1+wHeight)){
				var sy=(this_scrollTop2-sb1);
				jQuery('.indexLine1left').css('transform','translate(0,'+(parseInt(150-sy/10))+'px)');
				jQuery('.indexLine1Bottom').css('transform','translate(0,'+sy/8+'px)');
				jQuery('.indexLine1Right').css('transform','translate(0,'+sy/8+'px)');
				}
			}


	if(this_scrollTop1>=nb2){
		jQuery('.indexLine2 .needShowa,.indexLine2 .needShowb,.lineBlock2').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.indexLine2left').css('transform','translate(0,0)');
		jQuery('.indexLine2Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb2&&this_scrollTop2<(sbh2+wHeight)){
				var sy=(this_scrollTop2-sb2);
				jQuery('.indexLine2left').css('transform','translate(0,'+(parseInt(150-sy/10))+'px)');
				jQuery('.indexLine2Bottom').css('transform','translate(0,'+sy/8+'px)');
				jQuery('.indexLine2Right').css('transform','translate(0,'+sy/8+'px)');
				}
			}
	}

//首页KV视频
function playSingleVideo(vid){
	player = new YKU.Player('videoYouku',{
		styleid: '0',
		client_id: youku_client_id,
		vid: vid,
		newPlayer: true
        });
	jQuery('.videoPop').show();
	}

function closeSingleVideo(){
	jQuery('.videoPop').hide();
	jQuery('.videoPop .videoYouku').html('');
	}

//文章详情
function closeArticleDetail(){
	jQuery('.articleDetail').hide();
	jQuery('.mCSB_container').html('');
	}

//Brand位置获取
function brandPos(){
	//brand kv全屏
	if(wWidth>767){
		jQuery('.kvBg').height(wHeight-50);
		jQuery('.kvBg .col-xs-12').height(wHeight-50);
		}
		else{
			jQuery('.kvBg').height('auto');
			jQuery('.kvBg .col-xs-12').height('auto');
			}


	//brand 内容块1 延时显示内容、缓动内容
	nb1=parseInt(jQuery('.brandLine1 .needShowa').offset().top);
	sb1=parseInt(jQuery('.brandLine1Left').offset().top)+200;
	sbw1=parseInt(jQuery('.brandLine1Left').height());
	sbh1=sb1+sbw1;

	//brand 内容块2 延时显示内容、缓动内容
	nb2=parseInt(jQuery('.brandLine2 .needShowa').offset().top);
	sb2=parseInt(jQuery('.brandLine2Left').offset().top)+200;
	sbw2=parseInt(jQuery('.brandLine2Left').height());
	sbh2=sb2+sbw2;

	//brand 内容块3 延时显示内容、缓动内容
	nb3=parseInt(jQuery('.brandLine3 .needShowa').offset().top);
	sb3=parseInt(jQuery('.brandLine3Left').offset().top)+200;
	sbw3=parseInt(jQuery('.brandLine3Left').height());
	sbh3=sb3+sbw3;

	//brand 内容块4 延时显示内容、缓动内容
	nb4=parseInt(jQuery('.brandLine4 .needShowa').offset().top);
	sb4=parseInt(jQuery('.brandLine4Left').offset().top)+200;
	sbw4=parseInt(jQuery('.brandLine4Left').height());
	sbh4=sb4+sbw4;

	//brand 内容块 延时显示内容、缓动内容
	sb5=parseInt(jQuery('.biTop').offset().top)+200;
	sbw5=parseInt(jQuery('.biTop').height());
	sbh5=sb5+sbw5;

	//brand 内容块6 延时显示内容、缓动内容
	sb6=parseInt(jQuery('.bibLeft').offset().top)+200;
	sbw6=parseInt(jQuery('.bibLeft').height());
	sbh6=sb6+sbw6;

	//brand 内容块7 延时显示内容、缓动内容
	nb7=parseInt(jQuery('.brandLine5 .needShowa').offset().top);
	sb7=parseInt(jQuery('.brandLine5Left').offset().top)+200;
	sbw7=parseInt(jQuery('.brandLine5Left').height());
	sbh7=sb5+sbw7;
	}

//Brand滚动事件
function brandScorll(){
	var wst=jQuery(window).scrollTop();
	var this_scrollTop1 = (wst+wHeight*0.8);
	var this_scrollTop2 = (wst+wHeight);

	brandPos();

    if(this_scrollTop1>=nb1){
		jQuery('.brandLine1 .needShowa,.brandLine1 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.brandLine1Left').css('transform','translate(0,0)');
		jQuery('.brandLine1Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb1&&this_scrollTop2<(sbh1)){
				var sy=(this_scrollTop2-sb1);
				jQuery('.brandLine1Left').css('transform','translate(0,'+(0-sy/15)+'px)');
				jQuery('.brandLine1Right').css('transform','translate(0,'+sy/10+'px)');
				}
			}

	if(this_scrollTop1>=nb2){
		jQuery('.brandLine2 .needShowa,.brandLine2 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.brandLine2Left').css('transform','translate(0,0)');
		jQuery('.brandLine2Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb2&&this_scrollTop2<(sbh2)){
				var sy=(this_scrollTop2-sb2);
				jQuery('.brandLine2Left').css('transform','translate(0,'+(0-sy/15)+'px)');
				jQuery('.brandLine2Right').css('transform','translate(0,'+sy/10+'px)');
				}
			}

	if(this_scrollTop1>=nb3){
		jQuery('.brandLine3 .needShowa,.brandLine3 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.brandLine3Left').css('transform','translate(0,0)');
		jQuery('.brandLine3Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb3&&this_scrollTop2<(sbh3)){
				var sy=(this_scrollTop2-sb3);
				jQuery('.brandLine3Left').css('transform','translate(0,'+(0-sy/15)+'px)');
				jQuery('.brandLine3Right').css('transform','translate(0,'+sy/10+'px)');
				}
			}

	if(this_scrollTop1>=nb4){
		jQuery('.brandLine4 .needShowa,.brandLine4 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.brandLine4Left').css('transform','translate(0,0)');
		jQuery('.brandLine4Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb4&&this_scrollTop2<(sbh4)){
				var sy=(this_scrollTop2-sb4);
				jQuery('.brandLine4Left').css('transform','translate(0,'+(0-sy/15)+'px)');
				jQuery('.brandLine4Right').css('transform','translate(0,'+sy/10+'px)');
				}
			}

	if(wWidth<=767){
		jQuery('.biTop').css('transform','translate(0,0)');
		}
		else{
			if(this_scrollTop2>sb5&&this_scrollTop2<(sbh5)){
				var sy=(this_scrollTop2-sb5);
				jQuery('.biTop').css('transform','translate(0,'+(0-sy/10)+'px)');
				}
			}

	if(wWidth<=767){
		jQuery('.bibLeft').css('transform','translate(0,0)');
		jQuery('.bibRight').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb6&&this_scrollTop2<(sbh6)){
				var sy=(this_scrollTop2-sb6);
				jQuery('.bibLeft').css('transform','translate(0,'+(0-sy/15)+'px)');
				jQuery('.bibRight').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb7){
		jQuery('.brandLine5 .needShowa,.brandLine5 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.brandLine5Left').css('transform','translate(0,0)');
		jQuery('.brandLine5Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb7&&this_scrollTop2<(sbh7)){
				var sy=(this_scrollTop2-sb7);
				jQuery('.brandLine5Left').css('transform','translate(0,'+(0-sy/15)+'px)');
				jQuery('.brandLine5Right').css('transform','translate(0,'+sy/10+'px)');
				}
			}
	}


//活动位置获取
function eventPos(){
	//活动 内容块1 延时显示内容、缓动内容
	nb1=parseInt(jQuery('.eventLine1 .needShowa').offset().top);
	sb1=parseInt(jQuery('.eventLine1left').offset().top)+200;
	sbw1=parseInt(jQuery('.eventLine1left').height());
	sbh1=sb1+sbw1;

	//活动 内容块2 延时显示内容、缓动内容
	nb2=parseInt(jQuery('.eventLine2 .needShowa').offset().top);
	sb2=parseInt(jQuery('.eventLine2left').offset().top)+200;
	sbw2=parseInt(jQuery('.eventLine2left').height());
	sbh2=sb2+sbw2;

	//活动 内容块3 延时显示内容、缓动内容
	nb3=parseInt(jQuery('.eventLine3 .needShowa').offset().top);
	sb3=parseInt(jQuery('.eventLine3left').offset().top)+200;
	sbw3=parseInt(jQuery('.eventLine3left').height());
	sbh3=sb3+sbw3;
	}

//活动滚动事件
function eventScorll(){
	var wst=jQuery(window).scrollTop();
	var this_scrollTop1 = (wst+wHeight*0.8);
	var this_scrollTop2 = (wst+wHeight);

    if(this_scrollTop1>=nb1){
		jQuery('.eventLine1 .needShowa,.eventLine1 .needShowb,.lineBlock2').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.eventLine1left').css('transform','translate(0,0)');
		jQuery('.eventLine1Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb1&&this_scrollTop2<(sbh1+wHeight)){
				var sy=(this_scrollTop2-sb1);
				jQuery('.eventLine1left').css('transform','translate(0,'+(parseInt(200-sy/10))+'px)');
				jQuery('.eventLine1Bottom').css('transform','translate(0,'+sy/8+'px)');
				jQuery('.eventLine1Right').css('transform','translate(0,'+sy/8+'px)');
				}
			}


	if(this_scrollTop1>=nb2){
		jQuery('.eventLine2 .needShowa,.eventLine2 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.eventLine2left').css('transform','translate(0,0)');
		jQuery('.eventLine2Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb2&&this_scrollTop2<(sbh2+wHeight)){
				var sy=(this_scrollTop2-sb2);
				jQuery('.eventLine2left').css('transform','translate(0,'+(parseInt(200-sy/10))+'px)');
				jQuery('.eventLine2Bottom').css('transform','translate(0,'+sy/8+'px)');
				jQuery('.eventLine2Right').css('transform','translate(0,'+sy/8+'px)');
				}
			}

	if(this_scrollTop1>=nb3){
		jQuery('.eventLine3 .needShowa,.eventLine3 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.eventLine3left').css('transform','translate(0,0)');
		jQuery('.eventLine3Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb3&&this_scrollTop2<(sbh3+wHeight)){
				var sy=(this_scrollTop2-sb3);
				jQuery('.eventLine3left').css('transform','translate(0,'+(parseInt(200-sy/10))+'px)');
				jQuery('.eventLine3Bottom').css('transform','translate(0,'+sy/8+'px)');
				jQuery('.eventLine3Right').css('transform','translate(0,'+sy/8+'px)');
				}
			}
	}

//新点炫饮位置获取
function drinkPos(){
	//新点炫饮 内容块1 延时显示内容、缓动内容
	nb1=parseInt(jQuery('.drinkLine1 .needShowa').offset().top);
	sb1=parseInt(jQuery('.drinkLine1Left').offset().top)+200;
	sbw1=parseInt(jQuery('.drinkLine1Left').height());
	sbh1=sb1+sbw1;

	//新点炫饮 内容块2 延时显示内容、缓动内容
	nb2=parseInt(jQuery('.drinkLine2 .needShowa').offset().top);
	sb2=parseInt(jQuery('.drinkLine2Left').offset().top)+200;
	sbw2=parseInt(jQuery('.drinkLine2Left').height());
	sbh2=sb2+sbw2;

	//新点炫饮 内容块3 延时显示内容、缓动内容
	nb3=parseInt(jQuery('.drinkLine3 .needShowa').offset().top);
	sb3=parseInt(jQuery('.drinkLine3Left').offset().top)+200;
	sbw3=parseInt(jQuery('.drinkLine3Left').height());
	sbh3=sb3+sbw3;

	//新点炫饮 内容块4 延时显示内容、缓动内容
	nb4=parseInt(jQuery('.drinkLine4 .needShowa').offset().top);
	sb4=parseInt(jQuery('.drinkLine4Left').offset().top)+200;
	sbw4=parseInt(jQuery('.drinkLine4Left').height());
	sbh4=sb4+sbw4;

	//新点炫饮 内容块5 延时显示内容、缓动内容
	nb5=parseInt(jQuery('.drinkLine5 .needShowa').offset().top);
	sb5=parseInt(jQuery('.drinkLine5Left').offset().top)+200;
	sbw5=parseInt(jQuery('.drinkLine5Left').height());
	sbh5=sb5+sbw5;

	//新点炫饮 内容块6 延时显示内容、缓动内容
	nb6=parseInt(jQuery('.drinkLine6 .needShowa').offset().top);
	sb6=parseInt(jQuery('.drinkLine6Left').offset().top)+200;
	sbw6=parseInt(jQuery('.drinkLine6Left').height());
	sbh6=sb6+sbw6;

	//新点炫饮 内容块7 延时显示内容、缓动内容
	nb7=parseInt(jQuery('.drinkLine7 .needShowa').offset().top);
	sb7=parseInt(jQuery('.drinkLine7Left').offset().top)+200;
	sbw7=parseInt(jQuery('.drinkLine7Left').height());
	sbh7=sb7+sbw7;

	//新点炫饮 内容块8 延时显示内容、缓动内容
	nb8=parseInt(jQuery('.drinkLine8 .needShowa').offset().top);
	sb8=parseInt(jQuery('.drinkLine8Left').offset().top)+200;
	sbw8=parseInt(jQuery('.drinkLine8Left').height());
	sbh8=sb8+sbw8;

	//新点炫饮 内容块9 延时显示内容、缓动内容
	nb9=parseInt(jQuery('.drinkLine9 .needShowa').offset().top);
	sb9=parseInt(jQuery('.drinkLine9Left').offset().top)+200;
	sbw9=parseInt(jQuery('.drinkLine9Left').height());
	sbh9=sb9+sbw9;

	//新点炫饮 内容块10 延时显示内容、缓动内容
	nb10=parseInt(jQuery('.drinkLine10 .needShowa').offset().top);
	sb10=parseInt(jQuery('.drinkLine10Left').offset().top)+200;
	sbw10=parseInt(jQuery('.drinkLine10Left').height());
	sbh10=sb10+sbw10;

	//新点炫饮 内容块11 延时显示内容、缓动内容
	nb11=parseInt(jQuery('.drinkLine11 .needShowa').offset().top);
	sb11=parseInt(jQuery('.drinkLine11Left').offset().top)+200;
	sbw11=parseInt(jQuery('.drinkLine11Left').height());
	sbh11=sb11+sbw11;
	}

//新点炫饮滚动事件
function drinkScorll(){
	var wst=jQuery(window).scrollTop();
	var this_scrollTop1 = (wst+wHeight*0.8);
	var this_scrollTop2 = (wst+wHeight);

    if(this_scrollTop1>=nb1){
		jQuery('.drinkLine1 .needShowa,.drinkLine1 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine1Left').css('transform','translate(0,0)');
		jQuery('.drinkLine1Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb1&&this_scrollTop2<(sbh1+wHeight)){
				var sy=(this_scrollTop2-sb1);
				jQuery('.drinkLine1Left').css('transform','translate(0,0)');
				jQuery('.drinkLine1Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb2){
		jQuery('.drinkLine2 .needShowa,.drinkLine2 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine2Left').css('transform','translate(0,0)');
		jQuery('.drinkLine2Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb2&&this_scrollTop2<(sbh2+wHeight)){
				var sy=(this_scrollTop2-sb2);
				jQuery('.drinkLine2Left').css('transform','translate(0,0)');
				jQuery('.drinkLine2Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb3){
		jQuery('.drinkLine3 .needShowa,.drinkLine3 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine3Left').css('transform','translate(0,0)');
		jQuery('.drinkLine3Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb3&&this_scrollTop2<(sbh3+wHeight)){
				var sy=(this_scrollTop2-sb3);
				jQuery('.drinkLine3Left').css('transform','translate(0,0)');
				jQuery('.drinkLine3Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb4){
		jQuery('.drinkLine4 .needShowa,.drinkLine4 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine4Left').css('transform','translate(0,0)');
		jQuery('.drinkLine4Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb4&&this_scrollTop2<(sbh4+wHeight)){
				var sy=(this_scrollTop2-sb4);
				jQuery('.drinkLine4Left').css('transform','translate(0,0)');
				jQuery('.drinkLine4Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb5){
		jQuery('.drinkLine5 .needShowa,.drinkLine5 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine5Left').css('transform','translate(0,0)');
		jQuery('.drinkLine5Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb5&&this_scrollTop2<(sbh5+wHeight)){
				var sy=(this_scrollTop2-sb5);
				jQuery('.drinkLine5Left').css('transform','translate(0,0)');
				jQuery('.drinkLine5Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb6){
		jQuery('.drinkLine6 .needShowa,.drinkLine6 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine6Left').css('transform','translate(0,0)');
		jQuery('.drinkLine6Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb6&&this_scrollTop2<(sbh6+wHeight)){
				var sy=(this_scrollTop2-sb6);
				jQuery('.drinkLine6Left').css('transform','translate(0,0)');
				jQuery('.drinkLine6Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb7){
		jQuery('.drinkLine7 .needShowa,.drinkLine7 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine7Left').css('transform','translate(0,0)');
		jQuery('.drinkLine7Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb7&&this_scrollTop2<(sbh7+wHeight)){
				var sy=(this_scrollTop2-sb7);
				jQuery('.drinkLine7Left').css('transform','translate(0,0)');
				jQuery('.drinkLine7Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb8){
		jQuery('.drinkLine8 .needShowa,.drinkLine8 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine8Left').css('transform','translate(0,0)');
		jQuery('.drinkLine8Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb8&&this_scrollTop2<(sbh8+wHeight)){
				var sy=(this_scrollTop2-sb8);
				jQuery('.drinkLine8Left').css('transform','translate(0,0)');
				jQuery('.drinkLine8Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb9){
		jQuery('.drinkLine9 .needShowa,.drinkLine9 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine9Left').css('transform','translate(0,0)');
		jQuery('.drinkLine9Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb9&&this_scrollTop2<(sbh9+wHeight)){
				var sy=(this_scrollTop2-sb9);
				jQuery('.drinkLine9Left').css('transform','translate(0,0)');
				jQuery('.drinkLine9Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb10){
		jQuery('.drinkLine10 .needShowa,.drinkLine10 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine10Left').css('transform','translate(0,0)');
		jQuery('.drinkLine10Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb10&&this_scrollTop2<(sbh10+wHeight)){
				var sy=(this_scrollTop2-sb10);
				jQuery('.drinkLine10Left').css('transform','translate(0,0)');
				jQuery('.drinkLine10Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}

	if(this_scrollTop1>=nb11){
		jQuery('.drinkLine11 .needShowa,.drinkLine11 .needShowb').css('opacity',1);
		}
	if(wWidth<=767){
		jQuery('.drinkLine11Left').css('transform','translate(0,0)');
		jQuery('.drinkLine11Right').css('transform','translate(0,0');
		}
		else{
			if(this_scrollTop2>sb11&&this_scrollTop2<(sbh11+wHeight)){
				var sy=(this_scrollTop2-sb11);
				jQuery('.drinkLine11Left').css('transform','translate(0,0)');
				jQuery('.drinkLine11Right').css('transform','translate(0,'+sy/15+'px)');
				}
			}
	}

var at;
function drinkNav(){
	jQuery(".dnCol a").click(function(){
		at=jQuery(this).attr('at');
		var ath=jQuery(at).offset().top;
		jQuery('html,body').animate({scrollTop: ath}, 500 ,'linear');
    });
	}

function drinkNavInit(){
	if(wWidth<=767){
		jQuery('.dnCol ul').slideUp();
		}
		else{
			jQuery('.dnCol ul').slideDown();
			jQuery('.drinkIcon3').css('transform','rotate(0deg)');
			}
	}

function showThisDirks(e){
	if(wWidth<=767){
		var uld=jQuery(e).siblings('ul').css('display');
		if(uld=='none'){
			jQuery(e).siblings('ul').slideDown();
			jQuery(e).find('.drinkIcon3').css('transform','rotate(-180deg)');
			}
			else{
				jQuery(e).siblings('ul').slideUp();
				jQuery(e).find('.drinkIcon3').css('transform','rotate(0deg)');
				}
		}
	}

function changeDnTab(e){
	jQuery('.dnTab').removeClass('dnTabActive');
	jQuery('.dtContent').hide();
	jQuery('.dnTab').eq(e).addClass('dnTabActive');
	jQuery('.dtContent').eq(e).show();
	}

function showNavQc(){
	jQuery('.navQcBlock').show();
	}
function closeNavQc(){
	jQuery('.navQcBlock').hide();
	}
