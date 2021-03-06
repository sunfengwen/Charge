<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"E:\phpHuanJing\WWW\charge\charge\public/../application/demo\view\index\examine.html";i:1526285560;s:73:"E:\phpHuanJing\WWW\charge\charge\application\demo\view\layout\layout.html";i:1526285560;s:73:"E:\phpHuanJing\WWW\charge\charge\application\demo\view\layout\header.html";i:1526285560;s:73:"E:\phpHuanJing\WWW\charge\charge\application\demo\view\layout\footer.html";i:1526285560;}*/ ?>
<base href="/demo/" />
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>充电桩后台</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo url('index/index'); ?>">首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="javascript:void(0)">管理员</a></li>
                <li><a href="<?php echo url('login/upload'); ?>">修改密码</a></li>
                <li><a href="<?php echo url('login/loginout'); ?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <!--<a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>-->
                    <ul class="sub-menu">
                        <li><a href="<?php echo url('index/examine'); ?>"><i class="icon-font">&#xe008;</i>充电站审核</a></li>
                        <li><a href="<?php echo url('index/show'); ?>"><i class="icon-font">&#xe005;</i>充电站管理</a></li>
                        <li><a href="<?php echo url('feedback/show'); ?>"><i class="icon-font">&#xe006;</i>意见反馈单</a></li>
                        <!--<li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>-->
                    </ul>
                </li>
                <!--<li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>
    </div>

	<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="container clearfix">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">充电站审核</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <!--<div class="result-title">
                    <div class="result-list">
                        <a href="insert.html"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>-->
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>站名</th>
                            <th>类型</th>
                            <th>数量</th>
                            <th>费用</th>
                            <th>状态</th>
                            <th>用户手机号</th>
                            <th>是否通过审核</th>
                            <th>地址</th>
                        </tr>
                        <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): if( count($res)==0 ) : echo "" ;else: foreach($res as $key=>$v): ?>
	                        <tr>
	                            <td><?php echo $v['c_id']; ?></td>
	                            <td><?php echo $v['c_name']; ?></td>
	                            <td>
	                            	<?php if(($v['c_type']==0)): ?>
	                            	国标
	                            	<?php else: ?>
	                            	特斯拉
	                            	<?php endif; ?>
	                            </td>
	                            <td><?php echo $v['c_sum']; ?>个</td>
	                            <td><?php echo $v['c_money']; ?>元/分钟</td>
	                            <td>
	                            	<?php if(($v['c_state']==1)): ?>
	                            	可用
	                            	<?php else: ?>
	                            	不可用
	                            	<?php endif; ?>
	                            </td>
	                            <td>
	                            	<?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): if( count($arr)==0 ) : echo "" ;else: foreach($arr as $key=>$val): if(($v['u_id']==$val['u_id'])): ?>
	                            			<?php echo $val['u_tel']; endif; endforeach; endif; else: echo "" ;endif; ?>
	                            </td>
	                            <td>
	                            	<?php if(($v['c_status']==1)): ?>
	                            	<a href="<?php echo url("index/status"); ?>?cid=<?php echo $v['c_id']; ?>&a_num=<?php echo $v['c_sum']; ?>">未审核</a>
	                            	<?php else: ?>
	                            	审核通过
	                            	<?php endif; ?>
	                            </td>
	                            <td><a href="<?php echo url("index/coordinate"); ?>?c_x=<?php echo $v['c_x']; ?>&c_y=<?php echo $v['c_y']; ?>">查看</a></td>
	                           
	                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
</body>
</html>

