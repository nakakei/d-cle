
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('お問い合わせ', '/home/form');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>
		</div>

	</div>
</div>



<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
            <h1>お問い合わせ</h1>
				<?php 
					echo $this->Form->create(false,array('role'=>'form'));
				?>
                
				<div class="form-group">
				<?php 
					echo $this->Form->label('name',null,array('class'=>'exampleInputName1'));
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
					echo $this->Form->label('body',null,array('class'=>'exampleInputBody1'));
					echo $this->Form->input('body',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'問い合わせ内容','type'=>'textarea'));
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
