<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:88:"E:\phpHuanJing\WWW\charge\charge\public/../application/index\view\integral\integral.html";i:1526539012;s:74:"E:\phpHuanJing\WWW\charge\charge\application\index\view\layout\layout.html";i:1526539012;s:74:"E:\phpHuanJing\WWW\charge\charge\application\index\view\layout\header.html";i:1526539012;s:74:"E:\phpHuanJing\WWW\charge\charge\application\index\view\layout\footer.html";i:1526539012;}*/ ?>

<!DOCTYPE html>
<base href="/index/" />
<html>
<head>
	<base href="/index/" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<title>首页</title>
    <!--<link type="text/css" rel="stylesheet" href="css/mall.css"/>-->
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/common.css">
<script type="text/javascript" src="js/jquery.min.js" ></script>
<script src="js/common.js"></script>
<!--banner 脚本-->
<script src="js/TouchSlide.1.1.js"></script>
<!--banner 脚本-->
</head>
<body  >

	<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<title>积分</title>
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/common.css">
<script type="text/javascript" src="js/jquery.min.js" ></script>
<script src="js/common.js"></script>
</head>

<body>
<header class="header" id="header">
<a href="javascript:history.go(-1)" target=_self class="back">返回</a>
<h1>积分</h1>
</header>
<!--header-end-->

<div class="container" id="container"> 

<div class="integral-head">
  <p><em class="jf"><?= $sum ?></em>分</p>
  <p>小小积分，有大用，努力多赚一些吧！</p>
  <br /><br />
  <input type='button' value='兑换1余额' id='open' class="tixian"> 
</div>
<div class="integral-rule">
<div class="integral-rule-tit"><h2>积分使用规则</h2></div>
<div class="integral-rule-con">
	充电结算后按每分钟1分计算添加到积分钱包中<br />
	积分可用来兑换钱包余额(100:1)，进行充电使用或者提现
</div>
</div>

</div>
<!--container-end-->
</body>
</html>
<script src="/index/js/js.js"></script>
<script>
	//积分兑换
	$(document).on("click","#open",function(){
		//获取总积分
		var m_num = $(".jf").html();
		//判断积分是否低于100
		if(m_num<100){
			alert("积分低于100不予兑换！");
			return false;
		}
		$.ajax({
			type:"post",
			url:"<?php echo url('integral/convert'); ?>",
		})
		alert("兑换成功！");
		var num = m_num-100;
		$(".jf").html(num);
	})
</script>

<footer class="footer" id="footer">
  <ul class="footnav box-flex">
  <?php
  	use think\Request;
  	
  	$request = Request::instance();
	 	$controller = $request->controller();
    $action = $request->action();
  switch($name=$controller): case "Index": switch($name=$action): case "index": ?>
      <li class="on" ><a href="index.html" class="home"><i></i><span class="full-block">首页</span></a></li>
      <li ><a href="<?php echo url('index/chat'); ?>" class="hz" ><i></i><span class="full-block">互助</span></a></li>
      <li><a href="<?php echo url('build/index'); ?>" class="foot-worker"><i></i><span class="full-block">申请建桩</span></a></li>
      <li ><a href="<?php echo url('index/order/order'); ?>" class="foot-order"><i></i><span class="full-block">订单</span></a></li>
      <li><a href="users/index" class="my"><i></i><span class="full-block">我的</span></a></li>
          <?php break; case "chat": ?>
            <li ><a href="index.html" class="home"><i></i><span class="full-block">首页</span></a></li>
            <li class="on" ><a href="<?php echo url('index/chat'); ?>" class="hz" ><i></i><span class="full-block">互助</span></a></li>
            <li><a href="<?php echo url('build/index'); ?>" class="foot-worker"><i></i><span class="full-block">申请建桩</span></a></li>
            <li ><a href="<?php echo url('index/order/order'); ?>" class="foot-order"><i></i><span class="full-block">订单</span></a></li>
            <li><a href="users/index" class="my"><i></i><span class="full-block">我的</span></a></li>
          <?php break; endswitch; break; case "Build": ?>
    	<li><a href="index.html" class="home"><i></i><span class="full-block">首页</span></a></li>
      <li><a href="<?php echo url('index/chat'); ?>" class="hz" ><i></i><span class="full-block">互助</span></a></li>
	    <li class="on"><a href="<?php echo url('build/index'); ?>" class="foot-worker"><i></i><span class="full-block">申请建桩</span></a></li>
	    <li><a href="<?php echo url('index/order/order'); ?>" class="foot-order"><i></i><span class="full-block">订单</span></a></li>
	    <li><a href="users/index" class="my"><i></i><span class="full-block">我的</span></a></li>
    <?php break; case "Users": ?>
    	<li><a href="index.html" class="home"><i></i><span class="full-block">首页</span></a></li>
      <li><a href="<?php echo url('index/chat'); ?>" class="hz" ><i></i><span class="full-block">互助</span></a></li>
	    <li><a href="<?php echo url('build/index'); ?>" class="foot-worker"><i></i><span class="full-block">申请建桩</span></a></li>
	    <li><a href="<?php echo url('index/order/order'); ?>" class="foot-order"><i></i><span class="full-block">订单</span></a></li>
	    <li class="on"><a href="users/index" class="my"><i></i><span class="full-block">我的</span></a></li>
    <?php break; case "Order": ?>
    	<li><a href="index.html" class="home"><i></i><span class="full-block">首页</span></a></li>
      <li><a href="<?php echo url('index/chat'); ?>" class="hz" ><i></i><span class="full-block">互助</span></a></li>
	    <li><a href="<?php echo url('build/index'); ?>" class="foot-worker"><i></i><span class="full-block">申请建桩</span></a></li>
	    <li class="on"><a href="<?php echo url('index/order/order'); ?>" class="foot-order"><i></i><span class="full-block">订单</span></a></li>
	    <li><a href="users/index" class="my"><i></i><span class="full-block">我的</span></a></li>
    <?php break; endswitch; ?>

  
	
  	
  	
    
  </ul>
</footer>
<!--footer-end-->
<!--栏目更多-->
<script type="text/javascript">
$(".ind-nav").each(function(){	
  var self = $(this); 
  var n=self.find("ul li").length;
  if(n<=8){
  self.find( ".more").addClass("hide-more");
  }else{
  self.find(".more").removeClass("hide-more");
  } 
 self.find(".more").click(function(){
    self.find( "ul" ).toggleClass("intro");
	self.find(".more").toggleClass("add-more");
  });
  });
</script>
<!--栏目更多--> 
</body>
</html>
