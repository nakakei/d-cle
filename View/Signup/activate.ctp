

<blockquote>
	<h1>本登録</h1>
</blockquote>

<?php echo $this->Form->create('User', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => array(
			'class' => 'col col-md-3 control-label'
		),
		'wrapInput' => 'col col-md-9',
		'class' => 'form-control'
	),
	'class' => 'well form-horizontal',
)); ?>
	<p style="color:#090">すべて必須項目です！</p>
    
	<?php echo $this->Form->input('password', array(
		'placeholder' => 'password',
		'label' => array(
			'text' => 'パスワードを入力',
		)
	)); ?>

    
    <?php echo $this->Form->input('password_confirm', array(
		'placeholder' => 'password',
		'label' => array(
			'text' => 'パスワードの確認',
		)
	)); ?>

	<?php 
		echo $this->Form->input('university',array(
			'label'=>array(
				'text'=>'所属大学'
			)
		));	
	?>
    <div class="form-group">
    	<div class="col-md-9 ">

    <?php
		echo $this->Form->label('sex','性別',array('class'=>'col col-sm-12'));
		echo $this->Form->radio('sex',array('1'=>'男子','2'=>'女子'),array(
				'legend'=>false,
				'class'=>'radio-inline',
			)
		);
	?>
    	</div>
    </div>

    <div class="form-group">
    	<div class="col-md-9">

    <?php 
		echo $this->Form->label('schoolyear','回生',array('class'=>'col col-sm-12'));
		echo $this->Form->select('schoolyear',array(
			1=>'一回生',
			2=>'二回生',
			3=>'三回生',
			4=>'四回生',
			5=>'五回生',
			6=>'六回生',
			7=>'七回生',
			8=>'八回生',
			),array(
				'legend'=>false,
				'class'=>'form-control',
		));
	?>
    	</div>
    </div>
    <div class="form-group">
    	<div class="col-md-9">

    <?php 
		echo $this->Form->label('住んでいる地域');
		echo $this->Form->radio('local',array('京都府'=>'京都府','大阪府'=>'大阪府','兵庫県'=>'兵庫県','奈良県'=>'奈良県','滋賀県'=>'滋賀県','その他の都道府県'=>'その他の都道府県'),array('legend'=>false));
	?>
    	</div>
    </div>
    <div class="form-group">
		<div class="col col-md-9 col-md-offset-3">
			<?php echo $this->Form->submit('送信', array(
				'div' => false,
				'class' => 'btn btn-primary'
			)); ?>
		</div>
	</div>
<?php echo $this->Form->end(); ?>