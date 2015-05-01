<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('イベント一覧', '/events/index');
	$this->Html->addCrumb($event['Event']['title'],'/events/view/'.$event['Event']['id']);
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>
			</div>
		</div>
	</div>
</div>



<div class="row">
    <div class="col col-xs-12">
        <div class="thumbnail">
            <h2>【<?php echo h($event['Event']['title']); ?>】</h2>
    
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td>イベント主催者</td>
                  <td><?php echo $this->Html->link($event['Club']['name'], array('controller' => 'clubs', 'action' => 'view', $event['Club']['id'])); ?></td>
                </tr>
              <tbody>
              
              
              <tbody>
                <tr>
                  <td>イベントカテゴリー</td>
                  <td><?php echo $event['Eventcategory']['name'];?></td>
                </tr>
              </tbody>
              
              <tbody>
                <tr>
                  <td>日程</td>
                  <td><?php echo date("m月d日",strtotime($event['Event']['start'])).'～' .date("d日",strtotime($event['Event']['end'])); ?></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td>時間</td>
                  <td><?php echo  date("H:i",strtotime($event['Event']['start'])).'～' .date("H:i",strtotime($event['Event']['end'])); ?></td>
                </tr>
              </tbody>
              
              <tbody>
                <tr>
                  <td>場所</td>
                  <td><?php echo $event['Event']['place'];?></td>
                </tr>
              </tbody>
            </table>
            <hr>
            <h2 class="text-center">概要</h2>
            <?php echo $event['Event']['body']; ?>
            </hr>
            
        </div>
    </div>
</div>


<div class="row">
	<div class="col-xs-12 col-md-12">
        <div class="thumbnail">
        	<h3>共有ボタン</h3>
<a href="https://twitter.com/share" class="twitter-share-button" data-via="d_cle_" data-lang="ja" data-text="【でぃーくる！コラム:<?php echo $title_for_layout; ?>】
<?php 
				$str = $event['Event']['body'];
            	$str = strip_tags($str);
				$str=str_replace("&nbsp;","",$str);
				$str = preg_replace('/(?:\n|\r|\r\n)/', '', $str );
				$str = mb_strimwidth($str, 0, 100, "…",'utf8');
				print $str;
?>

">ツイート</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <div class="fb-like" data-href="http://d-cle.com/home" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
        </div>
    </div>
</div>