<?php snippet('header') ?>


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





<?php snippet('footer') ?>


