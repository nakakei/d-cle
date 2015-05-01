<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('タグ検索', '/snaptags/index');
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
                
                <h1 class="text-center">タグ検索：<?php echo $snaptag['Snaptag']['name'];?></h1>

			</div>
		</div>
    </div>

</div>



<?php if (!empty($snaptag['Snap'])): ?>
<div class="row">
	<?php foreach ($snaptag['Snap'] as $snap): ?>
	<div class="col-sm-4 col-xs-6 text-center">

            <?php
			 if(!$snap['Snapphoto']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/snapphoto/photo/'.$snap['Snapphoto']['0']['id'].'/thumb300_'.$snap['Snapphoto']['0']['photo'],array(
				  	'url'=>array('controller'=>'snaps','action'=>'view'.'/'.$snap['id']),
					'data-src'=>'holder.js/100%x180',
					'alt'=>'100%x180',
					'class'=>'thumbnail',
					'style'=>'margin-bottom:0;max-width:100%;'
				  ));
			 }else{
				echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'snaps','action'=>'view',$snap['Snap']['id']))); 
			 };
			?>
                  <ul class="list-group">
                    <a href="<?php echo 'snaps/view/'.$snap['id'];?>">
                    	<li class="list-group-item"><?php echo $snap['name'];?></li>
                    </a>
                    <li class="list-group-item"><?php echo $snap['university'];?><?php echo $snap['undergraduate'];?></li>
                  </ul>
            
            
            
			<p style="text-align: right;">
			<?php echo $this->Html->link('詳しく見る',array('contorller'=>'snap','action'=>'view',$snap['id']),array('class'=>'btn btn-primary','role'=>'button'));?>
            </p>



</div>

<?php endforeach;?>
<?php endif; ?>