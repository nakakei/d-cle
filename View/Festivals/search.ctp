<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
				<?php 
                    $this->Html->addCrumb('EVE祭情報', '/home/eve');
                    $this->Html->addCrumb('出店団体一覧', '/festivals');
					$this->Html->addCrumb('検索結果');
                    echo $this->Html->getCrumbs(' > ', array(
                    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
                ?>
			</div>	
		</div>

	</div>
</div>

<div class="row">
	<div class="col-sm-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h3 class="text-center">
                【検索結果：<?php echo $name;?>件のヒット】
			</h3>
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