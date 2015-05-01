
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('スナップ一覧', '/snaps/index');
	$this->Html->addCrumb($snap['Snap']['name'],'/snaps/view/'.$snap['Snap']['id']);
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>
			</div>
		</div>
	</div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-12">
   	<div class="thumbnail">
      <blockquote>
          <h1><?php echo $snap['Snap']['name']?></h1>
      </blockquote>
      <p>タップで拡大表示できます</p>
    </div>
	
    <div class="thumbnail">


<!-- 画像のスタイル -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <?php for($i=0;$i<count($snap['Snapphoto']);$i++):?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" 
			<?php if($i==0){
				echo 'class="active"';
			};?>></li>
            <?php endfor;?>
        </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          <?php for($i=0;$i<count($snap['Snapphoto']);$i++):?>
            <div           
			<?php if($i==0){
				echo 'class="active item"';
			}else{
				echo 'class="item"';
			}
			;?>>
            <a href="
			 <?php 
			 	if(!$snap['Snapphoto'][$i]['photo'] == null){
			 		echo '../../files/snapphoto/photo/'. $snap['Snapphoto'][$i]['id'] .'/'.$snap['Snapphoto'][$i]['photo'];
				}else{
			 	}
				?>
               " >
			 <?php
			 if(!$snap['Snapphoto'][$i]['photo'] == null){ 
			 	echo $this->Html->image('../files/snapphoto/photo/'. $snap['Snapphoto'][$i]['id'] .'/thumb800_'.$snap['Snapphoto'][$i]['photo'],array('alt'=>'First slide'));
			 }else{
				echo $this->Html->image('no-image.png'); 
			 }
			?></a>

            </div>
         <?php endfor;?>
        
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




    <div class="col-xs-12 col-md-6">
        <div class="thumbnail">       

        <table class="table">
          <thead>
            <tr>
              <th>プロフィール</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>名前</td>
              <td><?php echo h($snap['Snap']['name']); ?></td>
            </tr>
            <tr>
              <td>大学</td>
              <td><?php echo h($snap['Snap']['university']); ?></td>
            </tr>
            <tr>
              <td>学部</td>
              <td><?php echo h($snap['Snap']['undergraduate']); ?></td>
            </tr>
            <tr>
              <td>回生</td>
              <td><?php echo h($snap['Snap']['schoolyear']); ?></td>
            </tr>
            <tr>
              <td><?php echo $snap['Snap']['questionfree']?></td>
              <td><?php echo h($snap['Snap']['questionanswer']); ?></td>
            </tr>
            <tr>
          </tbody>
        </table>
        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="thumbnail">
        	<h3>その他</h3>
            <?php echo $snap['Snap']['other'];?>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="thumbnail">
        	<h3>かわいかったら共有！</h3>
<a href="https://twitter.com/share" class="twitter-share-button" data-via="d_cle_" data-text="【同志社スナップ：<?php echo $title_for_layout; ?>】" data-lang="ja">ツイート</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <div class="fb-like" data-href="http://new.d-cle.com/home" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
        </div>
    </div>

</div>


<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
                <p class="text-right"><?php echo $this->Html->link('戻る',$referer,array('class'=>'btn btn-primary','role'=>'button'));?></p>
			</div>
		</div>
	</div>
</div>
