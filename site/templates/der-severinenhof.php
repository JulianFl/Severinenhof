<?php snippet('header') ?>

    <nav id="navbar-example2" class="navbar navbar-light justify-content-end bg-light ">
        <ul class="nav nav-pills navSeverinenhof">
            <li class="nav-item">
                <a class="nav-link" href="#spielundspass">Spiel & Spaß</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#viechereien">Viechereien</a>
            </li>
        </ul>
    </nav>

    <section class="header-bild-Severinenhof">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--21_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->titelbild())->url()?>">
                                <figcaption>
                                    <div class="container align-middle">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-12 ">
                                                    <h1>
                                                        <?= $page->title()->html() ?>
                                                    </h1>
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

    <section class="severinenhof1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?= $page->severinenhof1()->kirbytext() ?>

                </div>
                <div class="col-md-6">
                    <?= $page->severinenhof2()->kirbytext() ?>

                </div>
            </div>
        </div>
    </section>

    <a class="anker" id="spielundspass"></a>
    <section class="SpielSpass">
        <?= $page->headline1()->kirbytext() ?>

           <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <?= $page->spielundspass()->kirbytext() ?>

                </div>
                <div class="col-md-6">
                    <?= $page->spielundspass1()->kirbytext() ?>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-4">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                            <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->tischkicker())->url()?>">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height:400px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->trampolin())->url()?>">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->spaziergang())->url()?>">
                            </figure>
                        </div>
                    </div>

                </div>


                <div class="col-12 col-md-4">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->rutsche())->url()?>">
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->grillen())->url()?>">
                            </figure>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->tischtennis())->url()?>">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="anker" id="viechereien"></a>

    <section class="Viechereien">
        <?= $page->headline2()->kirbytext()?>

        <div class="container">

            <div class="row Text">
                <div class="col-md-6">
                    <?= $page->einleitung1()->kirbytext() ?>

                </div>
                <div class="col-md-6">
                    <?= $page->einleitung2()->kirbytext() ?>

                </div>

            </div>




            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--16_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->kuehe())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="portrait aR aR--2_3">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->katze())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption1()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--16_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height:500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->hund())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption2()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>


                    <div class="col-sm-12 col-md-3">
                        <div class="tx-hive-cpt-cnt-img">
                            <div class="square aR">
                                <figure class="focuhila">
                                    <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height:500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->pferde())->url()?>">
                                    <figcaption>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <?= $page->caption3()->kirbytext() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                <div class="col-sm-12 col-md-3">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--16_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->hasen())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption4()->kirbytext() ?>
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





<?php snippet('footer') ?>


