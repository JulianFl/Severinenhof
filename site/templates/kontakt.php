
<?php snippet('header') ?>

    <section class="header-bild-Kontakt">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--21_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->titelbild())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <h1><?= $page->title()->html() ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="Preise">
    <h2>Preise</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">

                                <! data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne"-->
                                <a>
                                    Ferienwohnung "U"rgemütlich
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                    <div class="card-deck">
                        <div class="container">
                        <div class="row">
                            <?php foreach($page->contactoptions1()->toStructure() as $item): ?>

                                <div class="d-flex col-md-6 col-sm-6 liste">
                                    <div class="card">
                                        <div class="card-body">
                                            <b><?= $item->title1()->html() ?></b><br><br>
                                            <p><?= $item->text1()->html() ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                  <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <?= $page->saisonzeiten()->kirbytext()?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a> <!--class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">-->
                                    Ferienwohnung "O"h wie ist das schön
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="card-deck">
                                    <div class="container">
                                        <div class="row">
                                            <?php foreach($page->contactoptions2()->toStructure() as $item): ?>

                                                <div class="d-flex col-md-6 col-sm-6 liste">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <b><?= $item->title()->html() ?></b><br><br>
                                                            <p><?= $item->text2()->html() ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        <div class="container">
                                            <div class="row">
                                            <div class="col-md-12">
                                                <?= $page->saisonzeiten1()->kirbytext()?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a> <!--class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">-->
                                    Ferienwohnung "B"esonders
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="card-deck">
                                    <div class="container">
                                        <div class="row">
                                            <?php foreach($page->contactoptions3()->toStructure() as $item): ?>

                                                <div class="d-flex col-md-6 col-sm-6 liste">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <b><?= $item->title3()->html() ?></b><br><br>
                                                            <p><?= $item->text3()->html() ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        <div class="container">
                                            <div class="row">
                                            <div class="col-md-12">
                                                <?= $page->saisonzeiten3()->kirbytext()?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

    <section class="liste">

        <div class="container">
            <?= $page->headline()->kirbytext()?>

            <div class="card-deck">
                <div class="row">
                    <?php foreach($page->contactoptions()->toStructure() as $item): ?>

                        <div class="d-flex col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <p><?= $item->text()->html() ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>




                </div>
            </div>
        </div>


    </section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 auszeichnung">

        <?= $page->liste6()->kirbytext()?>


            </div>

        </div>
        <div class="row">
            <div class="col-md-5 offset-md-4">
                <div class="tx-hive-cpt-cnt-img">
                    <div class="landscape aR aR--16_9">
                        <figure class="focuhila">
                            <img class="card-img-top b-lazy opacity_0" style="object-fit: contain; object-position: 50% 50%; height: 224px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->kontakt1())->url()?>"title="Preisträger Familien Ferien" alt="Preisträger Familien Ferien">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="kontakt">
<!--
    <h3>Senden Sie uns eine E-mail</h3>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="form-mailer.php">
                <p><label>Name:<br><input type="text" name="Name"></label></p>
                <p><label>E-Mail:<br><input type="text" name="Mail"></label></p>
                <p><label>Betreff:<br><input type="text" name="Betreff"></label></p>
                <p><label>Nachricht:<br>
                        <textarea name="Nachricht" cols="50" rows="8"></textarea></label></p>
                <input class="senden" type="submit" value="Senden">

            </form>
        </div>
    </div>
</div>

-->
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-12">
                <h2>Kontakt</h2>
                <?= $page->kontakt()->kirbytext()?>

            </div>


        </div>
    </div>
</section>
<section class="iframe">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2093.363587843787!2d8.329289210354402!3d48.19151262739484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4790c6c4424a0101%3A0xba10fdb7ab1b3a2e!2sSeverinenhof!5e0!3m2!1sde!2sde!4v1508593143536" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br>
                </div>
        </div>
    </div>

</section>

<!--<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Belegungskalender</h2>
                <iframe src="https://calendar.google.com/calendar/embed?src=fleig.julian%40googlemail.com&ctz=Europe%2FAmsterdam" style="border: 0" width="100%" height="600px" frameborder="0" scrolling="no"></iframe>

            </div>
        </div>
    </div>
</section>-->
<?php snippet('footer') ?>