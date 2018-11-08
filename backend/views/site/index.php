<?php

/* @var $this yii\web\View */

$this->title = '';
?>
<script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo">
        <a href="index">TEDCMS</a>
    </div>
    <div class="left_open">
        <i title="展开左侧栏" class="iconfont">&#xe699;</i>
    </div>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">Admin</a>
            <dl class="layui-nav-child">
                <!-- 二级菜单 -->
                <dd>
                    <a class="loginout" href="site/loginout">退出</a>
                </dd>
            </dl>
        </li>
    </ul>
</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>系统设置</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>投票管理</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>系统基本参数</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>系统用户管理</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>用户组设定</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>服务器分布/远程</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>系统日志管理</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>验证安全设置</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>图片水印设置</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>自定义文档属性</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>软件频道设置</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>防采集串混淆</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>随机模板设置</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>计划任务管理</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>数据库备份/还原</cite>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>支付工具</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>点卡产品分类</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>点卡产品管理</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员产品分类</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="./vote/main">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员消费记录</cite>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- <div class="x-slide_left"></div> -->
<!-- 左侧菜单结束 -->
<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="wenav_tab" id="WeTabTip" lay-allowclose="true">
        <ul class="layui-tab-title" id="tabName">
            <li>我的桌面</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='../main' frameborder="0" scrolling="yes" class="weIframe"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="page-content-bg"></div>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">Copyright ©2018 ted cms v1.0 All Rights Reserved</div>
</div>
<!-- 底部结束 -->
<script type="text/javascript">
    layui.extend({
      admin: '{/}../../static/js/admin' // {/}的意思即代表采用自有路径，即不跟随 base 路径
    });
    //使用拓展模块
    layui.use('admin', function(){
      var admin = layui.admin;
    });
    layui.config({
        base: './static/js/'
        ,version: '101100'
    }).use('admin');
</script>
</body>
<!--Tab菜单右键弹出菜单-->
<ul class="rightMenu" id="rightMenu">
    <li data-type="fresh">刷新</li>
    <li data-type="current">关闭当前</li>
    <li data-type="other">关闭其它</li>
    <li data-type="all">关闭所有</li>
</ul>
