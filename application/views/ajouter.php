<div class="formUrl"<>
<?= form_open('curl/choisir'); ?>
<?php 
	 	$data = array(
	              'name'        	=> 'champ',
	              'class' 			=> 'url',
	              'maxlength'  		=> '75',
	              'size' 			=> '50',
	              'placeholder' 	=> 'http://www.url.be'
 	              );

		echo form_input($data);
		
		$data = array(
	              'name'       		=> 'submit',
	              'value'          	=> 'Go !',
	              'class'			=> 'submit go',
	              );

		echo form_submit($data); 
	?>
<?= form_close() ?>
</div>