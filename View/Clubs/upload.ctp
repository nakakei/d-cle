<pre><?php print_r($data);?></pre>

<?php echo $this->Form->create('Club',array('type' => 'file')); ?>
<!-- nameフィールドもあると仮定します。 -->
<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('Attachment.0.photo', array('type' => 'file')); ?>
<!-- インデックス0をつけてモデル名を指定してあげるのがポイント -->
<?php echo $this->Form->hidden('Attachment.0.model', array('value'=>'club'));?>
<!-- ファイルを選択するボタン -->
<?php //echo $this->Form->input('Image.0.photo_person', array('type' => 'file')); ?>
<!-- 送信ボタン -->
<?php echo $this->Form->submit('Send');?>
<?php echo $this->Form->end()  ?>