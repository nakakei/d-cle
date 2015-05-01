<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('食レポ一覧', '/foods/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>



<div class="row">
	<?php foreach($foods as $food):?>
	<div class="col-sm-6 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h2 class="text-center">
                【<?php echo $this->Html->link($food['Food']['title'],array('action'=>'view',$food['Food']['id']));?>】
			</h2>
            <?php
			 if(!$food['Foodphoto']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/foodphoto/photo/'. $food['Foodphoto']['0']['id'] .'/thumb300_'.$food['Foodphoto']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'foods','action'=>'view',$food['Food']['id']),'class'=>'thumbnail'));
			 }else{
				echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'foods','action'=>'view',$food['Food']['id']))); 
			 };
			?>
			<hr/>
            
            <?php 
            	$str = $food['Food']['body'];
            	$str = strip_tags($str);
            	echo mb_strimwidth($str, 0, 200, "…",'utf8');
            ?>
            
			<p style="text-align: right;"><?php echo $this->Html->link('詳しく見る',array('action'=>'view',$food['Food']['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p>
            <p></p>
            
            <p>地域：<?php echo $this->Html->link($food['Foodplace']['title'], array('controller' => 'foodplaces', 'action' => 'view', $food['Foodplace']['id'])); ?></p>
            
            <p>タグ：
			<?php foreach($food['Foodtag'] as $tag):?>
            <a href="<?php echo 'foodtags/view/'.$tag['id'];?>">
            <span class="label label-danger"><?php  echo $tag['name'];?></span>
            </a>

			<?php endforeach;?>
            </p>
            
            </div>
		</div>



</div>

<?php endforeach;?>
	<ul class="pager col-xs-12">
		<?php
			echo $this->Paginator->prev('← ' . 'previous', array('class' => 'previous'), null, array('class' => 'previous'));
			echo $this->Paginator->numbers();
			echo $this->Paginator->next('next' . ' →', array('class' => 'next'), null, array('class' => 'next'));
		?>
	</ul>
</div>


