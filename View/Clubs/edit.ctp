

<div class="clubs form">


 <div class="col col-xs-12">
 	
  　<?php if (!empty($news)): ?>
	<h2>イベントリスト</h2>
	<div class="thumbnail">
    	<h3>新歓用</h3>
		<table class="table">
          <thead>
            <tr>
              <th>＃</th>
              <th>タイトル</th>
              <th>日程</th>
              <th>時間</th>
              <th>場所</th>
              <th>内容</th>
            </tr>
          </thead>
          <?php foreach ($news as $new): ?>
          <tbody>
            <tr>
			<td>・</td>
			<td><?php echo $new['Event']['title']; ?></td>
			<td><?php echo date("m月d日",strtotime($new['Event']['start'])).'～' .date("d日",strtotime($new['Event']['end'])); ?></td>
			<td><?php echo  date("H:i",strtotime($new['Event']['start'])).'～' .date("H:i",strtotime($new['Event']['end'])); ?></td>
			<td><?php echo $new['Event']['place']; ?></td>
			<td><?php echo $new['Event']['body']; ?></td>
            <td><?php echo $this->Html->link('編集',array('controller'=>'events','action'=>'edit',$new['Event']['id']))?></td>
			<td></td>
			</td>
          </tbody>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <p class="text-right">
  <?php echo $this->Html->link('新歓イベントの追加',array('action'=>'clubsevent',$id),array('type'=>'button','class'=>'btn btn-primary'));?>
  </p>

　
  <?php if (!empty($events)): ?>
	<div class="thumbnail">
    	<h3>通常</h3>
		<table class="table">
          <thead>
            <tr>
              <th>＃</th>
              <th>タイトル</th>
              <th>日程</th>
              <th>時間</th>
              <th>場所</th>
              <th>内容</th>
            </tr>
          </thead>
          <?php foreach ($events as $event): ?>
          <tbody>
            <tr>
			<td>・</td>
			<td><?php echo $event['Event']['title']; ?></td>
			<td><?php echo date("m月d日",strtotime($event['Event']['start'])).'～' .date("d日",strtotime($event['Event']['end'])); ?></td>
			<td><?php echo  date("H:i",strtotime($event['Event']['start'])).'～' .date("H:i",strtotime($event['Event']['end'])); ?></td>
			<td><?php echo $event['Event']['place']; ?></td>
			<td><?php echo $event['Event']['body']; ?></td>
            <td><?php echo $this->Html->link('編集',array('controller'=>'events','action'=>'edit',$event['Event']['id']))?></td>
			<td></td>
			</td>
          </tbody>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <p class="text-right">
  <?php echo $this->Html->link('イベントの追加',array('action'=>'event',$id),array('type'=>'button','class'=>'btn btn-primary'));?>
  </p>
  </div>
  
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
	<h2>団体編集</h2>
	<?php echo $this->Form->input('id');?>
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
		),
		'beforeInput' => '<div class="input-group">',
		'afterInput' => '<span class="input-group-addon">人</span></div>'
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
		),
		'beforeInput' => '<div class="input-group">',
		'afterInput' => '<span class="input-group-addon">円</span></div>'
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


	<?php echo $this->Form->hidden('Attachment.0.id');?>
	<?php echo $this->Form->hidden('Attachment.0.model', array('value'=>'club'));?>
	<?php echo $this->Form->input('Attachment.0.photo', array(
		'label' => array(
			'text' => '写真一枚目',
		),
		'type' => 'file',
		'id'=>'exampleInputFile'
	)); ?>
    <?php
			 if(!$photo['Attachment']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/attachment/photo/'. $photo['Attachment']['0']['id'] .'/thumb300_'.$photo['Attachment']['0']['photo'],array('alt'=>'First slide'));
			 }else{
				echo $this->Html->image('no-image.png'); 
			 }
	?>

	<?php echo $this->Form->hidden('Attachment.1.id');?>
	<?php echo $this->Form->hidden('Attachment.1.model', array('value'=>'club'));?>
    <?php echo $this->Form->input('Attachment.1.photo', array(
		'label' => array(
			'text' => '写真二枚目',
		),
		'type' => 'file',
		'id'=>'exampleInputFile'
	)); ?>
    <?php
			 if(!$photo['Attachment']['1']['photo'] == null){ 
			 	echo $this->Html->image('../files/attachment/photo/'. $photo['Attachment']['1']['id'] .'/thumb300_'.$photo['Attachment']['1']['photo'],array('alt'=>'First slide'));
			 }else{
				echo $this->Html->image('no-image.png'); 
			 }
	?>
    
	<?php echo $this->Form->hidden('Attachment.2.id');?>
	<?php echo $this->Form->hidden('Attachment.2.model', array('value'=>'club'));?>
    <?php echo $this->Form->input('Attachment.2.photo', array(
		'label' => array(
			'text' => '写真三枚目',
		),
		'type' => 'file',
		'id'=>'exampleInputFile'
	)); ?>
    <?php
			 if(!$photo['Attachment']['2']['photo'] == null){ 
			 	echo $this->Html->image('../files/attachment/photo/'. $photo['Attachment']['2']['id'] .'/thumb300_'.$photo['Attachment']['2']['photo'],array('alt'=>'First slide'));
			 }else{
				echo $this->Html->image('no-image.png'); 
			 }
	?>
    



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
　$("#datepicker").datepicker({
	dateFormat:'yy-mm-dd',
	});
});
</script>