
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('求人一覧', '/jobs/index');
	$this->Html->addCrumb($job['Job']['title'],'/jobs/view/'.$job['Job']['id']);
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
          <h1><?php echo $job['Job']['title']?></h1>
      </blockquote>
            <p>条件：
			<?php foreach($job['Jobrequirement'] as $tag):?>
            <a href="<?php echo '/jobrequirements/view/'.$tag['id'];?>">
            <span class="label label-danger"><?php  echo $tag['name'];?></span>
            </a>

			<?php endforeach;?>
            
            
            待遇：
			<?php foreach($job['Jobtreatment'] as $tag):?>
            <a href="<?php echo '/jobtreatments/view/'.$tag['id'];?>">
            <span class="label label-danger"><?php  echo $tag['name'];?></span>
            </a>

			<?php endforeach;?>
            
            
            場所：
			<?php foreach($job['Jobplace'] as $tag):?>
            <a href="<?php echo '/jobplaces/view/'.$tag['id'];?>">
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
          <?php for($i=0;$i<count($job['Jobphoto']);$i++):?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" 
			<?php if($i==0){
				echo 'class="active"';
			};?>></li>
            <?php endfor;?>
        </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          <?php for($i=0;$i<count($job['Jobphoto']);$i++):?>
            <div           
			<?php if($i==0){
				echo 'class="active item"';
			}else{
				echo 'class="item"';
			}
			;?>>
            <a href="
			 <?php 
			 	if(!$job['Jobphoto'][$i]['photo'] == null){
			 		echo '../../files/jobphoto/photo/'. $job['Jobphoto'][$i]['id'] .'/'.$job['Jobphoto'][$i]['photo'];
				}else{
			 	}
				?>
               " >
			 <?php
			 if(!$job['Jobphoto'][$i]['photo'] == null){ 
			 	echo $this->Html->image('../files/jobphoto/photo/'. $job['Jobphoto'][$i]['id'] .'/thumb800_'.$job['Jobphoto'][$i]['photo'],array('alt'=>'First slide'));
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
              <td><?php echo h($job['Job']['title']); ?></td>
            </tr>
            <tr>
              <td>時給</td>
              <td><?php echo h($job['Job']['mainmoney']); ?></td>
            </tr>
            <tr>
              <td>応募資格</td>
              <td><?php echo h($job['Job']['requirement']); ?></td>
            </tr>
            <tr>
              <td>勤務時間</td>
              <td><?php echo h($job['Job']['mainparttime']); ?></td>
            </tr>
            <tr>
              <td>待遇</td>
              <td><?php echo h($job['Job']['treatment']); ?></td>
            </tr>
            <tr>
              <td>アクセス</td>
              <td><?php echo h($job['Job']['acces']); ?></td>
            </tr>
          </tbody>
        </table>
		<p style="text-align: right;"><?php echo $this->Html->link('応募する',array('action'=>'contact',$job['Job']['id']),array('class'=>'btn btn-danger','role'=>'button'));?></p>
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
	<?php foreach ($job['Jobplace'] as $jobplace): ?>
			<td><?php echo $jobplace['name']; ?></td>
	<?php endforeach;?>
	<?php foreach ($job['Jobrequirement'] as $jobrequirement): ?>
			<td><?php echo $jobrequirement['name']; ?></td>
	<?php endforeach;?>
	<?php foreach ($job['Jobtreatment'] as $jobtreatment): ?>
			<td><?php echo $jobtreatment['name']; ?></td>
	<?php endforeach;?>
            <?php echo $job['Job']['body'];?>
        </div>
    </div>
   

</div>


<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
            <h3>店舗地図</h3>
	            <div class="google-maps">
            <iframe src="<?php echo $job['Job']['map']?>" width="600" height="450" frameborder="0" style="border:0"></iframe>
            	</div>
			</div>	
		</div>

	</div>
</div>
