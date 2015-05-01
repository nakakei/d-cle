<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('タグ検索', '/foodplaces/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>



<div class="row">

	<div class="col-sm-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
                
                <h1 class="text-center">地域検索：<?php echo $foodplace['Foodplace']['title'];?></h1>

			</div>
		</div>
    </div>

</div>

<?php if (!empty($foodplace['Food'])): ?>
<div class="row">
	<?php foreach ($foodplace['Food'] as $food): ?>
	<div class="col-sm-6 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h2 class="text-center">
                【<?php echo $this->Html->link($food['title'],array('action'=>'view',$food['id']));?>】
			</h2>
            <?php
			 if(!$food['Foodphoto']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/foodphoto/photo/'. $food['Foodphoto']['0']['id'] .'/thumb300_'.$food['Foodphoto']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'foods','action'=>'view',$food['id']),'class'=>'thumbnail'));
			 }else{
				echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'foods','action'=>'view',$food['id']))); 
			 };
			?>
			<hr/>
            
            <?php 
            	$str = $food['body'];
            	$str = strip_tags($str);
            	echo mb_strimwidth($str, 0, 200, "…",'utf8');
            ?>

			<p style="text-align: right;"><?php echo $this->Html->link('詳しく見る',array('controller'=>'foods','action'=>'view',$food['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p>
            <p></p>
            
            
            <p>地域：<?php echo $this->Html->link($food['Foodplace']['title'], array('controller' => 'foodplaces', 'action' => 'view', $food['Foodplace']['id'])); ?></p>
            <p>タグ：
			<?php foreach($food['Foodtag'] as $tag):?>
            <a href="<?php echo '/Foodtags/view/'.$tag['id'];?>">
            <span class="label label-danger"><?php  echo $tag['name'];?></span>
            </a>

			<?php endforeach;?>
            </p>
            
            
            
            
            </div>
		</div>
	</div>
	<?php endforeach;?>


</div>


<?php endif; ?>
