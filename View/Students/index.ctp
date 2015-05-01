<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('コラム一覧', '/students/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>



<div class="row">
	<?php foreach($students as $student):?>
	<div class="col-sm-6 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h2 class="text-center">
                【<?php echo $this->Html->link($student['Student']['title'],array('action'=>'view',$student['Student']['id']));?>】
			</h2>
            <?php
			 if(!$student['Studentphoto']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/studentphoto/photo/'. $student['Studentphoto']['0']['id'] .'/thumb300_'.$student['Studentphoto']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'students','action'=>'view',$student['Student']['id'])));
			 }else{
				echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'students','action'=>'view',$student['Student']['id']))); 
			 };
			?>
			<hr/>
            
            <?php 
            	$str = $student['Student']['body'];
            	$str = strip_tags($str);
            	echo mb_strimwidth($str, 0, 200, "…",'utf8');
            ?>
            
			<p style="text-align: right;"><?php echo $this->Html->link('詳しく見る',array('action'=>'view',$student['Student']['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p>
            <p></p>
            
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


