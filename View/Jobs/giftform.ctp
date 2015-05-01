
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('祝い金お申込みフォーム', '/jobs/giftform');
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
					echo $this->Form->label('お名前',null,array('class'=>'exampleInputName1'));
					echo $this->Form->input('name',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'name'));
				?>
                </div>
                
                <div class="form-group">
				
                <?php	
					echo $this->Form->label('学籍番号',null,array('class'=>'exampleInputEmail1'));
					echo $this->Form->input('number',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'00000000'));
				?>
                </div>
                <div class="form-group">
				<?php
					echo $this->Form->label('メールアドレス',null,array('class'=>'exampleInputBody1'));
					echo $this->Form->input('email',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'info@example.com'));
				?>
                </div>
                <div class="form-group">
				<?php
					echo $this->Form->label('採用店舗名',null,array('class'=>'exampleInputBody1'));
					echo $this->Form->input('shop',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>''));
				?>
                </div>
                <div class="form-group">
				<?php
					echo $this->Form->label('口座契約者名',null,array('class'=>'exampleInputBody1'));
					echo $this->Form->input('kname',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'name'));
				?>
                </div>
                <div class="form-group">
				<?php
					echo $this->Form->label('銀行名、ゆうちょ銀行など ',null,array('class'=>'exampleInputBody1'));
					echo $this->Form->input('bank',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>'name'));
				?>
                </div>
                <div class="form-group">
				<?php
					echo $this->Form->label('店番号 ',null,array('class'=>'exampleInputBody1'));
					echo $this->Form->input('tnumber',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>''));
				?>
                </div>
                <div class="form-group">
				<?php
					echo $this->Form->label('口座番号',null,array('class'=>'exampleInputBody1'));
					echo $this->Form->input('knumber',array('label'=>false,'class'=>'form-control','div'=>false,'placeholder'=>''));
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
