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

     <div class="site2">
        <h3>Vous pouvez modifier le titre et la description du lien ajouté.</h3>
        <?= form_open('curl/remplacerDB'); ?> 

        <p>Titre&nbsp;:</p>
        
        <?php $data = array(    'name'    => 'titre',
                                'value'   => $unLien->titre,
                                'style'   => 'width: 300px'
                            );
         echo form_input($data);
        ?>

        <p>Description&nbsp;:</p>
    
        <?php $data = array(    'name'    => 'url',
                                'value'   => $unLien->description,
                                'style'   => 'width: 300px'
                            );
            echo form_input($data);
        ?>
    
    </div>
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