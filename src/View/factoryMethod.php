<?php
/**
 * User: helio.dantas
 * Date: 12/04/2019
 * Time: 21:33
 **/
require 'header.php' ?>



<div class="row">
    <div class="col-sm">
        <form action="/teste/factory" method="post">
            <div id = 'LiuKang2' class="card border-primary mb-2" style="max-width: 10rem;">
                <div class="card-body text-primary">
                    <img width="80px" src="public/img/LiuKang.jpg">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" style="visibility: hidden;" name="personagem" id="LiuKang"
                               value="LiuKang">

                    </div>
                </div>
            </div>

            <div id = 'SubZero2'class="card border-primary mb-2" style="max-width: 10rem;">
                <div class="card-body text-primary">
                    <img width="80px" src="public/img/SubZero.jpg">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" style="visibility: hidden;" name="personagem" id="SubZero"
                               value="SubZero">
                    </div>
                </div>
            </div>

            <div id = 'Scorpin2' class = "card border-primary mb-2" style="max-width: 10rem;">
                <div class="card-body text-primary">
                    <img width="80px" src="public/img/Scorpin.jpg">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input"  style="visibility: hidden;" type="radio" name="personagem" id="Scorpin"
                               value="Scorpin">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Escolher</button>
        </form>
    </div>
    <div class="col-sm">
        <?php if (isset($personagem)) { ?>
            <p><?php echo $personagem->escolhido() ?></p>
            <img width="270px" src="public/img/<?php echo $personagem->escolhido() ?>.jpg">
        <?php } ?>
    </div>
</div>

<script>
    var vez = 0;
    $(document).ready(function(){

    let  it  =  window.setInterval(escol, '800');

    });

    function person(nome) {
        $('#LiuKang2, #SubZero2, #Scorpin2').removeClass('border-danger');
         $('#LiuKang, #SubZero,#Scorpin').attr('checked', false);
         $(nome).attr('checked', true);
         $(nome+'2').addClass('border-danger');




    }

    function escol(milliseconds) {
        let persons = ['#LiuKang','#SubZero','#Scorpin'];
        let radom  = Math.floor(Math.random() * 3 + 0)
        let escolhido = persons[radom];

        person(escolhido);
    }


</script>
<?php require 'footer.php' ?>