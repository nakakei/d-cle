<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('店舗一覧', '/shops/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>



<div class="row">
	<?php foreach($shops as $shop):?>
	<div class="col-sm-6 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
				<div class="row">
                    <div class="col-xs-6">

                    <?php
                     if(!$shop['Shopphoto']['0']['photo'] == null){ 
                        echo $this->Html->image('../files/shopphoto/photo/'. $shop['Shopphoto']['0']['id'] .'/thumb300_'.$shop['Shopphoto']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'shops','action'=>'view',$shop['Shop']['id']),'class'=>'thumbnail'));
                     }else{
                        echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'shops','action'=>'view',$shop['Shop']['id']))); 
                     };
                    ?>
                    </div>
                    <div class="col-xs-6">
                            <h2 style="margin-top:0">
                                <?php echo $this->Html->link($shop['Shop']['title'],array('action'=>'view',$shop['Shop']['id']));?>
                            </h2>
                            
                        <hr style="margin:0px;"/>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>アクセス</th>
                              <th><?php echo $shop['Shop']['acces'];?></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>総座席</td>
                              <td><?php echo $shop['Shop']['seat']?></td>
                            </tr>
                            <tr>
                              <td>平均予算</td>
                              <td><?php echo $shop['Shop']['money']?></td>
                            </tr>
                          </tbody>
                        </table>
                        
                        
                            
                            
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
						<p>ジャンル：
                            <?php foreach($shop['Shopgenre'] as $tag):?>
                            <a href="<?php echo '/shopgenrea/view/'.$tag['id'];?>">
                            <span class="label label-danger"><?php  echo $tag['name'];?></span>
                            </a>
                
                            <?php endforeach;?>
						</p>
                    </div>
                    <div class="col-xs-6">
						<p>
                            場所：
                            <?php foreach($shop['Shopplace'] as $tag):?>
                            <a href="<?php echo '/shopplaces/view/'.$tag['id'];?>">
                            <span class="label label-danger"><?php  echo $tag['name'];?></span>
                            </a>
                
                            <?php endforeach;?>
						</p>
                    </div>
                </div>
            
			<hr/>
            <p><?php echo $shop['Shop']['word'];?></p>
            
           <p class="text-right"><?php echo $this->Html->link('詳しく見る',array('action'=>'view',$shop['Shop']['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p>
           

   			
            
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



