<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('食レポ一覧', '/foods/index');
	$this->Html->addCrumb($food['Food']['title'],'/foods/view/'.$food['Food']['id']);
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h1 class="text-center">
                【<?php echo $this->Html->link($food['Food']['title'],array('action'=>'view',$food['Food']['id']));?>】
			</h1>
            
            <?php echo $food['Food']['body'];?>
            
            
            <hr/>
            
            <p>地域：<?php echo $this->Html->link($food['Foodplace']['title'], array('controller' => 'foodplaces', 'action' => 'view', $food['Foodplace']['id'])); ?></p>
            
            <p>タグ：
			<?php foreach($food['Foodtag'] as $tag):?>
            <a href="<?php echo 'foodtags/view/'.$tag['id'];?>">
            <span class="label label-danger"><?php  echo $tag['name'];?></span>
            </a>

			<?php endforeach;?>
            </p>
            
            </div>
		</div>

	</div>

</div>

<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
				<h3>共有</h3>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="d_cle_" data-text="【食レポ：<?php echo $title_for_layout; ?>】" data-lang="ja">ツイート</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    			<div class="fb-like" data-href="http://<?php print($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
			</div>	
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
            	<h3>場所</h3>
	            <div class="google-maps">
            <iframe src="<?php echo $food['Food']['map']?>" width="600" height="450" frameborder="0" style="border:0"></iframe>
            	</div>
			</div>	
		</div>

	</div>
</div>
