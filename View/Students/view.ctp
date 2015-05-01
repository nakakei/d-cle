<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('すご大一覧', '/students/index');
	$this->Html->addCrumb($student['Student']['title'],'/students/view/'.$student['Student']['id']);
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>			</div>	
		</div>

	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="thumbnail">
			<div class="caption">
			<h1 class="text-center">
                【<?php echo $this->Html->link($student['Student']['title'],array('action'=>'view',$student['Student']['id']));?>】
			</h1>
            <?php
			 if(!$student['Studentphoto']['0']['photo'] == null){ 
			 	echo $this->Html->image('../files/studentphoto/photo/'. $student['Studentphoto']['0']['id'] .'/thumb300_'.$student['Studentphoto']['0']['photo'],array('alt'=>'First slide','url'=>array('controller'=>'students','action'=>'view',$student['Student']['id'])));
			 }else{
				echo $this->Html->image('no-image.png',array('alt'=>'First slide','url'=>array('controller'=>'students','action'=>'view',$student['Student']['id']))); 
			 };
			?>
            </div>
		</div>
	</div>
	
    <div class="col-xs-12 col-sm-6">
		<div class="thumbnail">
			<div class="caption">
		        <table class="table">
                  <thead>
                    <tr>
                      <th>プロフィール</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>名前</td>
                      <td><?php echo h($student['Student']['name']); ?></td>
                    </tr>
                    <tr>
                      <td>大学</td>
                      <td><?php echo h($student['Student']['university']); ?></td>
                    </tr>
                    <tr>
                      <td>学部</td>
                      <td><?php echo h($student['Student']['undergraduate']); ?></td>
                    </tr>
                    <tr>
                      <td>回生</td>
                      <td><?php echo h($student['Student']['schoolyear']); ?></td>
                    </tr>
                    <tr>
                      <td>Twitter</td>
                      <td><a href="<?php echo $student['Student']['twitter']; ?>"><?php echo $student['Student']['twitter']; ?></a></td>
                    </tr>
                    <tr>
                      <td>Facebook</td>
                      <td><a href="<?php echo $student['Student']['facebook']; ?>"><?php echo $student['Student']['facebook']; ?></a></td>
                    </tr>
                  </tbody>
                </table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h2 class="text-center">
				インタビュー内容
			</h2>
            
            <?php echo $student['Student']['body'];?>
            
            
            <hr/>
            
            <h3 class="text-center">
            	<?php echo $student['Student']['name'];?>さんからのメッセージ
            </h3>
            	<?php echo $student['Student']['message'];?>
                
            <h3 class="text-center"><?php echo $student['Student']['name'];?>さんからの告知</h3>
            
            	<?php echo $student['Student']['other'];?>
            
            </div>
		</div>

	</div>

</div>

