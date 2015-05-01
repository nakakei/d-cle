<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('求人一覧', '/jobs/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>



<div class="row">
	<?php foreach($jobs as $job):?>
	<div class="col-sm-6 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
                <div class="row">
                    <div class="col-xs-6">
                        <h2 class="text-center" style="font-size:25px;">
                            【<?php echo $this->Html->link($job['Job']['title'],array('action'=>'view',$job['Job']['id']));?>】
                        </h2>
                    <?php
                         if(!$job['Jobphoto']['0']['photo'] == null){ 
                            echo $this->Html->image('../files/jobphoto/photo/'. $job['Jobphoto']['0']['id'] .'/thumb300_'.$job['Jobphoto']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'jobs','action'=>'view',$job['Job']['id']),'class'=>'thumbnail'));
                         }else{
                            echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'jobs','action'=>'view',$job['Job']['id']))); 
                         };
                    ?>


                        <?php foreach($job['Jobrequirement'] as $tag):?>
                        <p style="display:inline-block;font-size:16px;">
                            <a href="<?php echo '/jobrequirements/view/'.$tag['id'];?>">
                            <span class="label label-success"><?php  echo $tag['name'];?></span>
                            </a>
                        </p>
                        <?php endforeach;?>

                        
                        
                        <?php foreach($job['Jobtreatment'] as $tag):?>
                        <p style="display:inline-block;font-size:16px;">
                            <a href="<?php echo '/jobtreatments/view/'.$tag['id'];?>">
                            <span class="label label-success"><?php  echo $tag['name'];?></span>
                        	</a>
                        </p>
                        <?php endforeach;?>
                        <p>
                        場所：
                        <?php foreach($job['Jobplace'] as $tag):?>
                        <a href="<?php echo '/jobplaces/view/'.$tag['id'];?>" style="font-size:16px;">
                        <span class="label label-success"><?php  echo $tag['name'];?></span>
                        </a>
            
                        <?php endforeach;?>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <p style="text-align: right;margin:20px 0 10px 0;"><?php echo $this->Html->link('お祝い金5000円',array('action'=>'giftmoney'),array('class'=>'btn btn-danger','role'=>'button'));?></p>
                        <hr style="margin:0px;"/>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>概要</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>時給</td>
                              <td><?php echo h($job['Job']['money']); ?>円～</td>
                            </tr>
                            <tr>
                              <td>勤務時間</td>
                              <td><?php echo h($job['Job']['parttime']); ?></td>
                            </tr>
                            <tr>
                              <td>アクセス</td>
                              <td><?php echo h($job['Job']['acces']); ?></td>
                            </tr>
                          </tbody>
                        </table>
                        <hr/>
                    </div>
                </div>
            
            <div class="row">
            	<div class="col-xs-6"><p><?php echo $this->Html->link('詳しく見る',array('action'=>'view',$job['Job']['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p></div>
            	<div class="col-xs-6"><p class="text-right"><?php echo $this->Html->link('応募する',array('action'=>'contact',$job['Job']['id']),array('class'=>'btn btn-danger','role'=>'button'));?></p></div>
            </div>
			

   			
            
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

