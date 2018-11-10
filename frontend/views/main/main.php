<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/8
 * Time: 14:07
 */
?>
<link rel="stylesheet" href="../static/css/font.css">
<link rel="stylesheet" href="../static/css/weadmin.css">
<script type="text/javascript" src="../lib/layui/layui.js" charset="utf-8"></script>
<div class="weadmin-body">
    <blockquote class="layui-elem-quote">欢迎使用 菠萝扑克算牌</blockquote>
    <div class="layui-col-lg12 layui-collapse" style="border: none;">
    <div class="layui-col-lg12 layui-col-md12">
        <fieldset class="layui-elem-field" style="padding: 5px;">
            <blockquote class="layui-elem-quote font16">它意味着红心、黑桃、红方块、或者梅花。
                It means hearts, spades, diamonds or clubs.</blockquote>
            <div class="layui-fluid">
                <form class="layui-form" action="main/cardcounting">
                    <div class="layui-form-item">
                        <label class="layui-form-label">请选择</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="card[1][1]" title="红心1">
                            <input type="checkbox" name="card[1][2]" title="红心2">
                            <input type="checkbox" name="card[1][3]" title="红心3">
                            <input type="checkbox" name="card[1][4]" title="红心4">
                            <input type="checkbox" name="card[1][5]" title="红心5">
                            <input type="checkbox" name="card[1][6]" title="红心6">
                            <input type="checkbox" name="card[1][7]" title="红心7">
                            <input type="checkbox" name="card[1][8]" title="红心8">
                            <input type="checkbox" name="card[1][9]" title="红心9">
                            <input type="checkbox" name="card[1][10]" title="红心10">
                            <input type="checkbox" name="card[1][11]" title="红心11">
                            <input type="checkbox" name="card[1][12]" title="红心12">
                            <input type="checkbox" name="card[1][13]" title="红心13">
                            <hr class="hr15">
                            <input type="checkbox" name="card[2][1]" title="黑桃1">
                            <input type="checkbox" name="card[2][2]" title="黑桃2">
                            <input type="checkbox" name="card[2][3]" title="黑桃3">
                            <input type="checkbox" name="card[2][4]" title="黑桃4">
                            <input type="checkbox" name="card[2][5]" title="黑桃5">
                            <input type="checkbox" name="card[2][6]" title="黑桃6">
                            <input type="checkbox" name="card[2][7]" title="黑桃7">
                            <input type="checkbox" name="card[2][8]" title="黑桃8">
                            <input type="checkbox" name="card[2][9]" title="黑桃9">
                            <input type="checkbox" name="card[2][10]" title="黑桃10">
                            <input type="checkbox" name="card[2][11]" title="黑桃11">
                            <input type="checkbox" name="card[2][12]" title="黑桃12">
                            <input type="checkbox" name="card[2][13]" title="黑桃13">
                            <hr class="hr15">
                            <input type="checkbox" name="card[3][1]" title="红方块1">
                            <input type="checkbox" name="card[3][2]" title="红方块2">
                            <input type="checkbox" name="card[3][3]" title="红方块3">
                            <input type="checkbox" name="card[3][4]" title="红方块4">
                            <input type="checkbox" name="card[3][5]" title="红方块5">
                            <input type="checkbox" name="card[3][6]" title="红方块6">
                            <input type="checkbox" name="card[3][7]" title="红方块7">
                            <input type="checkbox" name="card[3][8]" title="红方块8">
                            <input type="checkbox" name="card[3][9]" title="红方块9">
                            <input type="checkbox" name="card[3][10]" title="红方块10">
                            <input type="checkbox" name="card[3][11]" title="红方块11">
                            <input type="checkbox" name="card[3][12]" title="红方块12">
                            <input type="checkbox" name="card[3][13]" title="红方块13">
                            <hr class="hr15">
                            <input type="checkbox" name="card[4][1]" title="梅花1">
                            <input type="checkbox" name="card[4][2]" title="梅花2">
                            <input type="checkbox" name="card[4][3]" title="梅花3">
                            <input type="checkbox" name="card[4][4]" title="梅花4">
                            <input type="checkbox" name="card[4][5]" title="梅花5">
                            <input type="checkbox" name="card[4][6]" title="梅花6">
                            <input type="checkbox" name="card[4][7]" title="梅花7">
                            <input type="checkbox" name="card[4][8]" title="梅花8">
                            <input type="checkbox" name="card[4][9]" title="梅花9">
                            <input type="checkbox" name="card[4][10]" title="梅花10">
                            <input type="checkbox" name="card[4][11]" title="梅花11">
                            <input type="checkbox" name="card[4][12]" title="梅花12">
                            <input type="checkbox" name="card[4][13]" title="梅花13">
                            <hr class="hr15">
                            <input type="checkbox" name="card[supercard1]" title="赖子1">
                            <input type="checkbox" name="card[supercard2]" title="赖子2">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
</div>
<div style="clear: both;overflow: hidden; margin-top: 10px;">
    <blockquote class="layui-elem-quote">
        <a href="https://github.com/tideit/tedcms" target="_blank">TedCMS</a>
    </blockquote>
</div>
</div>
<script>
    layui.use('form', function(){
        var form = layui.form;
        //监听提交
        // form.on('submit(formDemo)', function(data){
        //     layer.msg(JSON.stringify(data.field));
        //     return false;
        // });
    });
</script>
</div>