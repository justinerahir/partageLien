<ol>
    <?php foreach ($liens as $lien): ?>
        <li>
            <h3>
                <?php echo $lien->titre ?>
                <?php echo anchor('curl/choisir/'.$lien->id_lien, 'Modifier', array('title'=>'Modifier')) ?>
            </h3>
            <?php  echo '<img width="75px" src="' . $lien->url_img . '" />' ?>
            <p class="lien"><?php echo $lien->url ?></p>
            <p><?php echo $lien->description ?></p>
            <?php echo anchor('curl/supprimer/'.$lien->id_lien, 'Supprimer', array('title'=>'Supprimer ce message')) ?>
        </li>
    <?php endforeach; ?>
</ol>