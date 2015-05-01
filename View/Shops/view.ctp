
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('求人一覧', '/shops/index');
	$this->Html->addCrumb($shop['Shop']['title'],'/shops/view/'.$shop['Shop']['id']);
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
          <h1><?php echo $shop['Shop']['title']?></h1>
      </blockquote>
            <p>ジャンル：
                    <?php foreach($shop['Shopgenre'] as $tag):?>
                    <a href="<?php echo '/shopgenres/view/'.$tag['id'];?>">
                    <span class="label label-danger"><?php  echo $tag['name'];?></span>
                    </a>
        
                    <?php endforeach;?>
        
                    場所：
                    <?php foreach($shop['Shopplace'] as $tag):?>
                    <a href="<?php echo '/shopplaces/view/'.$tag['id'];?>">
                    <span class="label label-danger"><?php  echo $tag['name'];?></span>
                    </a>
        
                    <?php endforeach;?>
                    </p>
    </div>
	
    <div class="thumbnail">


<!-- 画像のスタイル -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <?php for($i=0;$i<count($shop['Shopphoto']);$i++):?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" 
			<?php if($i==0){
				echo 'class="active"';
			};?>></li>
            <?php endfor;?>
        </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          <?php for($i=0;$i<count($shop['Shopphoto']);$i++):?>
            <div           
			<?php if($i==0){
				echo 'class="active item"';
			}else{
				echo 'class="item"';
			}
			;?>>
            <a href="
			 <?php 
			 	if(!$shop['Shopphoto'][$i]['photo'] == null){
			 		echo '../../files/shopphoto/photo/'. $shop['Shopphoto'][$i]['id'] .'/'.$shop['Shopphoto'][$i]['photo'];
				}else{
			 	}
				?>
               " >
			 <?php
			 if(!$shop['Shopphoto'][$i]['photo'] == null){ 
			 	echo $this->Html->image('../files/shopphoto/photo/'. $shop['Shopphoto'][$i]['id'] .'/thumb800_'.$shop['Shopphoto'][$i]['photo'],array('alt'=>'First slide'));
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




    <div class="col-xs-12 col-sm-6">
        <div class="thumbnail">       

        <table class="table table-striped">
          <thead>
            <tr>
              <th>詳細情報</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>店舗名</td>
              <td><?php echo h($shop['Shop']['title']); ?></td>
            </tr>
            <tr>
              <td>平均予算</td>
              <td><?php echo h($shop['Shop']['money']); ?></td>
            </tr>
            <tr>
              <td>営業時間</td>
              <td><?php echo h($shop['Shop']['time']); ?></td>
            </tr>
            <tr>
              <td>定休日</td>
              <td><?php echo h($shop['Shop']['holiday']); ?></td>
            </tr>
            <tr>
              <td>座席数</td>
              <td><?php echo h($shop['Shop']['seat']); ?></td>
            </tr>
              <td>電話番号</td>
              <td><a href="tel:<?php echo h($shop['Shop']['tel']); ?>"></a><?php echo h($shop['Shop']['tel']); ?></td>
            </tr>
            <tr>
              <td>駐車場</td>
              <td><?php echo h($shop['Shop']['parking']); ?></td>
            </tr>
            <tr>
              <td>喫煙席</td>
              <td><?php echo h($shop['Shop']['smoke']); ?></td>
            </tr>
            <tr>
              <td>アクセス</td>
              <td><?php echo h($shop['Shop']['acces']); ?></td>
            </tr>
          </tbody>
        </table>
		<p style="text-align: right;"><?php echo $this->Html->link('応募する',array('action'=>'contact',$shop['Shop']['id']),array('class'=>'btn btn-danger','role'=>'button'));?></p>
        </div>
    </div>
    
     <div class="col-xs-12 col-sm-6">
        <div class="thumbnail">
        	<h3>共有</h3>
<a href="https://twitter.com/share" class="twitter-share-button" data-via="d_cle_" data-text="【でぃーくる！求人：<?php //echo $title_for_layout; ?>】" data-lang="ja">ツイート</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <div class="fb-like" data-href="http://new.d-cle.com/home" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="thumbnail">
        	<h3>店舗紹介</h3>
            <?php echo $shop['Shop']['body'];?>
        </div>
    </div>
   

</div>


<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
            <h3>店舗地図</h3>
	            <div class="google-maps">
            <iframe src="<?php //echo $shop['Shop']['map']?>" width="600" height="450" frameborder="0" style="border:0"></iframe>
            	</div>
			</div>	
		</div>

	</div>
</div>
