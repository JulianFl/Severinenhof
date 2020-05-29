<?php snippet('header') ?>

    <nav id="navbar-example2" class="navbar navbar-light justify-content-end bg-light ">
        <ul class="nav nav-pills navSeverinenhof">
            <li class="nav-item">
                <a class="nav-link" title="Spiel und Spass" href="#spielundspass">Spiel & Spaß</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Viechereien" href="#viechereien">Viechereien</a>
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
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->titelbild())->url()?>" title="Severinenhof" alt="Severinenhof">
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
        <h2><?= $page->headline1()->html() ?></h2>

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
            <div class="row">
                <?php foreach($page->contactoptions()->toStructure() as $item): ?>

                <div class="col-12 col-md-4">
                    <?php $icon = $page->image($item->icon()); ?>
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= $icon->url() ?>" title="<?= $item->alt()->html() ?>" alt="<?= $item->alt()->html() ?>">
                            </figure>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <a class="anker" id="viechereien"></a>

    <section class="Viechereien">
        <h2><?= $page->headline2()->html()?></h2>

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
                <div class="col-sm-12 col-md-9 row1">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--16_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->kuehe())->url()?>" title="Kuehe" alt="Kuehe">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                              <h5>  <?= $page->caption()->html() ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 row1">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="portrait aR aR--2_3">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->katze())->url()?>" title="Hund Dinah" alt="Hund Dinah">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <h5>  <?= $page->caption1()->html() ?></h5>
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
                <div class="col-sm-12 col-md-6 row2">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--16_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height:500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->hund())->url()?>" title="Ziegen" alt="Ziegen">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <h5> <?= $page->caption2()->html() ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>


                    <div class="col-sm-12 col-md-3 hoehe">
                        <div class="tx-hive-cpt-cnt-img">
                            <div class="square aR">
                                <figure class="focuhila">
                                    <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height:500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->pferde())->url()?>" title="Hasen" alt="Hasen">
                                    <figcaption>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h5> <?= $page->caption3()->html() ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                <div class="col-sm-12 col-md-3 hoehe">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--16_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->hasen())->url()?>" title="Katze Miezi" alt="Katze Miezi">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                               <h5> <?= $page->caption4()->html() ?></h5>
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
                <?php foreach($page->contactoptions2()->toStructure() as $item): ?>

                    <div class="col-12 col-md-4">
                        <?php $icon = $page->image($item->icon2()); ?>
                        <div class="tx-hive-cpt-cnt-img">
                            <div class="square aR">
                                <figure class="focuhila">
                                    <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= $icon->url() ?>" title="<?= $item->caption2()->html() ?>" alt="<?= $item->caption2()->html() ?> ">
                                    <figcaption>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>
                                                        <?= $item->caption2()->html() ?>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </section>





<?php snippet('footer') ?>


