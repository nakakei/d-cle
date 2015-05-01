<div class="from">
<?php echo $this->Session->flash('auth');?>
<?php echo $this->Form->create('User',array('action'=>'login'));?>
	<fieldset>
		<legend><?php echo ('名前とパスワードを入れてください');?></legend>
        <?php echo $this->Form->input('username')?>
        <?php echo $this->Form->input('password')?>
	</fieldset>

<?php echo $this->Form->end('Login');?>



</div>