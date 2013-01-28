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
    <div class="choisir-img">
        <div id="submit">
            <?= form_open('curl/ajouterDB'); ?>
            <button id="previous"><</button> <button id="next">></button>
            <?php
                $data = array(
                      'name'            => 'submit',
                      'value'           => 'Choisir',
                      'class'           => 'submit choisir',
                      );

                echo form_submit($data); 
            ?>
            <?= form_close() ?>
        </div>
        <ul class="formChoisir">
                <?php foreach($lienImg as $img): ?>
                <li>
                    <div class="selection"><?= form_radio(array(   'name'  => 'img',
                                            'value' => $img,
                                            'class' => 'radio',
                                            'checked' => 'checked'))?> 
                    </div>
                    <?= '<img width="150px" src="'.$img.'" />'; ?>
                </li>
                <?php endforeach; ?>
        </ul>
    </div>
    <div class="site">
        <?= form_open('curl/ajouterDB'); ?>
        <?php $data = array(    'name'    => 'titre',
                                'value'   => $titreSite,
                                'size'    => '60',
                                'class'   => 'titre'                     
                                );

            echo form_input($data);
        ?>
        <?php $data = array(    'name'    => 'description',
                                'value'   => $description,
                                'size'    => '80',
                                'class'   => 'desc'  
                            );

            echo form_input($data);
        ?>
        <?php $data = array(    'name'    => 'url',
                                'value'   => $url,
                                'size'    => '60',
                                'class'   => 'url'  
                            );

            echo form_input($data);
        ?>
    </div>
</section>