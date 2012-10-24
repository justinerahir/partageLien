<section class="choisir">
    <?= form_open('curl/remplacerDB'); ?> 
    
    <?php $data = array(    'name'    => 'titre',
                            'value'   => $unLien->titre,
                            'style'   => 'width: 200px'
                        );
    ?>
    <?= form_input($data); ?>
    
    <?php $data = array(    'name'    => 'description',
                            'value'   => $unLien->url,
                            'style'   => 'width: 300px'
                        );
    ?>
    <?= form_textarea($data);?>

    <?php $data = array(    'name'    => 'url',
                            'value'   => $unLien->description,
                            'style'   => 'width: 200px'
                        );
    ?>
    <?= form_input($data); ?>

    <div class="formChoisir">
        <?php foreach($unLien as $img): ?>
            <?= form_radio(array(   'name'  => 'img',
                                    'value' => $img,
                                    'class' => 'radio'))?> 
            <?= '<img width="10%" src="'.$img.'" />'; ?>
        <?php endforeach; ?>
            <?= form_hidden('id', $unLien->id_lien);?>
            <?= form_submit('mysubmit', 'Poster'); ?>
        <?= form_close() ?>
    </div>
</section>