<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('スナップ一覧', '/snaps/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>
    	<div class="row">
        	<div class="col-xs12">
				<h1 class="text-center"><span class="glyphicon glyphicon-picture"></span>同志社大学スナップ</h1>
            </div>
        </div>


<div class="row">
	<?php foreach($snaps as $snap):?>
	<div class="col-sm-4 col-xs-6 text-center">

            <?php
			 if(!$snap['Snapphoto']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/snapphoto/photo/'.$snap['Snapphoto']['0']['id'].'/thumb300_'.$snap['Snapphoto']['0']['photo'],array(
				  	'url'=>array('controller'=>'snaps','action'=>'view'.'/'.$snap['Snap']['id']),
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
                    <a href="<?php echo 'snaps/view/'.$snap['Snap']['id'];?>">
                    	<li class="list-group-item"><?php echo $snap['Snap']['name'];?></li>
                    </a>
                    <li class="list-group-item"><?php echo $snap['Snap']['university'];?><?php echo $snap['Snap']['undergraduate'];?></li>
                  </ul>
            
            <p>タグ：
			<?php foreach($snap['Snaptag'] as $tag):?>
            <a href="<?php echo '/snaptags/view/'.$tag['id'];?>">
            <span class="label label-danger"><?php  echo $tag['name'];?></span>
            </a>

			<?php endforeach;?>
            </p>
            
            
			<p style="text-align: right;">
			<?php echo $this->Html->link('詳しく見る',array('action'=>'view',$snap['Snap']['id']),array('class'=>'btn btn-primary','role'=>'button'));?>
            </p>



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


