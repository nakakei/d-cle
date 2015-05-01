<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml"><head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php echo $this->Html->charset(); ?>
	<title>
		でぃーくる！:
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
		echo $this->Html->css('magicsuggest.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
	<?php
    	echo $this->Html->script('jquery.min.js');
		//カレンダー
		echo $this->Html->css('fullcalendar/fullcalendar.css');
    	echo $this->Html->script('fullcalendar/fullcalendar.min.js');
		
		
		//テキストエディタ
    	echo $this->Html->script('nicEdit.js');
		
    ?>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-39776710-1', 'd-cle.com');
	  ga('send', 'pageview');
	
	</script>
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
<div id="sb-site">
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
                    <?php echo $this->Html->link('団体の新規登録',array('controller'=>'clubs','action'=>'add'));?>
                    <?php //echo $this->Html->link('イベントの追加',array('controller'=>'events','action'=>'add'));?>
                    <?php endif;?>
                    
                	<!-- ログイン 中身有 -->
                    <?php if(!empty($clubs)):?>
						<?php if($clubs ==1):?>
                        <?php echo $this->Html->link('ユーザーの新規登録',array('controller'=>'signup','action'=>'index'));?>
                        <?php else:?>
							<li><?php echo $this->Html->link('団体を追加',array('controller'=>'clubs','action'=>'add'))?></li>
                            <?php foreach($clubs as $club):?>

                            <li>
								<?php echo $this->Html->link($club['Club']['name'].'の内容とイベントを編集',array('controller'=>'clubs','action'=>'edit',$club['Club']['id']));?>
                            </li>
                            <?php endforeach;?>
                        <?php endif;?>
                    <?php endif;?>
				</div>
        </aside>
	</div>

    

    <?php echo $this->Html->script('bootstrap.min.js')?>
    <?php echo $this->Html->script('slidebars.min.js')?>
    <?php echo $this->Html->script('magicsuggest.js')?>
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
    <script>
$(function() {
    $('#ClubUniversity').magicSuggest({
		allowFreeEntries:false,
		maxSelection:1,		
        data:["その他","愛国学園大学","愛知大学","愛知医科大学","愛知学院大学","愛知学泉大学","愛知教育大学","愛知県立大学","愛知県立芸術大学","愛知工科大学","愛知工業大学","愛知産業大学","愛知淑徳大学","愛知東邦大学","愛知文教大学","愛知みずほ大学","会津大学","藍野大学","青森大学","青森県立保健大学","青森公立大学","青森中央学院大学","青山学院大学","秋田大学","秋田看護福祉大学","秋田県立大学","秋田公立美術大学","朝日大学","旭川大学","旭川医科大学","麻布大学","亜細亜大学","足利工業大学","芦屋大学","跡見学園女子大学","石川県立大学","石川県立看護大学","石巻専修大学","茨城大学","茨城キリスト教大学","茨城県立医療大学","いわき明星大学","岩手大学","岩手医科大学","岩手県立大学","植草学園大学","上野学園大学","宇都宮大学","宇都宮共和大学","宇部フロンティア大学","浦和大学","SBI大学院大学","江戸川大学","愛媛大学","愛媛県立医療技術大学","エリザベト音楽大学","奥羽大学","桜花学園大学","追手門学院大学","桜美林大学","大分大学","大分県立看護科学大学","大阪大学","大阪青山大学","大阪医科大学","大阪大谷大学","大阪音楽大学","大阪学院大学","大阪河崎リハビリテーション大学","大阪観光大学","大阪教育大学","大阪経済大学","大阪経済法科大学","大阪芸術大学","大阪工業大学","大阪国際大学","大阪産業大学","大阪歯科大学","大阪樟蔭女子大学","大阪商業大学","大阪女学院大学","大阪市立大学","大阪成蹊大学","大阪総合保育大学","大阪体育大学","大阪電気通信大学","大阪人間科学大学","大阪府立大学","大阪保健医療大学","大阪物療大学","大阪薬科大学","大阪行岡医療大学","大谷大学","大妻女子大学","大手前大学","大原大学院大学","岡崎女子大学","岡山大学","岡山学院大学","岡山県立大学","岡山商科大学","岡山理科大学","沖縄大学","沖縄キリスト教学院大学","沖縄県立看護大学","沖縄県立芸術大学","沖縄国際大学","沖縄科学技術大学院大学","小樽商科大学","お茶の水女子大学","尾道市立大学","帯広畜産大学","か行[編集]","嘉悦大学","香川大学","香川県立保健医療大学","学習院大学","学習院女子大学","鹿児島大学","鹿児島国際大学","鹿児島純心女子大学","活水女子大学","神奈川大学","神奈川県立保健福祉大学","神奈川工科大学","神奈川歯科大学","金沢大学","金沢医科大学","金沢学院大学","金沢工業大学","金沢星稜大学","金沢美術工芸大学","鹿屋体育大学","鎌倉女子大学","亀田医療大学","川崎医科大学","川崎医療福祉大学","川村学園女子大学","関西大学","関西医科大学","関西医療大学","関西外国語大学","関西看護医療大学","関西国際大学","関西福祉大学","関西福祉科学大学","関西学院大学","環太平洋大学","神田外語大学","関東学院大学","関東学園大学","畿央大学","北九州市立大学","北里大学","北見工業大学","吉備国際大学","岐阜大学","岐阜医療科学大学","岐阜経済大学","岐阜県立看護大学","岐阜聖徳学園大学","岐阜女子大学","岐阜薬科大学","九州大学","九州栄養福祉大学","九州看護福祉大学","九州共立大学","九州工業大学","九州国際大学","九州産業大学","九州歯科大学","九州情報大学","九州女子大学","九州保健福祉大学","九州ルーテル学院大学","共愛学園前橋国際大学","共栄大学","京都大学","京都医療科学大学","京都外国語大学","京都学園大学","京都華頂大学","京都看護大学","京都教育大学","京都光華女子大学","京都工芸繊維大学","京都嵯峨芸術大学","京都産業大学","京都情報大学院大学","京都女子大学","京都市立芸術大学","京都精華大学","京都造形芸術大学","京都橘大学","京都ノートルダム女子大学","京都美術工芸大学","京都府立大学","京都府立医科大学","京都文教大学","京都薬科大学","共立女子大学","杏林大学","桐生大学","近畿大学","金城大学","金城学院大学","近大姫路大学","釧路公立大学","国立音楽大学","熊本大学","熊本学園大学","熊本県立大学","熊本保健科学大学","倉敷芸術科学大学","くらしき作陽大学","久留米大学","久留米工業大学","グロービス経営大学院大学","群馬大学","群馬医療福祉大学","群馬県立県民健康科学大学","群馬県立女子大学","群馬パース大学","敬愛大学","慶應義塾大学","恵泉女学園大学","敬和学園大学","健康科学大学","県立広島大学","工学院大学","皇學館大学","甲子園大学","高知大学","高知県立大学","高知工科大学","甲南大学","甲南女子大学","神戸大学","神戸医療福祉大学","神戸海星女子学院大学","神戸学院大学","神戸芸術工科大学","神戸国際大学","神戸市外国語大学","神戸市看護大学","神戸夙川学院大学","神戸松蔭女子学院大学","神戸情報大学院大学","神戸女学院大学","神戸女子大学","神戸親和女子大学","神戸常盤大学","神戸薬科大学","神戸山手大学","高野山大学","公立はこだて未来大学","郡山女子大学","國學院大學","国際大学（大学院大学）","国際医療福祉大学","国際教養大学","国際基督教大学","国際仏教学大学院大学","国際武道大学","国士舘大学","こども教育宝仙大学","駒澤大学","駒沢女子大学","さ行[編集]","埼玉大学","埼玉医科大学","埼玉学園大学","埼玉県立大学","埼玉工業大学","サイバー大学","佐賀大学","相模女子大学","佐久大学","作新学院大学","札幌大学","札幌医科大学","札幌大谷大学","札幌学院大学","札幌国際大学","札幌市立大学","札幌保健医療大学","三育学院大学","産業医科大学","産業技術大学院大学","産業能率大学","山陽学園大学","滋賀大学","滋賀医科大学","志學館大学","至学館大学","滋賀県立大学","事業創造大学院大学","事業構想大学院大学","滋慶医療科学大学院大学","四国大学","四国学院大学","四條畷学園大学","静岡大学","静岡英和学院大学","静岡県立大学","静岡産業大学","静岡福祉大学","静岡文化芸術大学","静岡理工科大学","自治医科大学","実践女子大学","四天王寺大学","芝浦工業大学","島根大学","島根県立大学","下関市立大学","就実大学","修文大学","秀明大学","十文字学園女子大学","淑徳大学","種智院大学","首都大学東京","純真学園大学","順天堂大学","松蔭大学","上越教育大学","尚絅大学","尚絅学院大学","城西大学","城西国際大学","上智大学","湘南工科大学","尚美学園大学","上武大学","情報科学芸術大学院大学","情報セキュリティ大学院大学","昭和大学","昭和音楽大学","昭和女子大学","昭和薬科大学","女子栄養大学","女子美術大学","白梅学園大学","白百合女子大学","仁愛大学","信州大学","杉野服飾大学","椙山女学園大学","鈴鹿医療科学大学","鈴鹿国際大学","駿河台大学","諏訪東京理科大学","成安造形大学","聖学院大学","聖カタリナ大学","成蹊大学","星槎大学","政策研究大学院大学","成城大学","星城大学","聖心女子大学","聖泉大学","清泉女学院大学","清泉女子大学","聖徳大学","西南学院大学","西南女学院大学","成美大学","西武文理大学","聖マリア学院大学","聖マリアンナ医科大学","聖隷クリストファー大学","聖路加看護大学","清和大学","摂南大学","専修大学","洗足学園音楽大学","仙台大学","仙台白百合女子大学","千里金蘭大学","相愛大学","創価大学","総合研究大学院大学","崇城大学","園田学園女子大学","た行[編集]","第一工業大学","第一薬科大学","大正大学","太成学院大学","大同大学","大東文化大学","高岡法科大学","高崎経済大学","高崎健康福祉大学","高崎商科大学","高千穂大学","高松大学","宝塚大学","宝塚医療大学","拓殖大学","多摩大学","玉川大学","多摩美術大学","筑紫女学園大学","千歳科学技術大学","千葉大学","千葉科学大学","千葉経済大学","千葉県立保健医療大学","千葉工業大学","千葉商科大学","中央大学","中央学院大学","中京大学","中京学院大学","中国学園大学","中部大学","中部学院大学","筑波大学","筑波学院大学","筑波技術大学","つくば国際大学","津田塾大学","敦賀市立看護大学","都留文科大学","鶴見大学","帝京大学","帝京科学大学","帝京平成大学","デジタルハリウッド大学","帝塚山大学","帝塚山学院大学","田園調布学園大学","電気通信大学","天使大学","天理大学","天理医療大学","東亜大学","桐蔭横浜大学","東海大学","東海学園大学","東海学院大学","東京大学","東京有明医療大学","東京医科大学","東京医科歯科大学","東京医療学院大学","東京医療保健大学","東京音楽大学","東京外国語大学","東京海洋大学","東京学芸大学","東京家政大学","東京家政学院大学","東京基督教大学","東京経済大学","東京芸術大学","東京工科大学","東京工業大学","東京工芸大学","東京国際大学","東京歯科大学","東京慈恵会医科大学","東京純心女子大学","東京聖栄大学","東京情報大学","東京女子大学","東京女子医科大学","東京女子体育大学","東京神学大学","東京成徳大学","東京造形大学","東京電機大学","東京都市大学","東京農業大学","東京農工大学","東京福祉大学","東京富士大学","東京未来大学","東京薬科大学","東京理科大学","同志社大学","同志社女子大学","道都大学","東都医療大学","東邦大学","同朋大学","東邦音楽大学","桐朋学園大学","桐朋学園大学院大学","東北大学","東北学院大学","東北芸術工科大学","東北公益文科大学","東北工業大学","東北女子大学","東北生活文化大学","東北福祉大学","東北文化学園大学","東北文教大学","東北薬科大学","東洋大学","東洋英和女学院大学","東洋学園大学","常磐大学","常磐会学園大学","徳島大学","徳島文理大学","徳山大学","常葉大学","獨協大学","獨協医科大学","鳥取大学","鳥取環境大学","苫小牧駒澤大学","富山大学","富山県立大学","富山国際大学","豊田工業大学","豊橋技術科学大学","豊橋創造大学","な行[編集]","長岡大学","長岡技術科学大学","長岡造形大学","長崎大学","長崎ウエスレヤン大学","長崎外国語大学","長崎県立大学","長崎国際大学","長崎純心大学","長崎総合科学大学","長野大学","長野県看護大学","長浜バイオ大学","中村学園大学","名古屋大学","名古屋音楽大学","名古屋外国語大学","名古屋学院大学","名古屋学芸大学","名古屋経済大学","名古屋芸術大学","名古屋工業大学","名古屋産業大学","名古屋商科大学","名古屋女子大学","名古屋市立大学","名古屋造形大学","名古屋文理大学","名寄市立大学","奈良大学","奈良教育大学","奈良県立大学","奈良県立医科大学","奈良産業大学","奈良女子大学","奈良先端科学技術大学院大学","鳴門教育大学","南山大学","新潟大学","新潟医療福祉大学","新潟経営大学","新潟県立大学","新潟県立看護大学","新潟工科大学","新潟国際情報大学","新潟産業大学","新潟青陵大学","新潟薬科大学","新潟リハビリテーション大学","新見公立大学","西九州大学","西日本工業大学","二松學舍大学","日本大学","日本医科大学","日本医療大学","日本医療科学大学","日本ウェルネススポーツ大学","日本映画大学","日本教育大学院大学","日本経済大学","日本工業大学","日本歯科大学","日本社会事業大学","日本獣医生命科学大学","日本女子大学","日本女子体育大学","日本赤十字看護大学","日本赤十字秋田看護大学","日本赤十字九州国際看護大学","日本赤十字豊田看護大学","日本赤十字広島看護大学","日本赤十字北海道看護大学","日本体育大学","日本橋学館大学","日本福祉大学","日本文化大学","日本文理大学","日本保健医療大学","日本薬科大学","人間環境大学","人間総合科学大学","ノースアジア大学","ノートルダム清心女子大学","は行[編集]","梅花女子大学","梅光学院大学","白鴎大学","函館大学","羽衣国際大学","八戸学院大学","八戸工業大学","花園大学","浜松医科大学","浜松学院大学","ハリウッド大学院大学","阪南大学","東大阪大学","東日本国際大学","光産業創成大学院大学","ビジネス・ブレークスルー大学","比治山大学","一橋大学","姫路獨協大学","兵庫大学","兵庫医科大学","兵庫医療大学","兵庫教育大学","兵庫県立大学","弘前大学","弘前医療福祉大学","弘前学院大学","広島大学","広島経済大学","広島工業大学","広島国際大学","広島国際学院大学","広島修道大学","広島女学院大学","広島市立大学","広島都市学園大学","広島文化学園大学","広島文教女子大学","びわこ学院大学","びわこ成蹊スポーツ大学","プール学院大学","フェリス女学院大学","福井大学","福井県立大学","福井工業大学","福岡大学","福岡教育大学","福岡県立大学","福岡工業大学","福岡国際大学","福岡歯科大学","福岡女学院大学","福岡女学院看護大学","福岡女子大学","福島大学","福島学院大学","福島県立医科大学","福山大学","福山市立大学","福山平成大学","富士大学","藤女子大学","藤田保健衛生大学","佛教大学","文化学園大学","文化ファッション大学院大学","文教大学","文京学院大学","文星芸術大学","平安女学院大学","平成音楽大学","平成国際大学","別府大学","法政大学","放送大学","北翔大学","北星学園大学","北陸大学","北陸学院大学","北陸先端科学技術大学院大学","保健医療経営大学","星薬科大学","北海学園大学","北海商科大学","北海道大学","北海道医療大学","北海道教育大学","北海道工業大学","北海道情報大学","北海道文教大学","北海道薬科大学","ま行[編集]","前橋工科大学","松本大学","松本歯科大学","松山大学","松山東雲女子大学","三重大学","三重県立看護大学","南九州大学","身延山大学","美作大学","宮城大学","宮城学院女子大学","宮城教育大学","宮崎大学","宮崎県立看護大学","宮崎公立大学","宮崎国際大学","宮崎産業経営大学","武庫川女子大学","武蔵大学","武蔵野大学","武蔵野音楽大学","武蔵野学院大学","武蔵野美術大学","室蘭工業大学","名桜大学","明海大学","明治大学","明治学院大学","明治国際医療大学","明治薬科大学","名城大学","明星大学","目白大学","ものつくり大学","桃山学院大学","盛岡大学","森ノ宮医療大学","や行[編集]","八洲学園大学","安田女子大学","山形大学","山形県立保健医療大学","山形県立米沢栄養大学","山口大学","山口学芸大学","山口県立大学","山口東京理科大学","山口福祉文化大学","ヤマザキ学園大学","大和大学","山梨大学","山梨英和大学","山梨学院大学","山梨県立大学","横浜国立大学","横浜商科大学","横浜市立大学","横浜創英大学","横浜美術大学","横浜薬科大学","四日市大学","四日市看護医療大学","ら行[編集]","酪農学園大学","立教大学","立正大学","立命館大学","立命館アジア太平洋大学","琉球大学","龍谷大学","流通科学大学","流通経済大学","了徳寺大学","ルーテル学院大学","麗澤大学","LEC東京リーガルマインド大学院大学","わ行[編集]","和歌山大学","和歌山県立医科大学","和光大学","早稲田大学","稚内北星学園大学","和洋女子大学"] // configuration options
    });
});
	</script>
    <script type="text/javascript">
$(function(){
　$("#datepicker").datepicker({
	dateFormat:'yy-mm-dd',
	});
});
</script>
</body>
</html>
