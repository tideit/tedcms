<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/14
 * Time: 20:34
 */
?>
<link rel="stylesheet" href="../static/css/font.css">
<link rel="stylesheet" href="../static/css/weadmin.css">
<script type="text/javascript" src="../lib/layui/layui.js" charset="utf-8"></script>
<div class="weadmin-body">
	<blockquote class="layui-elem-quote">充值</blockquote>
	<div class="layui-col-lg12 layui-collapse" style="border: none;">
		<div class="layui-col-lg12 layui-col-md12">
			<fieldset class="layui-elem-field" style="padding: 5px;">
                <form class="layui-form" action="main/dochongzhi">
                <div class="layui-form-item">
                    <label class="layui-form-label">充值金额</label>
                    <div class="layui-inline">
                        <input type="text" name="money" placeholder="充值金额" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                    </div>
                </div>
                </form>
            </fieldset>

		</div>
	</div>
</div>


