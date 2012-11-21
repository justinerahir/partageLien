$(function(){
    //selection des images
    var $images = $(".formChoisir li"); 

    //rajoute attribut checked avec valeur checked au bouton radio du premier input
    $images.first().children('ul').children('input').attr("checked","checked"); 

    //cache les images sauf la première
    $images.not(':first').hide();

    //cache les boutons radio
    $(".selection").hide();

    //Au clique sur button next, lance function switchNext
    $("#next").on("click", imageSuivante);

    //Au clique sur button previous, lance function switchPrevious
    $("#previous").on("click", imagePrecedente);

    //function qui pase à l'image suivante
    function imageSuivante(e)
    {
        e.preventDefault();
        var $imgSuivante = $images.filter(':visible').next("li");
        
        if( $imgSuivante.size() == 0 )
            $imgSuivante = $images.first();
        
        $images.filter(':visible').fadeOut('fast', function(){
            $imgSuivante.fadeIn('fast');
        });
        
        //ajoute attribut checked avec valeur checked au bouton radio
        $imgSuivante.children('div').children('input').attr("checked", "checked");
    }

    //function qui passe à l'image précédente
    function imagePrecedente(e){
            e.preventDefault();
            var $imgSuivante = $images.filter(':visible').prev("li");
            
            if( $imgSuivante.size() == 0 )
                $imgSuivante = $images.last();
            
            $images.filter(':visible').fadeOut('fast', function(){
                $imgSuivante.fadeIn('fast');
            });
            
            //ajoute attribut checked avec valeur checked au bouton radio
            $imgSuivante.children('div').children('input').attr("checked", "checked");
    }
});

