<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
				<?php 
                    $this->Html->addCrumb('ステージ一覧', '/jobs/index');
                    echo $this->Html->getCrumbs(' > ', array(
                    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
                ?>
			</div>	
		</div>

	</div>
</div>


<div class="container">

    <div class="row">
        <div class="col-xs-12">
            <blockquote>
                <h1>ステージ一覧</h1>
                <small>画像をタップorクリックで拡大</small>
            </blockquote>
            
            <h3 class="text-center">イブ祭ステージタイムテーブル</h3>
            <a href="/img/img013.jpg">
                <?php echo $this->Html->image('img013.jpg',array('style'=>'width:80%;'));?>
            </a>
    
            <h3 class="text-center">ランダムステージ</h3>
            <a href="/img/rand.jpg">
                <?php echo $this->Html->image('rand.jpg',array('style'=>'width:80%'));?>
            </a>
    
            <h3 class="text-center">アウテリアステージ</h3>
            <a href="/img/stage.jpg">
                <?php echo $this->Html->image('stage.jpg',array('style'=>'width:80%'));?>
            </a>
            
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>

</div>