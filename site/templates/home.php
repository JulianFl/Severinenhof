<?php snippet('header') ?>


<section class="slider">
    <article class="description">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-12">
                    <h1><?= $page->Titel()->html() ?></h1>
                </div>
            </div>
        </div>
    </article>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                <?php $detect = new Mobile_Detect;
                if( $detect->isMobile() && !$detect->isTablet() ):

                else:?>
                    <a role="button" href="<?= page('360')->url() ?>" class="abutton">Severinenhof in 360°</a>


                <?php endif; ?>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                       <div class="start active carousel-item ">
                            <div class="tx-hive-cpt-cnt-img">
                                <div class="landscape aR aR--21_9">
                                    <figure class="focuhila">
                                        <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 823px;" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->slider1())->url()?>" alt="Severinenhof" title="Severinenhof">
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="start1  carousel-item">
                            <div class="tx-hive-cpt-cnt-img">
                                <div class="landscape aR aR--21_9">
                                    <figure class="focuhila">
                                        <img class="card-img-top b-lazy opacity_1" style="object-fit: cover; object-position: 50% 50%; height: 823px;" src="<?= image($page->slider2())->url()?>"  alt="Severinenhof in Tennenbronn" title="Severinenhof in Tennenbronn">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="start2 carousel-item">
                            <div class="tx-hive-cpt-cnt-img">
                                <div class="landscape aR aR--21_9">
                                    <figure class="focuhila">
                                        <img class="card-img-top b-lazy opacity_1" style="object-fit: cover; object-position: 50% 50%; height: 823px;" src="<?= image($page->slider3())->url()?>"  alt="Aussicht vom Balkon" title="Aussicht vom Balkon">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a title="links" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a title="rechts" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Severinenhof">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $page->Severinenhof()->kirbytext() ?>

                <div class="margin-button">
                    <a role="button" title="Der Severinenhof" href="<?= page('der-severinenhof')->url() ?>" class="abutton">Mehr</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ueberuns">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="zuHause ">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= image($page->zuHausequote())->url()?>" width="70px" height="70px"alt="quotation" title="quotation">
                                <?= $page->zuHause()->kirbytext() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 ueber">
                <div class="beschreibung">
                    <?= $page->ueberuns()->kirbytext() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Ferienwohnung">

    <div class="container">
        <?= $page->headline()->kirbytext() ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card" >
                    <div class="tx-hive-cpt-cnt-img   ">
                        <div class="landscape aR aR--16_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: center center; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-echo="<?= image($page->FerienhausUimg())->url()?>" alt="Ferienwohnung U" title="Ferienwohnung U">
                            </figure>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $page->FerienhausU()->kirbytext() ?>
                        <div class="margin-button">

                        <a role="button" title="Ferienwohnung U" href="<?= page('ferienwohnungen')->url() ?>#FerienwohnungU" class="abutton">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" >
                    <div class="tx-hive-cpt-cnt-img   ">
                        <div class="landscape aR aR--16_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: center center; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-echo="<?= image($page->FerienhausOimg())->url()?>"  alt="Ferienwohnung O" title="Ferienwohnung O" >
                            </figure>
                        </div>
                    </div>
                    <div class="card-body">
                         <?= $page->FerienhausO()->kirbytext() ?>
                        <div class="margin-button">

                        <a role="button" title="Ferienwohnung O" href="<?= page('ferienwohnungen')->url() ?>#FerienwohnungO" class="abutton">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="platzhalter ">
    <div class="tx-hive-cpt-cnt-img   ">
        <div class="landscape aR aR--21_5">
            <figure class="focuhila">
                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: top 50%; height: auto;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-echo="<?= image($page->platzhalter())->url()?>" alt="Sonnenuntergang in Tennenbronn" title="Sonnenuntergang in Tennenbronn" >
            </figure>
        </div>
    </div>
</section>
<section class="Kontakt">
    <?= $page->headline1()->kirbytext() ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2093.363587843787!2d8.329289210354402!3d48.19151262739484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4790c6c4424a0101%3A0xba10fdb7ab1b3a2e!2sSeverinenhof!5e0!3m2!1sde!2sde!4v1508593143536" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    <div>
        <div class="margin-button">

        <a role="button" title="zum Kontakt" href="<?= page('kontakt')->url() ?>" class="abutton">Mehr</a>
        </div>
</section>

    <!-- Include all compiled plugins (below), or include individual files as needed -->



<?php snippet('footer') ?>


