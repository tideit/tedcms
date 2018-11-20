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
                            <input type="checkbox" name="card[11]" title="红心1">
                            <input type="checkbox" name="card[12]" title="红心2">
                            <input type="checkbox" name="card[13]" title="红心3">
                            <input type="checkbox" name="card[14]" title="红心4">
                            <input type="checkbox" name="card[15]" title="红心5">
                            <input type="checkbox" name="card[16]" title="红心6">
                            <input type="checkbox" name="card[17]" title="红心7">
                            <input type="checkbox" name="card[18]" title="红心8">
                            <input type="checkbox" name="card[19]" title="红心9">
                            <input type="checkbox" name="card[110]" title="红心10">
                            <input type="checkbox" name="card[111]" title="红心11">
                            <input type="checkbox" name="card[112]" title="红心12">
                            <input type="checkbox" name="card[113]" title="红心13">
                            <hr class="hr15">
                            <input type="checkbox" name="card[21]" title="黑桃1">
                            <input type="checkbox" name="card[22]" title="黑桃2">
                            <input type="checkbox" name="card[23]" title="黑桃3">
                            <input type="checkbox" name="card[24]" title="黑桃4">
                            <input type="checkbox" name="card[25]" title="黑桃5">
                            <input type="checkbox" name="card[26]" title="黑桃6">
                            <input type="checkbox" name="card[27]" title="黑桃7">
                            <input type="checkbox" name="card[28]" title="黑桃8">
                            <input type="checkbox" name="card[29]" title="黑桃9">
                            <input type="checkbox" name="card[210]" title="黑桃10">
                            <input type="checkbox" name="card[211]" title="黑桃11">
                            <input type="checkbox" name="card[212]" title="黑桃12">
                            <input type="checkbox" name="card[213]" title="黑桃13">
                            <hr class="hr15">
                            <input type="checkbox" name="card[31]" title="方块1">
                            <input type="checkbox" name="card[32]" title="方块2">
                            <input type="checkbox" name="card[33]" title="方块3">
                            <input type="checkbox" name="card[34]" title="方块4">
                            <input type="checkbox" name="card[35]" title="方块5">
                            <input type="checkbox" name="card[36]" title="方块6">
                            <input type="checkbox" name="card[37]" title="方块7">
                            <input type="checkbox" name="card[38]" title="方块8">
                            <input type="checkbox" name="card[39]" title="方块9">
                            <input type="checkbox" name="card[310]" title="方块10">
                            <input type="checkbox" name="card[311]" title="方块11">
                            <input type="checkbox" name="card[312]" title="方块12">
                            <input type="checkbox" name="card[313]" title="方块13">
                            <hr class="hr15">
                            <input type="checkbox" name="card[41]" title="梅花1">
                            <input type="checkbox" name="card[42]" title="梅花2">
                            <input type="checkbox" name="card[43]" title="梅花3">
                            <input type="checkbox" name="card[44]" title="梅花4">
                            <input type="checkbox" name="card[45]" title="梅花5">
                            <input type="checkbox" name="card[46]" title="梅花6">
                            <input type="checkbox" name="card[47]" title="梅花7">
                            <input type="checkbox" name="card[48]" title="梅花8">
                            <input type="checkbox" name="card[49]" title="梅花9">
                            <input type="checkbox" name="card[410]" title="梅花10">
                            <input type="checkbox" name="card[411]" title="梅花11">
                            <input type="checkbox" name="card[412]" title="梅花12">
                            <input type="checkbox" name="card[413]" title="梅花13">
                            <hr class="hr15">

                            <label class="layui-form-label">赖子</label>
                            <div class="layui-input-block">
                                <input type="radio" name="super" value="0" title="0" checked=""><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>0</div></div>
                                <input type="radio" name="super" value="1" title="1"><div class="layui-unselect layui-form-radio layui-form-radioed"><i class="layui-anim layui-icon layui-anim-scaleSpring"></i><div>赖子1</div></div>
                                <input type="radio" name="super" value="2" title="2"><div class="layui-unselect layui-form-radio"><i class="layui-anim layui-icon"></i><div>赖子2</div></div>

                            </div>

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