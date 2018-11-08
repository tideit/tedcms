<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/7
 * Time: 22:31
 */
?>
<body class="login-bg">
<script type="text/javascript" src="../lib/layui/layui.js" charset="utf-8"></script>
    <div class="login">
        <div class="message">登录</div>
        <div id="darkbannerwrap"></div>
        <form method="post" class="layui-form" lay-filter="formTed" action="../site/dologin">
            <input name="username" placeholder="用户名"  type="text" required="" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" required="" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input class="loginin" value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <script type="text/javascript">
            layui.extend({
				admin: '{/}../static/js/admin'
			});
            layui.use(['form','admin'], function(){
              var form = layui.form,admin = layui.admin;
              // //监听提交
              // form.on('submit(login)', function(data){
	           //    layer.msg(JSON.stringify(data.field),function(){
		       //        location.href='../site'
              //     });
	           //    return false;
              // });
            });
    </script>
    <!-- 底部结束 -->
</body>