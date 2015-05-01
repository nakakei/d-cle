
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('コラム一覧', '/contents/index');
	$this->Html->addCrumb($content['Content']['title'],'/contents/view/'.$content['Content']['id']);
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
            <div id="main">
			<h1 class="text-center">
                【<?php echo $this->Html->link($content['Content']['title'],array('action'=>'view',$content['Content']['id']));?>】
			</h1>
            
            <?php echo $content['Content']['body'];?>
            
            
            <hr/>
            
            
            <p>タグ：
			<?php foreach($content['Contenttag'] as $tag):?>
            <a href="<?php echo '/contenttags/view/'.$tag['id'];?>">
            <span class="label label-danger"><?php  echo $tag['name'];?></span>
            </a>

			<?php endforeach;?>
            </p>
            </div>
            </div>
		</div>

	</div>

</div>

<div class="row">
	<div class="col-xs-12 col-md-12">
        <div class="thumbnail">
        	<h3>共有</h3>
<a href="https://twitter.com/share" class="twitter-share-button" data-via="d_cle_" data-lang="ja" data-text="【でぃーくる！コラム:<?php echo $title_for_layout; ?>】
<?php 
				$str = $content['Content']['body'];
            	$str = strip_tags($str);
				$str=str_replace("&nbsp;","",$str);
				$str = preg_replace('/(?:\n|\r|\r\n)/', '', $str );
				$str = mb_strimwidth($str, 0, 100, "…",'utf8');
				print $str;
?>

">ツイート</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <div class="fb-like" data-href="http://d-cle.com/home" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
        </div>
    </div>
</div>

<div class="row">

	<div class="col-sm-12 col-xs-12 thumbnail">
			<div class="caption">
                <div class="col-xs-6">
                <h2 class="text-center">著者：<?php echo $content['Member']['name'];?></h2>
                <?php
                         if(!$content['Member']['Memberphoto']['0']['photo'] == null){ 
                            echo $this->Html->image('../files/memberphoto/photo/'. $content['Member']['Memberphoto']['0']['id'] .'/thumb300_'.$content['Member']['Memberphoto']['0']['photo'],array('alt'=>'First slide','class'=>'img-circle','style'=>'margin-left: auto;margin-right: auto;display: block;max-width: 100%;height: auto;'));
                         }else{
                            echo $this->Html->image('no-image.png',array('alt'=>'First slide')); 
                         };
                ?>
                
                </div>
           
            
                <div class="col-xs-6">
                <?php
                        echo '<br>';
                        echo '<p>';
                        echo '大学：'.$content['Member']['university'];
                        echo '</p>';
                        echo '<p>';
                        echo '学部：'.$content['Member']['undergraduate'];
                        echo '</p>';
                        echo '<p>';
                        echo '役職：'.$content['Member']['job'];
                        echo '</p>';
                        echo '<p>';
                        echo '一言：'.$content['Member']['other'];
                        echo '</p>';
                ?>
                </div>
			</div>
		</div>







</div>
