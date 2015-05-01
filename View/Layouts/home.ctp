<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"><head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php echo $this->Html->charset(); ?>
	<title>
		関西の大学情報サイトでぃーくる！:
		<?php echo $title_for_layout; ?>
	</title>
    
    <META name="robots" content="all">
    
    <meta name="description" content="<?php echo $description;?>" />
	<meta property="og:title" content="でぃーくる！:<?php echo $title_for_layout; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://<?php print($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);?>" />
	<meta property="og:image" content="http://<?php print $img;?>" />
	<meta property="og:site_name" content="でぃーくる！:<?php echo $title_for_layout; ?>" />
	<meta property="og:description" content="<?php echo $description;?>" />
	<meta name="twitter:site" content="@d_cle_">
	<meta name="twitter:card" content="<?php print $twitter;?>">
	<meta name="twitter:image:src" content="http://<?php print $img;?>">
    
	<?php
		echo $this->Html->meta('icon','/img/favicon.ico');
		
		echo $this->Html->css('slidebars.min.css');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('slid.css');
		//echo $this->Html->css('map.css');
		echo $this->Html->css('magicsuggest.css');
		echo $this->Html->css('main.css');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
    	echo $this->Html->script('jquery.min.js');
	?>
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-39776710-1', 'd-cle.com');
	  ga('send', 'pageview');
	
	</script>
    
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=231158476955324&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
	<nav class="navbar navbar-default navbar-fixed-top sb-slide" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Left Control -->
			<div class="sb-toggle-left navbar-left">
				<div class="navicon-line"></div>
				<div class="navicon-line"></div>
				<div class="navicon-line"></div>
			</div><!-- /.sb-control-left -->
			<!-- Right Control -->
			<div class="sb-toggle-right navbar-right">
				<span class="glyphicon glyphicon-user"></span>
			</div><!-- /.sb-control-right -->
      <div class="container">
      <div class="navbar-left">
      <h1 class="nav-title" style="margin-top:12px;"><?php echo $this->Html->link('でぃーくる！',array('controller'=>'home'));?></h1>
    </div>
     <ul class="nav navbar-nav navbar-right">
        <li><?php echo $this->Html->link('Home',array('controller'=>'home','action'=>'index'));?></li>
        <li><?php echo $this->Html->link('スナップ',array('controller'=>'snaps','action'=>'index'));?></li>
        <li><?php echo $this->Html->link('食レポ',array('controller'=>'foods','action'=>'index'));?></li>
        <li><?php echo $this->Html->link('コラム',array('controller'=>'contents','action'=>'index'));?></li>
      </ul>
      </div>
</nav>
</header>



<!-- メインコンテンツ -->
<div id="sb-site" style="background-image:/img/ame.jpeg">

<div class="row" style="margin-top:10px;">
  <div class="col-xs-12">
      <p class="text-center">
          <a href="http://d-cle.com/home/news">
            <button type="button" class="btn btn-warning btn-lg" style="width:100%"><span class="glyphicon glyphicon-user"></span>  新メンバー募集中！！</button>
          </a>
      </p>
  <div class="col-xs-6">
      <p class="text-center">
          <a href="http://d-cle.com/home/news">
            <button type="button" class="btn btn-warning btn-lg" style="width:100%"><span class="glyphicon glyphicon-user"></span>  メンバー募集！！</button>
          </a>
      </p>
  </div>
  <div class="col-xs-6">
      <p class="text-center">
          <a href="http://d-cle.com/home/writer">
            <button type="button" class="btn btn-warning btn-lg" style="width:100%"><span class="glyphicon glyphicon-pencil"></span>  ライター募集！！</button>
          </a>
      </p>
  </div>
  <div class="col-xs-6">
      <p class="text-center">
          <a href="http://d-cle.com/home/camera">
            <button type="button" class="btn btn-warning btn-lg" style="width:100%"><span class="glyphicon glyphicon-camera"></span>  カメラマン募集！！</button>
          </a>
      </p>
  </div>
  <div class="col-xs-6">
      <p class="text-center">
          <a href="http://d-cle.com/home/se">
            <button type="button" class="btn btn-warning btn-lg" style="width:100%"><span class="glyphicon glyphicon-folder-open"></span>  SE募集！！</button>
          </a>
      </p>
  </div>
  </div>
</div>
<?php echo $this->Session->flash(); ?>

<?php echo $this->fetch('content'); ?>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- d-cle_footer -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3720403877232403"
     data-ad-slot="2397829775"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

		<!-- footer -->
		<div class="row">
			<div class="col-xs-12 col-sm-4">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active text-center"><?php echo $this->Html->link('　トップに戻る',array('controller'=>'home','action'=>'index'),array('class'=>'glyphicon glyphicon-home','style'=>'border: 1px solid;background-color: rgba(45, 163, 182, 0.8);'));?></li>
                </ul>
	        </div>
			<div class="col-xs-12 col-sm-4">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active text-center"><?php echo $this->Html->link('　スナップ',array('controller'=>'snaps','action'=>'index'),array('class'=>'glyphicon glyphicon-picture','style'=>'border: 1px solid;background-color: rgba(45, 163, 182, 0.8);'));?></li>
                </ul>
	        </div>
			<div class="col-xs-12 col-sm-4">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active text-center"><?php echo $this->Html->link('　食レポ',array('controller'=>'foods','action'=>'index'),array('class'=>'glyphicon glyphicon-glass','style'=>'border: 1px solid;background-color: rgba(45, 163, 182, 0.8);'));?></li>
                </ul>
	        </div>
			<div class="col-xs-12 col-sm-4">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active text-center"><?php echo $this->Html->link('　コラム',array('controller'=>'contents','action'=>'index'),array('class'=>'glyphicon glyphicon glyphicon-pencil','style'=>'border: 1px solid;background-color: rgba(45, 163, 182, 0.8);'));?></li>
                </ul>
	        </div>
			<div class="col-xs-12 col-sm-4">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active text-center"><?php echo $this->Html->link('　団体を探す',array('controller'=>'clubs','action'=>'index'),array('class'=>'glyphicon glyphicon-user','style'=>'border: 1px solid;background-color: rgba(45, 163, 182, 0.8);'));?></li>
                </ul>
	        </div>
			<div class="col-xs-12 col-sm-4">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active text-center"><?php echo $this->Html->link('　イベントで探す',array('controller'=>'events','action'=>'index'),array('class'=>'glyphicon glyphicon-calendar','style'=>'border: 1px solid;background-color: rgba(45, 163, 182, 0.8);'));?></li>
                </ul>
	        </div>
		</div>


		<!-- footer -->
		<div class="row">
			<div class="col-xs-12">
                <div class="footer" style="background-color:#999">
                    <p class="text-left" style="display:inline;"><?php echo $this->Html->link('ご利用規約',array('controller'=>'home','action'=>'rule'))?></p>
                    <p class="text-left" style="display:inline;margin-left:10px;"><?php echo $this->Html->link('プライバシーポリシー',array('controller'=>'home','action'=>'privacy'))?></p>
                    <p class="text-left" style="display:inline;margin-left:10px;"><?php echo $this->Html->link('お問い合わせ',array('controller'=>'home','action'=>'form'))?></p>
    
                    <address class="text-center">BeYouth でぃーくる！</address>
                    
                </div>

            </div>
		</div>
            

</div>





<div class="sb-slidebar sb-left">
    <nav>
        <ul class="list-unstyled sb-nav">
            <li><h2 class="sb-slidebar-title"><?php echo $this->Html->link('　でぃーくる！',array('controller'=>'home','action'=>'index'));?></h2></li>
			<li><?php echo $this->Html->link('　スナップ',array('controller'=>'snaps','action'=>'index'),array('class'=>'glyphicon glyphicon-picture'));?></li>
            <li><?php echo $this->Html->link('　食レポ',array('controller'=>'foods','action'=>'index'),array('class'=>'glyphicon glyphicon-glass'));?></li>
            <li><?php echo $this->Html->link('　コラム',array('controller'=>'contents','action'=>'index'),array('class'=>'glyphicon glyphicon glyphicon-pencil'));?></li>
            <li><?php echo $this->Html->link('　団体を探す',array('controller'=>'clubs','action'=>'index'),array('class'=>'glyphicon glyphicon-user'));?></li>
            <li><?php echo $this->Html->link('　イベントで探す',array('controller'=>'events','action'=>'index'),array('class'=>'glyphicon glyphicon-calendar'));?></li>
        </ul>
    </nav>
</div>
    <div class="sb-slidebar sb-right">
    <aside id="about-me">
            <div class="sb-widget-header">
					<h3 class="sb-widget-title">
                    	<?php echo $this->requestAction('/home/login');?>
                    </h3>
				</div>
				<div class="sb-widget-content">
                	<!-- ログインあり 中無なし -->
					<?php $clubs = $this->requestAction('/home/logedit');?>
                    <?php if(empty($clubs)):?>
                    <?php echo '<p>';?>
                    <?php echo $this->Html->link('団体の新規登録or団体のイベント追加',array('controller'=>'clubs','action'=>'add'));?>
                    <?php echo '</p>';?>
                    <?php echo '<p>';?>
					<?php echo $this->Html->link('イベントの追加',array('controller'=>'events','action'=>'add'));?>
                    <?php echo '</p>';?>
                    <?php $events = $this->requestAction('/home/logevent');?>

                            <ul>
								<?php foreach($events as $event):?>
                                <?php if($event['Event']['club_id'] == 0):?>
                                    <li><?php echo $this->Html->link($event['Event']['title'].'イベントを編集',array('controller'=>'events','action'=>'edit',$event['Event']['id']));?></li>
                                <?php endif;?>
								<?php endforeach;?>
                            </ul>

					<?php endif;?>



                    
                	<!-- ログイン 中身有 -->
                    <?php if(!empty($clubs)):?>
						<?php if($clubs ==1):?>
                        <?php echo $this->Html->link('ユーザーの新規登録',array('controller'=>'signup','action'=>'index'));?>
                        <?php else:?>
							<li><?php echo $this->Html->link('団体を追加',array('controller'=>'clubs','action'=>'add'))?></li>
                            <li><?php echo $this->Html->link('イベントの追加',array('controller'=>'events','action'=>'add'));?></li>
							<?php $events = $this->requestAction('/home/logevent');?>

                            <ul>
								<?php foreach($events as $event):?>
                                <?php if($event['Event']['club_id'] == 0):?>
                                    <li><?php echo $this->Html->link($event['Event']['title'].'イベントを編集',array('controller'=>'events','action'=>'edit',$event['Event']['id']));?></li>
                                <?php endif;?>
								<?php endforeach;?>
                            </ul>

                            
                            <?php foreach($clubs as $club):?>

                            <li>
								<?php echo $this->Html->link($club['Club']['name'].'の内容とイベントを編集',array('controller'=>'clubs','action'=>'edit',$club['Club']['id']));?>
                            </li>
                                <ul>
                                
                            <?php for($i=0;$i<count($club['Event']);$i++):?>
                            	<?php if($club['Event'][$i]['eventcategory_id'] == 1):?>
                                    <li>
                                        <?php echo $this->Html->link($club['Event'][$i]['title'].'の新歓イベントを編集',array('controller'=>'events','action'=>'edit',$club['Club']['id']));?>
                                    </li>

                                <?php endif;?>
                                <?php if($club['Event'][$i]['eventcategory_id'] == 2):?>
                                    <li>
                                        <?php echo $this->Html->link($club['Event'][$i]['title'].'イベントを編集',array('controller'=>'clubs','action'=>'edit',$club['Club']['id']));?>
                                    </li>

                                <?php endif;?>
                                
							<?php endfor;?>
                                </ul>
                            <?php endforeach;?>
                            
                        <?php endif;?>
                    <?php endif;?>
				</div>
        </aside>
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
    

    <?php echo $this->Html->script('bootstrap.min.js')?>
    <?php echo $this->Html->script('slidebars.min.js')?>
    
</body>
</html>
