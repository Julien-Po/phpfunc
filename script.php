<!--On appelle jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--On définit le type du script-->
<script type="text/javascript">
    //On crée la fonction submitData que l'on peut voir dans l'index
    function submitData(action) {
    //La fonction se jouera lorsque le document sera prêt
        $(document).ready(function() {
            //On définit l'action parce qu'on l'a passé en paramètres ainsi que le contenu de notre message
            const data = {
                action: action,
                Messages: $("#Messages").val(),
            };
    //On passe à l'ajax
    if ($messages) {
        $.ajax({
                //On lui dit d'aller chercher la destination qui est function.php
                url: 'function.php',
                //On dit à l'Ajax de se jouer en POST
                type: 'POST',
                //On lui indique que les données qu'il doit récupérer sont la const data juste au dessus
                data: data,
                //En cas de succès, on passe le paramètre display de la class css hidden message en block, ce qui l'affichera
                success: function(response) {
                    $(".hiddenMessage").css('display', 'block');
                //Une fois que la réponse a été envoyé, on reset la class, ce qui veut dire qu'on lui rend les paramètres assignés
                //en CSS avant modification par la fonction success. Donc le message redevient invisible
                    if (response.status == 1) {
                        $(".hiddenMessage")[0].reset();
                    }
                }
            });  
    }
            
        });
    }
</script>
