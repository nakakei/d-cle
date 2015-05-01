<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('タグ検索', '/contenttags/index');
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
                
                <h1 class="text-center">タグ検索：<?php echo $contenttag['Contenttag']['name'];?></h1>

			</div>
		</div>
    </div>

</div>


<?php if (!empty($contenttag['Content'])): ?>
<div class="row">
	<?php foreach ($contenttag['Content'] as $content): ?>
	<div class="col-sm-6 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h2 class="text-center">
                【<?php echo $this->Html->link($content['title'],array('action'=>'view',$content['id']));?>】
			</h2>
            <?php
			 if(!$content['Contentphoto']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/contentphoto/photo/'. $content['Contentphoto']['0']['id'] .'/thumb300_'.$content['Contentphoto']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'contents','action'=>'view',$content['id'])));
			 }else{
				echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'contents','action'=>'view',$content['id']))); 
			 };
			?>
			<hr/>
            
            <?php 
            	$str = $content['body'];
            	$str = strip_tags($str);
            	echo mb_strimwidth($str, 0, 400, "…",'utf8');
            ?>
            
			<p style="text-align: right;"><?php echo $this->Html->link('詳しく見る',array('action'=>'view',$content['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p>
            <p></p>
            
                        
            </div>
		</div>


	<?php endforeach;?>
	</div>

</div>
<?php endif; ?>
