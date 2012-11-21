<header> 
    <?= anchor
        ('curl/',
            '.',
            array(  'title' => 'Retourner vers l\'accueil',
                    'hreflang' => 'fr')
        )
    ?>
</header>
<ol>
    <?php foreach ($liens as $lien): ?>
        <li class="afficher">
            <h3>
                <?= $lien->titre ?>
            </h3>
            <?= '<img width="200px" src="' . $lien->url_img . '" />' ?>
            <p class="lien"><?= $lien->url ?></p>
            <p><?= $lien->description ?></p>
        </li>
        <div>
            <?= anchor('curl/supprimer/'.$lien->id_lien, 'Supprimer', array('title'=>'Supprimer ce message', 'class' => 'submit')) ?>
            <?= anchor('curl/modifier/'.$lien->id_lien, 'Modifier', array('title'=>'Modifier', 'class' => 'submit')) ?>
        </div>
    <?php endforeach; ?>
</ol>