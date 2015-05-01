
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
				<?php 
                    $this->Html->addCrumb('求人一覧', '/jobs/index');
                    $this->Html->addCrumb($job['Job']['title'],'/jobs/view/'.$job['Job']['id']);
                    $this->Html->addCrumb($job['Job']['title'].'の応募申請', '/jobs/contact'.$job['Job']['id']);
                    echo $this->Html->getCrumbs(' > ', array(
                    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
                ?>
			</div>
		</div>

	</div>
</div>



<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
            <h1>応募申請</h1>

				<?php 
					echo $this->Form->create('Contact',array('role'=>'form'));
				?>
                
				<div class="form-group">
				<?php 
					echo $this->Form->label('名前',null,array('class'=>'exampleInputName1'));
					echo $this->Form->input('name',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'name'));
				?>
                </div>
                
                <div class="form-group">
				
                <?php	
					echo $this->Form->label('email',null,array('class'=>'exampleInputEmail1'));
					echo $this->Form->input('email',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'info@example.com'));
				?>
                </div>
                <div class="form-group">
				<?php
					echo $this->Form->label('電話',null,array('class'=>'exampleInputBody1'));
					echo $this->Form->input('tel',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'00000000000'));
				?>
                </div>
                <?php

					echo $this->Form->button('送信',array('type'=>'submit','class'=>'btn btn-primary'));
					echo $this->Form->end();
                ?>

            </div>
		</div>


	</div>
</div>
