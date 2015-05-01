<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
				<?php 
                    $this->Html->addCrumb('EVE祭情報', '/home/eve');
                    echo $this->Html->getCrumbs(' > ', array(
                    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
                ?>
			</div>	
		</div>

	</div>
</div>





<h1 class="text-center">【EVE祭情報】</h1>


<p class="text-center">
	<?php echo $this->Html->image('eve.jpg',array('style'=>'width:100%',/*'url'=>array('controller'=>'festivals')*/));?>
</p>

<div class="container marketing" style="margin-top:30px;">



  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-sm-6 col-xs-6 text-center">
      <?php echo $this->Html->image('eve.jpg',array('class'=>'img-circle','url'=>array('controller'=>'festivals'),'style'=>'width:140px;height:140px;'))?>
      <h2>EVE出店一覧</h2>
      <p>出店団体、出店物を検索orテントMAPを掲載</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'festivals'),array('class'=>'btn btn-default'));?></p>
    </div>
    <div class="col-sm-6 col-xs-6 text-center">
      <?php echo $this->Html->image('1aa0962.jpeg',array('class'=>'img-circle','url'=>array('controller'=>'festivals','action'=>'stage'),'style'=>'width:140px;height:140px;'))?>
      <h2>ステージ一覧</h2>
      <p>ステージのタイムテーブルを表示</p>
      <p><?php echo $this->Html->link('詳しく',array('controller'=>'festivals','action'=>'stage'),array('class'=>'btn btn-default'));?></p>
    </div>
　</div>


</div>