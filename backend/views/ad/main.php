<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/8
 * Time: 22:02
 */
?>
<style type="text/css">
    .layui-form-switch {
        width: 55px;
    }
    .layui-form-switch em {
        width: 40px;
    }
    .layui-form-onswitch i {
        left: 45px;
    }
    body{overflow-y: scroll;}
</style>
<script type="text/javascript" src="../lib/layui/layui.js" charset="utf-8"></script>
<div class="weadmin-nav">
    <span class="layui-breadcrumb">
        <a href="../site/index">首页</a>
        <a href="">广告管理</a>
        <a>
          <cite>广告列表</cite></a>
    </span>
	<a class="layui-btn layui-btn-sm" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
		<i class="layui-icon" style="line-height:30px">&#x1002;</i></a>
</div>
<div class="weadmin-body">
	<div class="layui-row">
		<form class="layui-form layui-col-md12 we-search">
			广告搜索：
			<div class="layui-input-inline">
				<select name="cateid">
					<?php echo $option;?>
				</select>
			</div>
			<div class="layui-inline">
				<input class="layui-input" placeholder="开始日" name="start" id="start">
			</div>
			<div class="layui-inline">
				<input class="layui-input" placeholder="截止日" name="end" id="end">
			</div>
			<div class="layui-inline">
				<input type="text" name="keyword" placeholder="请输入关键字" autocomplete="off" class="layui-input">
			</div>
			<button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
		</form>
	</div>
	<div class="weadmin-block demoTable">
		<button class="layui-btn layui-btn-danger" data-type="getCheckData"><i class="layui-icon">&#xe640;</i>批量删除</button>
		<button class="layui-btn" data-type="Recommend"><i class="layui-icon">&#xe6c6;</i>推荐</button>
		<button class="layui-btn" data-type="Top"><i class="layui-icon">&#xe619;</i>置顶</button>
		<button class="layui-btn" data-type="Review"><i class="layui-icon">&#xe6b2;</i>审核</button>
		<button class="layui-btn" onclick="WeAdminShow('添加用户','./add.html',600,400)"><i class="layui-icon">&#xe61f;</i>添加</button>
		<span class="fr" style="line-height:40px">共有数据：88 条</span>
	</div>
	<table class="layui-hide" id="articleList">

    </table>


	<script type="text/html" id="recommendTpl">
		<input type="checkbox" name="zzz" lay-skin="switch" lay-text="已推荐|未推荐" {{d.recommend}}>
	</script>
	<script type="text/html" id="topTpl">
		<input type="checkbox" name="show" lay-skin="switch" lay-text="已置顶|未置顶" {{d.top}}>
	</script>
	<script type="text/html" id="reviewTpl">
		<!-- 这里的 checked 的状态只是演示 -->
		<input type="checkbox" name="lock" value="{{d.id}}" title="锁定" lay-filter="lockDemo" {{ d.id == 1 ? 'checked' : '' }}>
	</script>

	<script type="text/html" id="operateTpl">
		<a title="编辑" onclick="WeAdminEdit('编辑','./edit.html', 2, 600, 400)" href="javascript:;">
			<i class="layui-icon">&#xe642;</i>
		</a>
		<a title="查看" onclick="WeAdminShow('查看文章','./show.html',600,400)" href="javascript:;">
			<i class="layui-icon">&#xe63c;</i>
		</a>
		<a title="删除" onclick="member_del(this,'要删除的id')" href="javascript:;">
			<i class="layui-icon">&#xe640;</i>
		</a>
	</script>
	<script type="text/javascript" charset="utf-8">
        layui.extend({
            admin: '{/}../static/js/admin'
        });

        layui.use(['table', 'jquery','form', 'admin'], function() {
            var table = layui.table,
                $ = layui.jquery,
                form = layui.form,
                admin = layui.admin;

            table.render({
                elem: '#articleList',
                cellMinWidth: 80,
                cols: [
                    [{
                        type: 'checkbox'
                    }, {
                        field: 'aid',title: 'ID',sort: true
                    }, {
                        field: 'adname',title: '标题',templet: '#usernameTpl'
                    }, {
                        field: 'date',title: '发布时间',sort: true
                    }, {
                        field: 'category',title: '分类',sort: true
                    }, {
                        field: 'sort',title: '排序',sort: true
                    }, {
                        field: 'recommend',title: '推荐',templet: '#recommendTpl',unresize: true
                    }, {
                        field: 'top',title: '置顶',templet: '#topTpl',unresize: true
                    }, {
                        field: 'review',title: '审核',templet: '#reviewTpl',unresize: true
                    }, {
                        field: 'operate',title: '操作',toolbar: '#operateTpl',unresize: true
                    }]
                ],
                data: <?php echo $dlist;?>,
                event: true,
                page: true
            });
            /*
			 *数据表格中form表单元素是动态插入,所以需要更新渲染下
			 * http://www.layui.com/doc/modules/form.html#render
			 * */
            $(function(){
                form.render();
            });

            var active = {
                getCheckData: function() { //获取选中数据
                    var checkStatus = table.checkStatus('articleList'),
                        data = checkStatus.data;
                    //console.log(data);
                    //layer.alert(JSON.stringify(data));
                    if(data.length > 0) {
                        layer.confirm('确认要删除吗？' + JSON.stringify(data), function(index) {
                            layer.msg('删除成功', {
                                icon: 1
                            });
                            //找到所有被选中的，发异步进行删除
                            $(".layui-table-body .layui-form-checked").parents('tr').remove();
                        });
                    } else {
                        layer.msg("请先选择需要删除的文章！");
                    }

                },
                Recommend: function() {
                    var checkStatus = table.checkStatus('articleList'),
                        data = checkStatus.data;
                    if(data.length > 0) {
                        layer.msg("您点击了推荐操作");
                        for(var i = 0; i < data.length; i++) {
                            console.log("a:" + data[i].recommend);
                            data[i].recommend = "checked";
                            console.log("aa:" + data[i].recommend);
                            form.render();
                        }

                    } else {
                        console.log("b");
                        layer.msg("请先选择");
                    }

                    $(".layui-table-body .layui-form-checked").parents('tr').children().children('input[name="zzz"]').attr("checked","checked");
                },
                Top: function() {
                    layer.msg("您点击了置顶操作");
                },
                Review: function() {
                    layer.msg("您点击了审核操作");
                }

            };

            $('.demoTable .layui-btn').on('click', function() {
                var type = $(this).data('type');
                active[type] ? active[type].call(this) : '';
            });

            /*用户-删除*/
            window.member_del = function(obj, id) {
                layer.confirm('确认要删除吗？', function(index) {
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {
                        icon: 1,
                        time: 1000
                    });
                });
            }

        });

        function delAll(argument) {
            var data = tableCheck.getData();
            layer.confirm('确认要删除吗？' + data, function(index) {
                //捉到所有被选中的，发异步进行删除
                layer.msg('删除成功', {
                    icon: 1
                });
                $(".layui-form-checked").not('.header').parents('tr').remove();
            });
        }
    </script>

</div>