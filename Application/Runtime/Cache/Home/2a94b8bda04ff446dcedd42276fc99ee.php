<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<title>雕蝉学校</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=7" >
  <meta name="description" content="B">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/reset.css">
  <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/animate.min.css">
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/coman.css">
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/layout.css">
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/style.css">
  <script type="text/javascript" src="/Public/Home/js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="/Public/Home/js/public.js"></script>
  <link rel="stylesheet" href="/Public/Home/css/swiper.min.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="/Public/Home/js/html5shiv.min.js"></script>
  <![endif]-->
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/owl.carousel.css">
<link type="text/css" rel="stylesheet" href="/Public/Home/css/owl.theme.css">

  <script type="text/javascript" src="/Public/Home/js/owl.carousel.min.js"></script>
<script type="text/javascript">
$(function(){
  $('#scroll').owlCarousel({
    items: 3,
    autoPlay: true,
    navigation: true,
    navigationText: ["",""],
    scrollPerPage: true
  });
});
</script>

  <script type="text/javascript">
var myFocus={
  //Design By Koen @ 2010.8.x
  //http://hi.baidu.com/koen_li
  $:function(id){
    return document.getElementById(id);
  },
  $$:function(tag,obj){
    return (typeof obj=='object'?obj:this.$(obj)).getElementsByTagName(tag);
  },
  style:function(obj,style){
    return (+[1,])?window.getComputedStyle(obj,null)[style]:obj.currentStyle[style];
  },//getStyle简化版
  easeOut:function(t,b,c,d){
    return -c*((t=t/d-1)*t*t*t - 1) + b;
  },
  move:function(obj,prop,val,type,spd,fn)else {
        clearInterval(obj[prop+'Timer']);fn&&fn.call(obj);
      }
    },10);
    return this;
  },
  addList:function(obj,cla,x){
    //生成HMTL,cla为列表的class,其中封装有:cla='txt'(生成alt文字),cla='num'(生成按钮数字),cla='thumb'(生成小图)
    var s=[],n=x||this.$$('li',this.$$('ul',obj)[0]).length,num=cla.length;
    for(var j=0;j<num;j++){
      s.push('<ul class='+cla[j]+'>');
      for(var i=0;i<n;i++){
        s.push('<li>'+(cla[j]=='num'?(i+1):(cla[j]=='txt'?this.$$('li',obj)[i].innerHTML.replace(/\<img.*?\>/i,this.$$('img',obj)[i].alt):(cla[j]=='thumb'?'<img src='+(this.$$('img',obj)[i].getAttribute("thumb")||this.$$('img',obj)[i].src)+' />':'')))+'<span></span></li>')
      };
    s.push('</ul>');
    }; obj.innerHTML+=s.join('');
  },
  setting:function(par){
    if(window.attachEvent){window.attachEvent('onload',function(){
      myFocus[par.style](par)});
    }
    else{window.addEventListener('load',function(){
      myFocus[par.style](par)},false);
    }
  },
  mF_liuzg:function(par){
    var box=this.$(par.id),boxH=box.offsetHeight,t=par.time*1000;
    this.addList(box,['txt-bg','txt','num']);
    var pic=this.$$('li',this.$$('ul', box)[0]),n=pic.length;
    var c=boxH%par.chip?8:par.chip,h=boxH/c,pics=[];
    for(var i=0;i<c;i++){
      pics.push('<li><p>')
      for(var j=0;j<n;j++) pics.push(pic[j].innerHTML);
        pics.push('</p></li>')
      }
      this.$$('ul', box)[0].innerHTML=pics.join('');
      var ul=this.$$('ul',box),txt=this.$$('li',ul[2]),btn=this.$$('li',ul[3]),pic=this.$$('li',ul[0]);
      for(var i=0;i<c;i++)
  var index = 0;//开始显示的序号
  box.removeChild(this.$$('div',box)[0]);
  var run = function(idx) {
  var tt=par.type==4?Math.round(1+(Math.random()*(3-1))):par.type;//效果选择
  btn[index].className = '';
  txt[index].style.display='none';
  if(index==n-1) index=-1;
  var N=idx!=undefined?idx:index+1;
  var spd=tt==2?20:(tt==1?80:Math.round(20+(Math.random()*(80-20))));
  for(var i=0;i<c;i++){
    if(tt==3) spd=Math.round(20+(Math.random()*(80-20)));
    myFocus.move(myFocus.$$('p',pic[i])[0],'top',-N*c*h-i*h,'easeOut',spd);
    spd=tt==2?spd+10:(tt==1?spd-10:spd);
  }
  btn[N].className = 'current';
  txt[N].style.display='block';
  index = N;
}
  run(index);
  var auto=setInterval(function(){run()},t);
  for (var j=0;j<n;j++){
    btn[j].j=j;
    btn[j].onclick=function(){if(!this.className) run(this.j)}
  }
  box.onmouseover=function(){clearInterval(auto);}
  box.onmouseout=function(){auto=setInterval(function(){run()},t);}
  for(var i=0,lk=this.$$('a',box),ln=lk.length;i<ln;i++) lk[i].onfocus=function(){this.blur();}//去除虚线框
}
};

myFocus.setting({
  style:'mF_liuzg',//style为风格样式，
  id:'myFocus',//焦点图ID
  chip:8,//图片切片数量，能被焦点图的高整除才有效，默认为8片
  type:4,//切片效果，1为甩头，2为甩尾，3为凌乱，4为随机效果
  time:4//每帧图片时间间隔
});//更多样式设置留意myFocus正式版
</script>

</head>
<body>
    <div class="wrapper">

  		<div class="hearder w1090">
          <div class="logo fl">
              <a href="index.html"><img src="/Public/Home/images/logo.png"></a>
          </div>
          <div class="navBar fr">
              <ul>
                  <li>
                    <a href="/index.php/Home/Index" class="curr">首页<span>Home</span></a>
                  </li>       
                    <li>
                    <a href="/index.php/Home/Start/start">合作明星<span>About Us</span></a>
                  </li>      
                    <li>
                    <a href="/index.php/Home/Course/course">课程设置<span>Course</span></a>
                  </li>  
                  <li>
                    <a href="/index.php/Home/Team/team">名师团队<span>Course</span></a>
                  </li>   
                    <li>
                    <a href="/index.php/Home/News/news">动态咨询<span>News</span></a>
                  </li>       
                    <li>
                    <a href="/index.php/Home/Product/product">作品欣赏<span>Teachers</span></a>
                  </li>      
                    <li>
                    <a href="/index.php/Home/Join/join">创业加盟<span>Join us</span></a>
                  </li>       
                    <li>                                                       
                    <a href="/index.php/Home/Contact/contact">联系我们<span>Contact Us</span></a>
                  </li>
              </ul>
          </div>
      </div>

      <div class="flexslider">
        <ul class="slides">
        <?php if(is_array($ban_res)): foreach($ban_res as $key=>$vo): ?><li style="background:url(<?php echo ($vo['ban_url']); ?>) 50% 0 no-repeat;"></li><?php endforeach; endif; ?>	  
        </ul>
      </div>


      <div class="advContent w1090">
          <a href="">
               <span><img src="/Public/Home/images/icon01.png" alt=""></span>
               <h3>更加专业</h3>
               <p>优势宣传语优势宣传语优优势宣传<br>语优势宣传语优势优</p>
          </a>                           
          <a href="">
               <span><img src="/Public/Home/images/icon02.png" alt=""></span>
               <h3>资深团队</h3>
               <p>优势宣传语优势宣传语优优势宣传<br>语优势宣传语优势优</p>
          </a>                       
          <a href="">
               <span><img src="/Public/Home/images/icon03.png" alt=""></span>
               <h3>定制培养计划</h3>
               <p>优势宣传语优势宣传语优优势宣传<br>语优势宣传语优势优</p>
          </a>                        
          <a href="">
               <span><img src="/Public/Home/images/icon04.png" alt=""></span>
               <h3>稳固就业</h3>
               <p>优势宣传语优势宣传语优优势宣传<br>语优势宣传语优势优</p>
          </a>
          <div class="clear"></div>
      </div>


      <div class="pratiseCont">
          <div class="w1090">
              <div class="praLeft fl">
                 <div class="title"><img src="/Public/Home/images/title01.png" alt=""></div>
                 <h1><?php echo ($tran['i_title']); ?></h1>
                 <p>
                 	<?php echo ($tran['i_content']); ?>
                 </p>
                 <div class="moreXd"><a href=""><img src="/Public/Home/images/more.jpg"></a></div>
              </div>
              <div class="fr praRight">
                  
                  <div id="myFocus" class="mF_liuzg">
                    <div class="loading"><span>请稍候...</span></div><!--载入画面-->
                    <ul class="pic"><!--内容列表-->
                      <li><a href="#" target="_blank"><img src="/Public/Home/images/sbanner01.jpg" alt=""></a></li>
                      <li><a href="#" target="_blank"><img src="/Public/Home/images/sbanner01.jpg" alt=""></a></li>
                      <li><a href="#" target="_blank"><img src="/Public/Home/images/sbanner01.jpg" alt=""></a></li>
                      <li><a href="#" target="_blank"><img src="/Public/Home/images/sbanner01.jpg" alt=""></a></li>
                    </ul>
                  </div>

              </div>
              <div class="clear"></div>
          </div>
      </div>
      <div class="wrapper bor-b1 padd-b30">
      
          <div class="w1090 slideBox">
               <div class="title mar-t15 mar-b15 padd-t10 padd-b10"><img src="/Public/Home/images/title02.png" alt=""> <a href="" class="fr"><img src="/Public/Home/images/more.jpg"></a></div>
               
               
               
               <div class="clear"></div>

               

              <div class="scroll-outer">
                  <div id="scroll" class="owl-carousel">
                  	<?php if(is_array($teacher)): foreach($teacher as $key=>$teacher): ?><div class="item">
                    	
                               <div class="slideD">
                                  <a href="">
                                      <img src="<?php echo ($teacher['i_thumb']); ?>" alt="">
                                      <b><?php echo ($teacher['i_title']); ?></b>
                                      <p><span><?php echo ($teacher['i_job']); ?></span></p>
                                      <ul>
                                        <li><?php echo ($teacher['i_content1']); ?></li>
                                        <li><?php echo ($teacher['i_content2']); ?></li>
                                        <li><?php echo ($teacher['i_content3']); ?></li>
                                        <!--<li><?php echo ($teacher['i_content3']); ?></li>-->
                                        <!--<li>教师履历教师</li>-->
                                      </ul>
                                  </a>
                               </div>   
                    </div><?php endforeach; endif; ?> 
                    <!--<div class="item">
                               <div class="slideD">
                                  <a href="">
                                      <img src="/Public/Home/images/t01.png" alt="">
                                      <b>Key</b>
                                      <p><span>外聘时尚设计讲师</span></p>
                                      <ul>
                                        <li>教师履历教师履历教师履</li>
                                        <li>教师履历教师履历</li>
                                        <li>教师履历教师履历教师</li>
                                        <li>教师履历教师</li>
                                      </ul>
                                  </a>
                               </div>  
                    </div>
                    <div class="item">
                               <div class="slideD">
                                  <a href="">
                                      <img src="/Public/Home/images/t01.png" alt="">
                                      <b>Key</b>
                                      <p><span>外聘时尚设计讲师</span></p>
                                      <ul>
                                        <li>教师履历教师履历教师履</li>
                                        <li>教师履历教师履历</li>
                                        <li>教师履历教师履历教师</li>
                                        <li>教师履历教师</li>
                                      </ul>
                                  </a>
                               </div>  
                    </div>
                    <div class="item">
                               <div class="slideD">
                                  <a href="">
                                      <img src="/Public/Home/images/t02.png" alt="">
                                      <b>Key</b>
                                      <p><span>外聘时尚设计讲师</span></p>
                                      <ul>
                                        <li>教师履历教师履历教师履</li>
                                        <li>教师履历教师履历</li>
                                        <li>教师履历教师履历教师</li>
                                        <li>教师履历教师</li>
                                      </ul>
                                  </a>
                               </div>  
                    </div>
                    <div class="item">
                               <div class="slideD">
                                  <a href="">
                                      <img src="/Public/Home/images/t02.png" alt="">
                                      <b>Key</b>
                                      <p><span>外聘时尚设计讲师</span></p>
                                      <ul>
                                        <li>教师履历教师履历教师履</li>
                                        <li>教师履历教师履历</li>
                                        <li>教师履历教师履历教师</li>
                                        <li>教师履历教师</li>
                                      </ul>
                                  </a>
                               </div>  
                    </div>
                    <div class="item">
                               <div class="slideD">
                                  <a href="">
                                      <img src="/Public/Home/images/t02.png" alt="">
                                      <b>Key</b>
                                      <p><span>外聘时尚设计讲师</span></p>
                                      <ul>
                                        <li>教师履历教师履历教师履</li>
                                        <li>教师履历教师履历</li>
                                        <li>教师履历教师履历教师</li>
                                        <li>教师履历教师</li>
                                      </ul>
                                  </a>
                               </div>  
                    </div>

                    <div class="item">
                               <div class="slideD">
                                  <a href="">
                                      <img src="/Public/Home/images/t03.png" alt="">
                                      <b>Key</b>
                                      <p><span>外聘时尚设计讲师</span></p>
                                      <ul>
                                        <li>教师履历教师履历教师履</li>
                                        <li>教师履历教师履历</li>
                                        <li>教师履历教师履历教师</li>
                                        <li>教师履历教师</li>
                                      </ul>
                                  </a>
                               </div>  
                    </div>
                    <div class="item">
                               <div class="slideD">
                                  <a href="">
                                      <img src="/Public/Home/images/t03.png" alt="">
                                      <b>Key</b>
                                      <p><span>外聘时尚设计讲师</span></p>
                                      <ul>
                                        <li>教师履历教师履历教师履</li>
                                        <li>教师履历教师履历</li>
                                        <li>教师履历教师履历教师</li>
                                        <li>教师履历教师</li>
                                      </ul>
                                  </a>
                               </div>  
                    </div>
                    <div class="item">
                               <div class="slideD">
                                  <a href="">
                                      <img src="/Public/Home/images/t03.png" alt="">
                                      <b>Key</b>
                                      <p><span>外聘时尚设计讲师</span></p>
                                      <ul>
                                        <li>教师履历教师履历教师履</li>
                                        <li>教师履历教师履历</li>
                                        <li>教师履历教师履历教师</li>
                                        <li>教师履历教师</li>
                                      </ul>
                                  </a>
                               </div>  
                    </div>-->

                
                  </div>
              </div>

          </div>



       </div>


       <div class="wrapper bor-b1 padd-b30">
       
             <div class="w1090">
                   <div class="title mar-t15 mar-b15 padd-t10 padd-b10"><img src="/Public/Home/images/title03.png" alt=""> <a href="/index.php/Home/Product/product" class="fr"><img src="/Public/Home/images/more.jpg"></a></div>

                   <div class="newsTabs">
                        <div class="newsT">
                            <a href="" class="curr"> 全部</a>       
                            <a href="">彩妆设计图纸</a>       
                            <a href="">彩妆造型作品</a>       
                            <a href="">发型设计作品</a>       
                            <a href="">影视造型作品</a>       
                            <a href="">美甲设计作品</a>
                            <a href="">半永久定妆作品</a>
                        </div>
                   </div>

                   <div class="newsC">
                        <div class="newsCv currBx">
                        	<?php if(is_array($menberall)): foreach($menberall as $key=>$menberall): ?><a href="/index.php/Home/Product/detail/id/<?php echo ($menberall['p_id']); ?>">
                                <img src="<?php echo ($menberall['p_thumb']); ?>">
                                <h4><?php echo ($menberall['p_title']); ?></h4>
                                <p>
                                   <span><?php echo ($menberall['p_source']); ?></span> 
                                   <i><?php echo ($menberall['p_addtime']); ?></i>  
                                </p>
                            </a><?php endforeach; endif; ?>
                        </div>  
                        
                        
                        <div class="newsCv">
                        	<?php if(is_array($menber3)): foreach($menber3 as $key=>$menber3): ?><a href="/index.php/Home/Product/detail/id/<?php echo ($menber3['p_id']); ?>">
                                <img src="<?php echo ($menber3['p_thumb']); ?>">
                                <h4><?php echo ($menber3['p_title']); ?></h4>
                                <p>
                                   <span><?php echo ($menber3['p_source']); ?></span> 
                                   <i><?php echo ($menber3['p_addtime']); ?></i>  
                                </p>
                            </a><?php endforeach; endif; ?>
                        </div>
                        <div class="newsCv">
                        	<?php if(is_array($menber4)): foreach($menber4 as $key=>$menber4): ?><a href="/index.php/Home/Product/detail/id/<?php echo ($menber4['p_id']); ?>">
                                <img src="<?php echo ($menber4['p_thumb']); ?>">
                                <h4><?php echo ($menber4['p_title']); ?></h4>
                                <p>
                                   <span><?php echo ($menber4['p_source']); ?></span> 
                                   <i><?php echo ($menber4['p_addtime']); ?></i>  
                                </p>
                            </a><?php endforeach; endif; ?> 
                        </div>
                        
                        <div class="newsCv">
                        	<?php if(is_array($menber5)): foreach($menber5 as $key=>$menber5): ?><a href="/index.php/Home/Product/detail/id/<?php echo ($menber5['p_id']); ?>">
                                <img src="<?php echo ($menber5['p_thumb']); ?>">
                                <h4><?php echo ($menber5['p_title']); ?></h4>
                                <p>
                                   <span><?php echo ($menber5['p_source']); ?></span> 
                                   <i><?php echo ($menber5['p_addtime']); ?></i>  
                                </p>
                            </a><?php endforeach; endif; ?> 
                        </div>  
                        
                        
                        <div class="newsCv">
                          <?php if(is_array($menber6)): foreach($menber6 as $key=>$menber6): ?><a href="/index.php/Home/Product/detail/id/<?php echo ($menber6['p_id']); ?>">
                                <img src="<?php echo ($menber6['p_thumb']); ?>">
                                <h4><?php echo ($menber6['p_title']); ?></h4>
                                <p>
                                   <span><?php echo ($menber6['p_source']); ?></span> 
                                   <i><?php echo ($menber6['p_addtime']); ?></i>  
                                </p>
                            </a><?php endforeach; endif; ?> 
                        </div>
                        <div class="newsCv">
                           <?php if(is_array($menber7)): foreach($menber7 as $key=>$menber7): ?><a href="/index.php/Home/Product/detail/id/<?php echo ($menber7['p_id']); ?>">
                                <img src="<?php echo ($menber7['p_thumb']); ?>">
                                <h4><?php echo ($menber7['p_title']); ?></h4>
                                <p>
                                   <span><?php echo ($menber7['p_source']); ?></span> 
                                   <i><?php echo ($menber7['p_addtime']); ?></i>  
                                </p>
                            </a><?php endforeach; endif; ?> 
                        </div>
                        <div class="newsCv">
                        	<?php if(is_array($menber8)): foreach($menber8 as $key=>$menber8): ?><a href="/index.php/Home/Product/detail/id/<?php echo ($menber8['p_id']); ?>">
                                <img src="<?php echo ($menber8['p_thumb']); ?>">
                                <h4><?php echo ($menber8['p_title']); ?></h4>
                                <p>
                                   <span><?php echo ($menber8['p_source']); ?></span> 
                                   <i><?php echo ($menber8['p_addtime']); ?></i>  
                                </p>
                            </a><?php endforeach; endif; ?> 
                        </div>                        
                   </div>  
             </div>  

       </div>


       <div class="w1090  padd-b30">
                   <div class="title mar-t15 mar-b15 padd-t10 padd-b10"><img src="/Public/Home/images/title04.png" alt=""> <a href="" class="fr"><img src="/Public/Home/images/more.jpg"></a></div>

                   <div class="linkBox">
                        <ul>
                            <li><a href=""><img src="/Public/Home/images/01.png"></a></li>
                            <li><a href=""><img src="/Public/Home/images/02.png"></a></li>
                            <li><a href=""><img src="/Public/Home/images/03.png"></a></li>
                            <li><a href=""><img src="/Public/Home/images/04.png"></a></li>
                            <li><a href=""><img src="/Public/Home/images/05.png"></a></li>
                        </ul>
                   </div>
      </div>


      <!--<div class="wrapper footer">
           <div class="w1090 rela">
                  <p>Copy © 2015 雕婵化妆形象设计中心 版权所有    艾斯顿文化传媒有限公司提供技术支持</p>

                  <p>地址:永川区1号站(交巡警平台)　公交路线：乘坐101、102、105、109、115、501、502 到望北路一号站</p>

                  <p>联系人:  (吴老师)15123314717    QQ：314506025　  联系人:(波波老师)18723338716    QQ：357648253</p>

                  <div class="abso" style="right: 0px; bottom: 0px;">
                      <a href=""><img src="/Public/Home/images/icon05.png"></a>
                      <a href=""><img src="/Public/Home/images/icon06.png"></a>
                      <a href=""><img src="/Public/Home/images/icon07.png"></a>
                  </div>
           </div>

      </div>-->
     <div class="wrapper footer">
           <div class="w1090 rela">
                  <p>Copy © 2015 雕婵化妆形象设计中心 版权所有    艾斯顿文化传媒有限公司提供技术支持</p>

                  <p>地址:永川区1号站(交巡警平台)　公交路线：乘坐101、102、105、109、115、501、502 到望北路一号站</p>

                  <p>联系人:  (吴老师)15123314717    QQ：314506025　  联系人:(波波老师)18723338716    QQ：357648253</p>

                  <div class="abso" style="right: 0px; bottom: 0px;">
                      <a href=""><img src="/Public/Home/images/icon05.png"></a>
                      <a href=""><img src="/Public/Home/images/icon06.png"></a>
                      <a href=""><img src="/Public/Home/images/icon07.png"></a>
                  </div>
           </div>

      </div>

    </div>

   <script type="text/javascript" src="/Public/Home/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.flexslider').flexslider({
        directionNav: true,
        pauseOnAction: false
      });
    });
    </script>

        <script src="/Public/Home/js/swiper.min.js"></script>

    <script>
    var swiper = new Swiper('.swiper-container2', {
        pagination: '.swiper-pagination2',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30
    });
    </script>

  
</body>
</html>