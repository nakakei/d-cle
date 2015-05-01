<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('メンバー紹介', '/members/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>


	<?php foreach($members as $member):?>
<div class="row">

	<div class="col-sm-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
                <div class="col-xs-6">
                <?php
                    if($member['Member']['id']%2==1){
                        echo '<h2 class="text-center">';
                        echo '【';
                        echo $member['Member']['name'];
                        echo '】';
                        echo '</h2>';
                    }
                ?>
                <?php
                    if($member['Member']['id']%2==1){
                         if(!$member['Memberphoto']['0']['photo'] == null){ 
                            echo $this->Html->image('../files/memberphoto/photo/'. $member['Memberphoto']['0']['id'] .'/thumb300_'.$member['Memberphoto']['0']['photo'],array('alt'=>'First slide','class'=>'img-circle','style'=>'margin-left: auto;margin-right: auto;display: block;max-width: 100%;height: auto;'));
                         }else{
                            echo $this->Html->image('no-image.png',array('alt'=>'First slide')); 
                         };
                    }else{
                        echo '<br>';
                        echo '<p>';
                        echo '大学：'.$member['Member']['university'];
                        echo '</p>';
                        echo '<p>';
                        echo '学部：'.$member['Member']['undergraduate'];
                        echo '</p>';
                        echo '<p>';
                        echo '役職：'.$member['Member']['job'];
                        echo '</p>';
                        echo '<p>';
                        echo '一言：'.$member['Member']['other'];
                        echo '</p>';
                    }
                ?>
                
                </div>
           
            
                <div class="col-xs-6">
                <?php
                    if($member['Member']['id']%2==0){
                        echo '<h2 class="text-center">';
                        echo '【';
                        echo $member['Member']['name'];
                        echo '】';
                        echo '</h2>';
                    }
                ?>
                <?php
                    if($member['Member']['id']%2==0){
                         if(!$member['Memberphoto']['0']['photo'] == null){ 
                            echo $this->Html->image('../files/memberphoto/photo/'. $member['Memberphoto']['0']['id'] .'/thumb300_'.$member['Memberphoto']['0']['photo'],array('alt'=>'First slide','class'=>'img-circle','style'=>'margin-left: auto;margin-right: auto;display: block;max-width: 100%;height: auto;'));
                         }else{
                            echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'members','action'=>'view',$member['Member']['id']))); 
                         };
                    }else{
                        echo '<br>';
                        echo '<p>';
                        echo '大学：'.$member['Member']['university'];
                        echo '</p>';
                        echo '<p>';
                        echo '学部：'.$member['Member']['undergraduate'];
                        echo '</p>';
                        echo '<p>';
                        echo '役職：'.$member['Member']['job'];
                        echo '</p>';
                        echo '<p>';
                        echo '一言：'.$member['Member']['other'];
                        echo '</p>';
                    }
                ?>
                </div>
			</div>
		</div>
    </div>







</div>

<?php endforeach;?>


<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
            	<h2>メンバー募集してます！！</h2>
                <p>興味ある方は<?php echo $this->Html->link('お問い合わせ',array('controller'=>'home','action'=>'form'));?>から</p>
			</div>	
		</div>

	</div>
</div>



