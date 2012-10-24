<div class="choisir">
     <?= form_open('curl/ajouterDB'); ?>
    
    <?php $data = array(    'name'    => 'titre',
                            'value'   => $titreSite
                        );

        echo form_input($data);
    ?>
    <?php $data = array(    'name'    => 'description',
                            'value'   => $description
                        );

        echo form_textarea($data);
    ?>
    <?php $data = array(    'name'    => 'url',
                            'value'   => $url
                        );

        echo form_input($data);
    ?>
    <p>Quelle image voulez-vous?</p>
    <div class="formChoisir">
            <?php foreach($lienImg as $img): ?>
                <?= form_radio(array(   'name'  => 'img',
                                        'value' => $img,
                                        'class' => 'radio'))?> 
                <?= '<img width="10%" src="'.$img.'" />'; ?>
            <?php endforeach; ?>
            <?= form_submit('mysubmit', 'Poster'); ?>
        <?= form_close() ?>
    </div>
</div>