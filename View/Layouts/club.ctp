<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php //echo $this->Html->charset('utf-8'); ?>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>
		<?php echo 'でぃーくる！' ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon','/img/favicon.ico');
		echo $this->Html->meta('keywords','でぃーくる！,同志社大学');
		echo $this->Html->meta('description','でぃーくる！同志社大学、新歓、イベント、団体、サークル紹介');

		echo $this->Html->css('style');
		echo $this->Html->css('slidebars.min');
		echo $this->Html->css('slidebars-theme');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<?php
		echo $this->Html->css('bootstrap.min');
		//echo $this->Html->script('bootstrap.min.js');
    	echo $this->Html->script('jquery.min.js');
		//カレンダー
		echo $this->Html->css('fullcalendar/fullcalendar.css');
    	echo $this->Html->script('fullcalendar/fullcalendar.min.js');
		
		//日付入力
		echo $this->Html->css('bootstrap-datetimepicker.min.css');
    	echo $this->Html->script('bootstrap-datetimepicker.min.js');
		
		//テキストエディタ
    	echo $this->Html->script('nicEdit.js');
    ?>
    
    <!-- カレンダーオプション -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />


	<?php 
		//タイムピッカー
		echo $this->Html->css('jquery.ui.timepicker.css');
		echo $this->Html->script('jquery.ui.timepicker-ja.js');
		echo $this->Html->script('jquery.ui.timepicker.js');
	?>


    <script type="text/javascript">
	bkLib.onDomLoaded(function() {
		new nicEditor({panelType :'nostyle'}).panelInstance('area2');
	});
	</script>
    
    <!-- facebook -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=231158476955324";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    

</head>
<body>


		<!-- Top Navigation Bar -->
		<div class="sb-navbar sb-slide">
		
        
        
			<!-- Left Slidebar control -->
			<div class="sb-toggle-left">
				<div class="navicon-line"></div>
				<div class="navicon-line"></div>
				<div class="navicon-line"></div>
			</div>
			
			<!-- Right Slidebar control -->
			<div class="sb-toggle-right">
				<div class="navicon-line"></div>
				<div class="navicon-line"></div>
				<div class="navicon-line"></div>
			</div>
			<div class="container">
				<!-- Logo -->
				<div id="logo" class="navbar-left">
					<?php echo $this->Html->image('dlogo.png',array('width'=>'200','url'=>array('controller'=>'home','action'=>'index')));?>
				</div>
                <!-- /#logo -->
				
				<!-- Menu -->
				
			</div>
            
            
		
		</div>
		
		<!-- メインコンテンツ -->
		<div id="sb-site">
			<div id="header">
                <h1><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
            </div>
            <div id="content">
    
                <?php echo $this->Session->flash(); ?>
    
                <?php echo $this->fetch('content'); ?>
                
			</div>
        <!-- footer -->
            <div class="footer" style="background-color:#999">
            	<p class="text-left" style="display:inline;"><?php echo $this->Html->link('ご利用規約',array('controller'=>'home','action'=>'rule'))?></p>
            	<p class="text-left" style="display:inline;margin-left:10px;"><?php echo $this->Html->link('プライバシーポリシー',array('controller'=>'home','action'=>'privacy'))?></p>
            	<p class="text-left" style="display:inline;margin-left:10px;"><?php echo $this->Html->link('お問い合わせ',array('controller'=>'home','action'=>'form'))?></p>

                <address class="text-center">BeYouth でぃーくる！</address>
            </div>
	</div>
        
        </div>
		
		<!-- Left Slidebar -->
		<div class="sb-slidebar sb-left">	
			
            <aside class="sb-widget">
				<div class="sb-widget-header">
					<h3 class="sb-widget-title">サイト内検索</h3>
				</div>
				<div class="sb-widget-content">
					<form class="navbar-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default" style="display:inline;">検索</button>
	                </form>
				</div>
			</aside>
            
            
			<!-- Lists in Slidebars -->
			<ul class="sb-menu">
				<li><a href="/home/index"><i class="glyphicon glyphicon-home"></i>ホーム</a></li>
				<li><a href="/clubs/index"><i class="glyphicon glyphicon-user"></i>団体で探す</a></li>
				<li><a href="/events/index"><i class="glyphicon glyphicon-calendar"></i>イベントで探す</a></li>
                
				
				<!-- First Dropdown Menu -->
				
			</ul>
			
		</div><!-- /.sb-slidebar .sb-left -->
		
		
		<!-- Right Slidebars -->
		<div class="sb-slidebar sb-right">	
			
			<!-- Widgets -->
			<aside class="sb-widget">
				<div class="sb-widget-header">
					<h3 class="sb-widget-title">
                    	<?php echo $this->requestAction('/home/login');?>
                    </h3>
				</div>
				<div class="sb-widget-content">
                	<!-- ログインあり 中無なし -->
					<?php $clubs = $this->requestAction('/home/logedit');?>
                    <?php if(empty($clubs)):?>
                    <?php echo $this->Html->link('団体の新規登録',array('controller'=>'clubs','action'=>'add'));?>
                    <?php echo $this->Html->link('イベントの追加',array('controller'=>'events','action'=>'add'));?>
                    <?php endif;?>
                    
                	<!-- ログイン 中身有 -->
                    <?php if(!empty($clubs)):?>
						<?php if($clubs ==1):?>
                        <?php echo $this->Html->link('ユーザーの新規登録',array('controller'=>'signup','action'=>'index'));?>
                        <?php else:?>
                            <?php foreach($clubs as $club):?>
                            <li><?php echo $this->Html->link('団体を追加',array('controller'=>'clubs','action'=>'add'))?></li>
                            <li>
								<?php echo $this->Html->link($club['Club']['name'].'の内容とイベントを編集',array('controller'=>'clubs','action'=>'edit',$club['Club']['id']));?>
                            </li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
				</div>
			</aside>
			
			
			
		</div><!-- /.sb-slidebar .sb-right -->

    </div>
	<script>
	  (function($) {
		$(document).ready(function() {
		  var mySlidebars = new $.slidebars();
		  $('.my-button').on('click', function() {
			mySlidebars.open('left');
		  });
		  $('.my-other-button').on('click', function() {
			mySlidebars.toggle('right');
		  });
		  $('.my-third-button').click(mySlidebars.close);
		});
	  }) (jQuery);
	</script>
	

    <?php 
		echo $this->Html->script('slidebars.min');
		echo $this->Html->script('slidebars-theme');
		echo $this->Html->script('bootstrap.min.js');
	?>

</body>
</html>
