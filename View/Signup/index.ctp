
<blockquote>
	<h1>新規登録</h1>
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
	
	<?php echo $this->Form->input('username', array(
		'placeholder' => 'name',
		'label' => array(
			'text' => 'ユーザーネームを入力',
		)
	)); ?>

    
    <?php echo $this->Form->input('email', array(
		'placeholder' => 'example@example',
		'label' => array(
			'text' => 'メールアドレス',
		)
	)); ?>
    
    <?php echo $this->Form->input('email_confirm', array(
		'placeholder' => 'example@example',
		'label' => array(
			'text' => 'メールアドレス確認',
		)
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
