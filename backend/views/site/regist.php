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
	<div class="message">注册</div>
	<div id="darkbannerwrap"></div>
	<form method="post" class="layui-form" action="../site/doregist">
		<input name="username" placeholder="用户名"  type="text" lay-verify="required|username" class="layui-input" >
		<hr class="hr15">
		<input name="password" id="password" lay-verify="required|pass" placeholder="密码"  type="password" class="layui-input">
		<hr class="hr15">
        <input name="repassword" id="repassword" lay-verify="required|repassword" placeholder="再次输入密码"  type="password" class="layui-input">
        <hr class="hr15">
        <input name="email" lay-verify="required|email" placeholder="邮箱"  type="email" class="layui-input">
        <hr class="hr15">
		<input class="loginin" value="注册" lay-submit lay-filter="regist" style="width:100%;" type="submit">
		<hr class="hr20" >
	</form>
</div>

<script type="text/javascript">
    layui.extend({
        admin: '{/}../static/js/admin'
    });
    layui.use(['form','admin'], function(){
        var form = layui.form,admin = layui.admin,$ = layui.jquery;
            form.verify({
            username: function(value, item){ //value：表单的值、item：表单的DOM对象
                if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
                    return '用户名不能有特殊字符';
                }
                if(/(^\_)|(\__)|(\_+$)/.test(value)){
                    return '用户名首尾不能出现下划线\'_\'';
                }
            }
            ,pass: [
                /^[\S]{6,12}$/
                ,'密码必须6到12位，且不能出现空格'
            ],
            repassword: function(value){
              if(value != $("#password").val()){
                  $("#password").val("");re
                  return '确认密码和密码不一致';
              }
            }
        });
        //监听提交
        form.on('submit(regist)', function(data){
            return false;
        });
    });
</script>
<!-- 底部结束 -->
</body>
