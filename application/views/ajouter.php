<div class="formUrl"<>
<?= form_open('curl/choisir'); ?>
<?php 
	 	$data = array(
	              'name'        => 'champ',
	              'value'          => 'Votre url',
	              'class' => 'url',
	              'maxlength'  => '75',
	              'size' => '30'
	              );

		echo form_input($data);
	
		echo form_submit('mysubmit', 'Go !'); 
	?>
<?= form_close() ?>
</div>