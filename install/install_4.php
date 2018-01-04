<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="x-ua-compatible" content="text/html;" />
		<title>海盗云商(网店)系统-最灵活的企业级电子商务系统软件</title>
		<meta name="Keywords" content="海盗云商,迪米盒子,海盗系统,网店系统,商城系统,电子商务软件" />
		<meta name="Description" content="海盗网店系统，国内专业电子商务系统方案解决服务商，最灵活的企业级网店系统，为中小企业级站长提供电商一站式解决方案。" />
		<link rel="shortcut icon"  href="images/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="css/install_style.css"/>
	</head>
	<body>
		<!--安装con-->
		<div class="content">
			<div class="con-head">
				<span class="update fr"><?php echo VERSION;?></span>
				
			</div>
			<div class="con-body">
				<div class="step-con">
					<!--步骤-->
					<div class="step-box ">
						<span class="step-num  bg-img s1_on fl"></span>
						<span class="step-num  bg-img s2_on fl"></span>
						<span class="step-num  bg-img s3_on fl"></span>
					</div>
				</div>
					<div class="clear"></div>
				<div class="con-word install_info" id="install_info">
					
				</div>
				<div class="btn">
					<a class="agree-btn disabled next">正在安装系统</a>
				</div>
			</div>
		</div>
		<p class="copy">©2013-2015 haidao.la (迪米盒子科技旗下品牌)</p>
		<script type='text/javascript' src='javascript/jquery-1.4.4.min.js'></script>
		<script type='text/javascript'>
			//更新进度条
			function update_progress(obj)
			{
				
		
				if(obj.isError == true)
				{

					$('.install_info').append("<li><em class=\"bg-img no\"></em>"+obj.message+"</li>");

					$('.next').attr('disabled','').removeClass('agree-btn disabled').addClass('agree-btn3').text('重新安装');
					$('.next').attr("href","javascript:location.reload()");
				}
				else
				{
					$('.install_info').append("<li><em class=\"bg-img ok\"></em>"+obj.message+"</li>");
					$('.next').text('正在安装系统('+obj.percent+'%)')
					$('.install_info').scrollTop(9999999);
				}

				if(obj.percent == 100)
				{
					$('.next').attr('disabled','').removeClass('agree-btn disabled').addClass('agree-btn3').text('完成安装').attr('href','index.php?act=install_5&admin_user='+obj.admin_user);
					//window.location.href = 'index.php?act=install_5&admin_user='+obj.admin_user;
				}
			}
		</script>
		<script type="text/javascript">
		var _maq = _maq || [];
		_maq.push(['_setAccount', '<?php echo $_POST['site_name']?>']);
		_maq.push(['_setAction', 'install']);
		_maq.push(['_setVersion', '<?php echo VERSION?>']);
		_maq.push(['_setEmail', '<?php echo $_POST['admin_email']?>']); 
		(function() {
		    var ma = document.createElement('script'); ma.type = 'text/javascript'; ma.async = true;
		    ma.src = ('https:' == document.location.protocol ? 'https://cloud.haidao.la' : 'http://cloud.haidao.la') + '/ma.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ma, s);
		})();
	</script>

		<?php
		install_sql();
		?>
	</body>
</html>

