		<div class="thumbnail">
			<div class="caption" style="padding:0px;">
<!-- Carousel================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="item active">
    <a href="snaps/index">
      <img src="img/139.jpg" class="img-responsive"></a>
      <div class="container">
        <div class="carousel-caption">
          <h1>同志社スナップ</h1>
          <p><?php echo $this->Html->link('詳しく',array('controller'=>'snaps','action'=>'index'),array('class'=>'btn btn-md btn-primary'));?>
        </p></pthis></div>
      </div>
    </div>
    <div class="item">
      <a href="contents/index">
      <img src="img/photo33.jpg" class="img-responsive">
      </a>
      <div class="container">
        <div class="carousel-caption">
          <h1>コラム</h1>
          <p><?php echo $this->Html->link('詳しく',array('controller'=>'cnotents','action'=>'index'),array('class'=>'btn btn-md btn-primary'));?></p>
        </div>
      </div>
    </div>
    <div class="item">
      <a href="foods/index">
      <img src="img/foos.jpg" class="img-responsive">
      </a>
      <div class="container">
        <div class="carousel-caption">
          <h1>食レポ</h1>
          <p><?php echo $this->Html->link('詳しく',array('controller'=>'foods','action'=>'index'),array('class'=>'btn btn-md btn-primary'));?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->
		</div>
	</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing" style="margin-top:30px;">



  <!-- Three columns of text below the carousel -->
  <div class="row">

    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('eve.jpg',array('class'=>'img-circle','url'=>array('controller'=>'home','action'=>'eve'),'style'=>'width:140px;height:140px;'))?>
      <h2 style="font-size:24px;">EVE祭</h2>
      <p>EVE祭の情報掲載！</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'festivals'),array('class'=>'btn btn-default'));?></p>
    </div>
    
  
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('139.jpg',array('class'=>'img-circle','url'=>array('controller'=>'snaps'),'style'=>'width:140px;height:140px;'))?>
      <h2>スナップ</h2>
      <p>同志社大学のスナップ</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'snaps'),array('class'=>'btn btn-default'));?></p>
    </div>
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('food.jpg',array('class'=>'img-circle','url'=>array('controller'=>'foods'),'style'=>'width:140px;height:140px;'))?>
      <h2>食レポ</h2>
      <p>同志社周辺の飲食情報</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'foods'),array('class'=>'btn btn-default'));?></p>
    </div>
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('photo33.jpg',array('class'=>'img-circle','url'=>array('controller'=>'contents'),'style'=>'width:140px;height:140px;'))?>
      <h2>コラム</h2>
      <p>メンバーが色々なこと書いてます</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'contents'),array('class'=>'btn btn-default'));?></p>
    </div>
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('sugodai.jpg',array('class'=>'img-circle','url'=>array('controller'=>'students'),'style'=>'width:140px;height:140px;'))?>
      <h2>すご大</h2>
      <p>同志社大学のすごい人のインタビュー記事</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'students'),array('class'=>'btn btn-default'));?></p>
    </div>
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('soccer1.jpg',array('class'=>'img-circle','url'=>array('controller'=>'clubs'),'style'=>'width:140px;height:140px;'))?>
      <h2>団体を探す</h2>
      <p>サークルなど学生団体などの情報をまとめてます</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'clubs'),array('class'=>'btn btn-default'));?></p>
    </div>
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('04f40e37c791dec36feb1975958014ad.jpg',array('class'=>'img-circle','url'=>array('controller'=>'events'),'style'=>'width:140px;height:140px;'))?>
      <h2 style="font-size:28px;">イベントで探す</h2>
      <p>イベントをまとめてます。イベントを探したい方はこちらから探せます</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'events'),array('class'=>'btn btn-default'));?></p>
    </div>
    
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('IMG_1812.jpg',array('class'=>'img-circle','url'=>array('controller'=>'shops'),'style'=>'width:140px;height:140px;'))?>
      <h2 style="font-size:24px;">お店紹介</h2>
      <p>今出川近辺のお店を紹介していきます！</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'shops'),array('class'=>'btn btn-default'));?></p>
    </div>
    
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('sugodai.jpg',array('class'=>'img-circle','url'=>array('controller'=>'jobs'),'style'=>'width:140px;height:140px;'))?>
      <h2 style="font-size:24px;">バイト紹介</h2>
      <p>今出川近辺のお店を紹介していきます！</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'jobs'),array('class'=>'btn btn-default'));?></p>
    </div>
    
    <div class="col-sm-4 col-xs-6 text-center">
      <?php echo $this->Html->image('kumaicon.jpg',array('class'=>'img-circle','url'=>array('controller'=>'members'),'style'=>'width:140px;height:140px;'))?>
      <h2 style="font-size:24px;">メンバー紹介</h2>
      <p>メンバーの詳細情報が書いてあります！</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'members'),array('class'=>'btn btn-default'));?></p>
    </div>
    
    
    <div class="col-sm-12 col-xs-12 text-center">
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="d_cle_" data-lang="ja">ツイート</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <div class="fb-like" data-href="http://d-cle.com/home" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
    </div>
  </div><!-- /.row -->




</div>