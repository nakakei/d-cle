


<?php echo $this->Form->create('Event', array(
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



	<?php echo $this->Form->input('title', array(
		'placeholder' => 'イベント名',
		'label' => array(
			'text' => 'イベント名',
		)
	)); ?>
    <?php echo $this->Form->input('place', array(
		'placeholder' => '場所',
		'label' => array(
			'text' => 'イベントの場所',
		)
	)); ?>
    <?php echo $this->Form->input('eventcategory_id', array(
		'label' => array(
			'text' => 'カテゴリー選択'
		),
		'empty' => '選択してください',
		'options' => array(
			$eventcategories
		),
	)); ?>
    
    
    <?php echo $this->Form->input('body', array(
		'label' => array(
			'text' => 'イベント紹介文',
		),
		'id'=>'area2',
		'class'=>'form-control'
	)); ?>
    
    
    <div class="form-inline">
    <?php echo $this->Form->input('day', array(
		'label' => array(
			'text' => 'この日程から',
		),
		'class'=>'datepicker'
	)); ?>
    
    <?php echo $this->Form->input('time', array(
		'label' => array(
			'text' => '時間',
		),
		'class'=>'timepicker'
	)); ?>
	</div>
    
    <div class="form-inline">
    <?php echo $this->Form->input('endday', array(
		'label' => array(
			'text' => 'まで',
		),
		'class'=>'datepicker1'
	)); ?>
    <?php echo $this->Form->input('endtime', array(
		'label' => array(
			'text' => 'まで',
		),
		'class'=>'timepicker1'
	)); ?>
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


<script type="text/javascript">
$(function(){
　$(".datepicker").datepicker({
	dateFormat:'yy-mm-dd',
	});
	$(".datepicker1").datepicker({
	dateFormat:'yy-mm-dd',
	});
});
</script>

<script type="text/javascript">
$('.timepicker').timepicker({
});
$('.timepicker1').timepicker({
});
</script>