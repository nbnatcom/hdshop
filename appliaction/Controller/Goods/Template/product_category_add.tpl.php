<?php include $this->admin_tpl("header"); ?>
<div class="content">
    <style>
        #Validform_msg{display: none}
    </style>
    <div id="top-alert" class="fixed alert alert-error" style="display: none;">
        <button class="close fixed" style="margin-top: 4px;">&times;</button>
        <div class="alert-content">这是内容</div>
    </div>
    <div class="site">
        Haidao Board <a href="#">商品管理</a> > 分类列表 > 添加分类
    </div>
    <span class="line_white"></span>
    <div class="install mt10">
        <dl>
            <dd>
                <div class="install mt10">
                    <div class="install mt10">
                        <dl>
                            <form action="<?php echo U('Product_category/add')?>" class="addform" method="post">
                                <dd>
                                    <ul class="web">
                                        <li>
                                            <strong>名称：</strong>
                                            <input type="text" class="text_input" name="name" placeholder='' datatype="*" ><span style="padding-left: 48px;" class="Validform_checktip" >填写商品分类名称</span>
                                        </li> 
                                        <li>
                                            <strong>顶级分类：</strong>
                                            <select name="parent_id" style="margin-right: 96px;">
                                                <option value="0">顶级分类</option>
                                                <?php foreach ($info as $key => $vo): ?>
                                                    <option value="<?php echo $vo['value'];?>"><?php echo $vo['text'];?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <span style="margin-left:-51px;">
                                            	选择分类隶属哪个商品分类下
                                            </span>
                                        </li>
                                        <li>
                                            <strong>导航：</strong>
                                            <input type="radio" name="show_in_nav" value="1" checked="checked" /> 显示 <input type="radio" name="show_in_nav" value="0"  /> 禁用<span class="Validform_checktip" style="margin-left:220px;">禁用导航，分类将不在前台导航中出现，默认为显示</span>
                                        </li>
                                        <li>
                                            <strong>状态：</strong>
                                            <input type="radio" name="status" value="1" checked="checked" /> 显示 <input type="radio" name="status" value="0"  /> 禁用<span class="Validform_checktip" style="margin-left:220px; ">禁用商品分类，用户在前台将看不到此条分类，默认为显示</span>
                                        </li>
                                        <li>
                                            <strong>价格分级：</strong>
                                            <input type="text" class="text_input" name="grade" placeholder='*' datatype="" value="" /><span class="Validform_checktip" style="margin-left:-2px;">填写分类下商品筛选价格分级，如设置为3，商品将按照三个价格区间筛选</span>
                                        </li>
                                        <li>
                                            <strong>排序：</strong>
                                            <input type="text" class="text_input" name="sort" placeholder=''  datatype="n" value="100" /><span class="Validform_checktip" style="margin-left:-2px;">输入数字改变商品分类显示排序，数字越小越靠前</span>
                                        </li>
                                        <li>
                                            <strong>关键字：</strong>
                                            <input type="text" class="text_input" name="keywords" placeholder=''  /><span class="Validform_checktip" style="margin-left:-2px;">关键词出现在页面头部的Keywords标签中，用于记录本分类的关键字，多个关键字请用分隔符分隔</span>
                                        </li>
                                        <li>
                                            <strong>描述：</strong>
                                            <textarea name="descript" rows="4" cols="20" style="margin-right: 50px;"></textarea>
                                            <span class="Validform_checktip" style="margin-left:2px;">描述出现在页面头部的Description标签中，用于记录本页面的描述信息，建议不超过80个字</span>
                                        </li>    
                                    </ul>
                                    <div class="submit">
                                        <input type="submit" class="button_search" value="提交"/>
										<a href="<?php echo U('lists')?>">返回</a>
                                    </div>
                                </dd>
                            </form>  
                        </dl>
                    </div>
            </dd>
        </dl>
    </div>
    <?php include $this->admin_tpl("copyright"); ?>
</div>
<script>
    $(function() {
        var demo = $(".addform").Validform({
            btnSubmit: "#btn_sub",
            btnReset: ".btn_reset",
            tiptype: function(){},
            label: ".label",
            showAllError: false,
            ajaxPost: true,
            callback: function(data) {
                $("#Validform_msg").hide();
                if (data.status == "0") {
                    art.dialog({width: 320, time: 5, title: '温馨提示(5秒后关闭)', content: data.info, ok: true});
                }
                if (data.status == "1") {
                    window.location.href = data.url;
                }
            }
        });
    });
</script>
</body>
</html>