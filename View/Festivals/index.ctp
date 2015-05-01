<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
				<?php 
                    $this->Html->addCrumb('EVE祭情報', '/home/eve');
                    $this->Html->addCrumb('出店団体一覧', '/festivals');
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
    <?php echo $this->Form->input('title', array(
		'label' => array(
			'text' => '出店団体名で検索'
		),
		//'value'=>'null',
	)); ?>

    <?php echo $this->Form->input('content', array(
		'label' => array(
			'text' => '出店物で検索'
		),
		//'value'=>'null',
	)); ?>

    <?php echo $this->Form->input('place', array(
		'label' => array(
			'text' => '場所、教室（K00など）で検索'
		),
		//'value'=>'null',
	)); ?>

    <div class="form-group">
		<div class="col col-md-9 col-md-offset-3">
			<?php echo $this->Form->submit('検索', array(
				'div' => false,
				'class' => 'btn btn-primary'
			)); ?>
		</div>
	</div>
<?php echo $this->Form->end(); ?>
				<h4>画像はタップorクリックで拡大</h4>			
                <div class="row">
                    <div class="col-xs-6">
                    	<a href="/img/img007.jpg">
                            <h2>テントMAP</h2>
                            <?php echo $this->Html->image('img007.jpg',array('style'=>'width:40%'));?>
                        </a>
                    </div>
                    <div class="col-xs-6">
                    	<a href="/img/img009.jpg">
                            <h2>教室MAP</h2>
                            <?php echo $this->Html->image('img009.jpg',array('style'=>'width:40%'));?>
                        </a>
                    </div>
                </div>
            
			</div>
		</div>
	</div>
</div>




<div class="row">
	<?php foreach ($festivals as $festival): ?>
	<div class="col-sm-6 col-xs-6" style="height:350px">
		<div class="thumbnail">
			<div class="caption">
                <div class="row">
                    <div class="col-xs-12">
                        <hr style="margin:0px;"/>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th style="width:60px;height:30px">団体詳細</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>店舗名</td>
                                  <td><?php echo h($festival['Festival']['title']); ?></td>
                                </tr>
                                <tr>
                                  <td>場所</td>
                                  <td><?php echo h($festival['Festival']['place']); ?></td>
                                </tr>
                                <tr>
                                  <td>出店物</td>
                                  <td><?php echo h($festival['Festival']['content']); ?></td>
                                </tr>
                                <tr>
                              </tbody>
                            </table>
                        <hr/>
                    </div>
                </div>

            </div>
		</div>



</div>

<?php endforeach; ?>


	<ul class="pager col-xs-12">
		<?php
			echo $this->Paginator->prev('← ' . 'previous', array('class' => 'previous'), null, array('class' => 'previous'));
			echo $this->Paginator->numbers();
			echo $this->Paginator->next('next' . ' →', array('class' => 'next'), null, array('class' => 'next'));
		?>
	</ul>
</div>