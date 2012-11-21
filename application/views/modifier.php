<header> 
    <?= anchor
        ('curl/',
            '.',
            array(  'title' => 'Retourner vers l\'accueil',
                    'hreflang' => 'fr')
        )
    ?>
</header>
<section class="choisir">
     <div class="site">
        <?= form_open('curl/remplacerDB'); ?> 
        
        <?php $data = array(    'name'    => 'titre',
                                'value'   => $unLien->titre,
                                'style'   => 'width: 200px'
                            );
         echo form_input($data);
        ?>
        
        
        <?php $data = array(    'name'    => 'description',
                                'value'   => $unLien->url,
                                'style'   => 'width: 300px'
                            );
            echo form_textarea($data);
        ?>

        <?php $data = array(    'name'    => 'url',
                                'value'   => $unLien->description,
                                'style'   => 'width: 200px'
                            );
            echo form_input($data);
        ?>
    
    </div>
    <p class="img">Choisissez une image </p>
    <ul class="formChoisir">
        <?php foreach($unLien as $img): ?>
        <li>
            <div class="selection">
                <?= form_radio(array(   'name'  => 'img',
                                        'value' => $img,
                                        'class' => 'radio'))?> 
            </div>
            <?= '<img width="100px" src="'.$img.'" />'; ?>
        </li>
        <?php endforeach; ?>
        <?= form_hidden('id', $unLien->id_lien);?>
    </ul>
    <div>
          <?php
            $data = array(
                  'name'            => 'submit',
                  'value'           => 'Modifier',
                  'class'           => 'submit poster',
                  );

            echo form_submit($data); 
        ?>
        <?= form_close() ?>
    </div>
</section>