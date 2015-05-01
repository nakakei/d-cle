<h1>団体の追加</h1>

<?php echo $this->Form->create('Club', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => array(
			'class' => 'col col-md-3 control-label'
		),
		'wrapInput' => 'col col-md-9',
		'class' => 'form-control'
	),
	'class' => 'well form-horizontal',
	'type' => 'file'	
)); ?>
	

	<?php 
		echo $this->Form->input('university',array(
			'label'=>array(
				'text'=>'所属大学（学生団体やインカレの団体はその他と入力してください）'
			)
		));	
	?>
	


	<?php echo $this->Form->input('name', array(
		'placeholder' => '団体名',
		'label' => array(
			'text' => '団体名',
		)
	)); ?>
    
    
    <?php echo $this->Form->input('clubcategory_id', array(
		'label' => array(
			'text' => 'カテゴリー選択'
		),
		'empty' => '選択してください',
		'options' => array(
			$clubcategories
		),
	)); ?>
    
    <?php echo $this->Form->input('clibaction', array(
		'label' => array(
			'text' => '活動内容',
		)
	)); ?>
    
    
    <?php echo $this->Form->input('career', array(
		'label' => array(
			'text' => '経歴',
		)
	)); ?>
    <?php echo $this->Form->input('number', array(
		'label' => array(
			'text' => '団体人数',
		)
	)); ?>
    <?php echo $this->Form->input('actionday', array(
		'label' => array(
			'text' => '活動日（週2～、など）',
		)
	)); ?>
    <?php echo $this->Form->input('actionlocation', array(
		'label' => array(
			'text' => '活動拠点',
		)
	)); ?>
    <?php echo $this->Form->input('membership', array(
		'label' => array(
			'text' => '会費',
		)
	)); ?>
    <?php echo $this->Form->input('representative', array(
		'label' => array(
			'text' => '代表者名',
		)
	)); ?>

    
    <?php echo $this->Form->input('email', array(
		'label' => array(
			'text' => '団体連絡先（メールアドレス）',
		)
	)); ?>
    
    
    
    <?php echo $this->Form->input('closing', array(
		'label' => array(
			'text' => '入会締切',
		),
		'type' => 'text',
		'id'=>'datepicker'
	)); ?>
    
    
	<?php echo $this->Form->input('body', array(
		'label' => array(
			'text' => '紹介文',
		),
		'id'=>'area2',
		'class'=>'form-control'
	)); ?>

    
    
    
    
    
	<?php echo $this->Form->hidden('Attachment.0.model', array('value'=>'club'));?>
	<?php echo $this->Form->input('Attachment.0.photo', array(
		'label' => array(
			'text' => '写真一枚目（写真の名前が日本語だとエラーが出る場合があります）',
		),
		'type' => 'file',
		'id'=>'exampleInputFile'
	)); ?>

    
	<?php echo $this->Form->hidden('Attachment.1.model', array('value'=>'club'));?>
    <?php echo $this->Form->input('Attachment.1.photo', array(
		'label' => array(
			'text' => '写真二枚目',
		),
		'type' => 'file',
		'id'=>'exampleInputFile'
	)); ?>
    
	<?php echo $this->Form->hidden('Attachment.2.model', array('value'=>'club'));?>
    <?php echo $this->Form->input('Attachment.2.photo', array(
		'label' => array(
			'text' => '写真三枚目',
		),
		'type' => 'file',
		'id'=>'exampleInputFile'
	)); ?>
    
    



    <div class="form-group">
		<div class="col col-md-9 col-md-offset-3">
			<?php echo $this->Form->submit('送信', array(
				'div' => false,
				'class' => 'btn btn-primary'
			)); ?>
		</div>
	</div>
<?php echo $this->Form->end(); ?>




