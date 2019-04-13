<?php
/**
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 18:10
 */require 'header.php' ?>

<div class="row">
    <div class="col-sm">
        <form action="carroAbstractfactory" method="post">
            <div id = 'luxo2' class="card border-primary mb-2" style="max-width: 10rem;cursor: pointer;" onclick="carro('#luxo')">
                <div class="card-body text-primary">
                    <img width="120px" src="public/img/luxo.jpg">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" style="visibility: hidden;" name="carro" id="luxo"
                               value="luxo">
                    </div>
                </div>
            </div>

            <div id = 'popular2'class="card border-primary mb-2" style="max-width: 10rem;cursor: pointer;" onclick="carro('#popular')">
                <div class="card-body text-primary">
                    <img width="120px" src="public/img/popular.jpg">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" style="visibility: hidden;" name="carro" id="popular"
                               value="popular">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Escolher</button>
        </form>
    </div>
    <div class="col-sm">
        <?php if (isset($carro)) { ?>
            <p><?php echo $carro->getNome() ?></p>
            <img width="270px" src="public/img/<?php echo $carro->getNome() ?>.jpg">
        <?php } ?>
    </div>
</div>

<script>



    function carro(nome) {
        $('#luxo, #popular').attr('checked', false);
        $('#luxo2, #popular2').removeClass('border-danger');
        $(nome).attr('checked', true);
        $(nome+'2').addClass('border-danger');




    }




</script>

<?php require 'footer.php' ?>
