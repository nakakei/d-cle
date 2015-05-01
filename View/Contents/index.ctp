<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('コラム一覧', '/contents/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>



<div class="row">
	<?php foreach($contents as $content):?>
	<div class="col-sm-6 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h2 class="text-center">
                【<?php echo $this->Html->link($content['Content']['title'],array('action'=>'view',$content['Content']['id']));?>】
			</h2>
            <?php
			 if(!$content['Contentphoto']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/contentphoto/photo/'. $content['Contentphoto']['0']['id'] .'/thumb300_'.$content['Contentphoto']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'contents','action'=>'view',$content['Content']['id']),'class'=>'thumbnail'));
			 }else{
				echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'contents','action'=>'view',$content['Content']['id']))); 
			 };
			?>
			<hr/>
            
            <?php 
            	$str = $content['Content']['body'];
            	$str = strip_tags($str);
            	echo mb_strimwidth($str, 0, 400, "…",'utf8');
            ?>
            
			<p style="text-align: right;"><?php echo $this->Html->link('詳しく見る',array('action'=>'view',$content['Content']['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p>
            <p></p>
            
            
            <p>タグ：
			<?php foreach($content['Contenttag'] as $tag):?>
            <a href="<?php echo '/contenttags/view/'.$tag['id'];?>">
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


