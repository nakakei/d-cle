
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('団体一覧', '/clubs/index');
	$this->Html->addCrumb($club['Club']['name'],'/clubs/view/'.$club['Club']['id']);
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>
			</div>
		</div>
	</div>
</div>


<div class="row">
  <div class="col-xs-12 col-sm-6">
   	<div class="thumbnail">
      <blockquote>
          <h1><?php echo $club['Club']['name']?></h1>
      </blockquote>
      <p>タップで拡大表示</p>
        
        
        
        <!-- 画像のスタイル -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="active item">
             <a href="
			 <?php 
			 	if(!$club['Attachment']['0']['photo'] == null){
			 		echo '../../files/attachment/photo/'. $club['Attachment']['0']['id'] .'/'.$club['Attachment']['0']['photo'];
				}else{
			 	}
				?>
             ">
			 <?php
			 if(!$club['Attachment']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/attachment/photo/'. $club['Attachment']['0']['id'] .'/thumb300_'.$club['Attachment']['0']['photo'],array('alt'=>'First slide'));
			 }else{
				echo $this->Html->image('no-image.png'); 
			 }
			?>
            </a>
            </div>
            <div class="item">
             <a href="<?php 
			 	if(!$club['Attachment']['1']['photo'] == null){
			 		echo '../../files/attachment/photo/'. $club['Attachment']['1']['id'] .'/'.$club['Attachment']['1']['photo'];
				}else{
			 	}
				?>">
			 <?php
			 if(!$club['Attachment']['1']['photo'] == null){ 
			 	echo $this->Html->image('../files/attachment/photo/'. $club['Attachment']['1']['id'] .'/thumb300_'.$club['Attachment']['1']['photo'],array('alt'=>'First slide'));
			 }else{
				echo $this->Html->image('no-image.png'); 
			 }
			?>
            </a>
            </div>
            <div class="item">
              <a href="<?php 
			 	if(!$club['Attachment']['2']['photo'] == null){
			 		echo '../../files/attachment/photo/'. $club['Attachment']['2']['id'] .'/'.$club['Attachment']['2']['photo'];
				}else{
			 	}
				?>">
			 <?php
			 if(!$club['Attachment']['2']['photo'] == null){ 
			 	echo $this->Html->image('../files/attachment/photo/'. $club['Attachment']['2']['id'] .'/thumb300_'.$club['Attachment']['2']['photo'],array('alt'=>'First slide'));
			 }else{
				echo $this->Html->image('no-image.png'); 
			 }
			?>
              </a>
            </div>
        
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
        
        
        
        
        
        
        
	</div>
  </div>
    <div class="col-xs-12 col-sm-6">
        <div class="thumbnail">       
        <h2>【団体紹介文】</h2>
        <hr>
        <?php echo $club['Club']['body'];?>
        <hr>
        <a href="https://twitter.com/share" class="twitter-share-button"  data-via="d_cle_" data-lang="ja">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <hr>

        <table class="table">
          <thead>
            <tr>
              <th>団体詳細</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>活動内容</td>
              <td><?php echo h($club['Club']['clibaction']); ?></td>
            </tr>
            <tr>
              <td>活動日</td>
              <td><?php echo h($club['Club']['actionday']); ?></td>
            </tr>
            <tr>
              <td>経歴</td>
              <td><?php echo h($club['Club']['career']); ?></td>
            </tr>
            <tr>
              <td>人数</td>
              <td><?php echo h($club['Club']['number']); ?>人</td>
            </tr>
            <tr>
              <td>会費</td>
              <td><?php echo h($club['Club']['membership']); ?>円</td>
            </tr>
            <tr>
              <td>入会締切</td>
              <td><?php echo h($club['Club']['closing']); ?></td>
            </tr>
            <tr>
              <td>代表者</td>
              <td><?php echo h($club['Club']['representative']); ?></td>
            </tr>
            <tr>
              <td>連絡先</td>
              <td><address><a href="mailto:<?php echo h($club['Club']['email']); ?>"><?php echo h($club['Club']['email']); ?></a></address>
              </td>
            </tr>
            <tr>
              <td>カテゴリー</td>
              <td><?php echo h($club['Clubcategory']['name']); ?></td>
            </tr>
            <tr>
              <td>活動拠点</td>
              <td><?php echo h($club['Club']['actionlocation']); ?></td>
            </tr>
          </tbody>
        </table>
        </div>
    </div>
    
  <div class="col col-xs-12">
    <div class="thumbnail">
        <h1>【新歓の予定】</h1>
      <!-- カレンダー表示 -->
          <div id="fc3" class="fc"></div>
            
      <script type="text/javascript">
            $(document).ready(function() {
                $('#fc3').fullCalendar({
                    header: {
                            left: 'prev,next',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                    axisFormat: "H:mm",
                    timeFormat: { agenda: "H:mm{ - H:mm}", "": "H:mm" },
                    columnFormat: { month: "ddd", week: "M月d日 ddd", day: "M月d日 dddd" },
                    buttonText: { today: "今日", month: "月", week: "週", day: "日" },
                    titleFormat: { month: "yyyy年 M月", week: "yyyy年 M月 d日{ - [ M月] d日}", day: "yyyy年 M月 d日 dddd" },
                    monthNames: [ "1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月" ],
                    dayNamesShort: [ "日", "月", "火", "水", "木", "金", "土" ],
                    dayNames: [ "日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日" ],
                    selectable: true,
                    
                    events: <?php echo $rows;?>,
                })
            });
            </script>
        
        
        
    </div>
  </div>
  <div class="col col-xs-12">
  　<?php if (!empty($club['Event'])): ?>
	<div class="thumbnail">
    	<h2>【イベント一覧】</h2>
		<table class="table">
          <thead>
            <tr>
              <th>タイトル</th>
              <th>日程</th>
              <th>場所</th>
              <th>内容</th>
            </tr>
          </thead>
          <?php foreach ($club['Event'] as $event): ?>
          <tbody>
            <tr>
			<td><?php echo $event['title']; ?></td>
			<td><?php echo date("m/d H:i",strtotime($event['start'])).'～';?></td>
			<td><?php echo $event['place']; ?></td>
			<td><?php echo $this->Html->link('詳しく見る',array('controller'=>'events','action'=>'view',$event['id']),array('class' => 'btn btn-primary btn-sm'));?></td>
			<td></td>
			</td>
          </tbody>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
  </div>
</div>