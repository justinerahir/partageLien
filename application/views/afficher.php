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
            <h2><?= $lien->titre; ?></h2>
            <h3><?= $lien->description; ?></h3>
            <a href="<?= $lien->url; ?>" title="Visiter le site <?= $lien->titre; ?>"><?= $lien->url; ?></a>
        </li>
        <div>
            <?= anchor('curl/supprimer/'.$lien->id_lien, 'Supprimer', array('title'=>'Supprimer ce message', 'class' => 'submit')) ?>
            <?= anchor('curl/modifier/'.$lien->id_lien, 'Modifier', array('title'=>'Modifier', 'class' => 'submit')) ?>
        </div>
    <?php endforeach; ?>
</ol>

<img src="<?= $lien->url_img; ?>"/>