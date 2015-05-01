<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('団体一覧', '/clubs/index');
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
            	<h1 class="text-center">団体一覧</h1>
				
                <h3>検索オプション</h3>

<?php echo $this->Form->create(false, array(
	'action'=>'search','type'=>'get','class'=>'navbar-form navbar-left','role'=>'search',
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => array(
			'class' => 'col col-md-3 control-label'
		),
		'wrapInput' => 'col col-md-9',
		'class' => 'form-control'
	),
	'class' => 'well form-horizontal',
	//'type' => 'file'	
)); ?>
    <?php echo $this->Form->input('clubcategory_id', array(
		'label' => array(
			'text' => 'カテゴリー選択'
		),
		'empty' => '選択してください',
		'options' => array(
			$clubcategories
		),
	)); 
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
			</div>
		</div>

	</div>
</div>
					




<div class="row">
	<?php foreach($clubs as $club):?>
	<div class="col-sm-6 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h2 class="text-center">
                【<?php echo $this->Html->link($club['Club']['name'],array('action'=>'view',$club['Club']['id']));?>】
			</h2>
            <?php
			 if(!$club['Attachment']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/attachment/photo/'. $club['Attachment']['0']['id'] .'/thumb300_'.$club['Attachment']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'clubs','action'=>'view',$club['Club']['id'])));
			 }else{
				echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'clubs','action'=>'view',$club['Club']['id']))); 
			 }
			?>
         <table class="table">
          <thead>
            <tr>
              <th>団体詳細</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="width:60px;">活動内容</td>
              <td style="width:100px;"><?php echo h($club['Club']['clibaction']); ?></td>
              <td style="width:60px;">カテゴリー</td>
              <td style="width:100px;"><?php echo h($club['Clubcategory']['name']); ?></td>
            </tr>
            <tr>
              <td>経歴</td>
              <td><?php echo h($club['Club']['career']); ?></td>
              <td>人数</td>
              <td><?php echo h($club['Club']['number']); ?>人</td>
            </tr>
            <tr>
              <td>入会締切</td>
              <td><?php echo h($club['Club']['closing']); ?></td>
              <td>活動拠点</td>
              <td><?php echo h($club['Club']['actionlocation']); ?></td>
            </tr>
          </tbody>
        </table>
			<hr/>
			<p style="text-align: right;"><?php echo $this->Html->link('詳しく見る',array('action'=>'view',$club['Club']['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p>
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
