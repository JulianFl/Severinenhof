<?php snippet('header') ?>


    <section class="header-bild-imprint">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--21_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->titelbild())->url()?>" alt="Aussicht Severinenhof" title="Aussicht Severinenhof">
                                <figcaption>
                                    <div class="container">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-12 ">
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

    <section class="impressum">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?= $page->impressum()->kirbytext() ?>
                </div>
            </div>
        </div>
    </section>


<?php snippet('footer') ?>