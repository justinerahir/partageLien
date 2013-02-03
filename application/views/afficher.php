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
            <img src="<?= $lien->url_img; ?>"/>
            <div class="infos">
                <h2><?= $lien->titre; ?></h2>
                <h3>Description&nbsp;: </h3>
                <p><?= $lien->description; ?></p>
                <p>
                     <strong>Lien du site&nbsp;:</strong> <a href="<?= $lien->url; ?>" title="Visiter le site <?= $lien->titre; ?>"><?= $lien->url; ?></a>  
                </p>
            </div>
            <div class="actions">
                <?= anchor('curl/supprimer/'.$lien->id_lien, 'Supprimer', array('title'=>'Supprimer ce message', 'class' => 'submit')) ?>
                <?= anchor('curl/modifier/'.$lien->id_lien, 'Modifier', array('title'=>'Modifier', 'class' => 'submit')) ?>
            </div>
        </li>
    <?php endforeach; ?>
</ol>