<?php snippet('header') ?>
    <!--    <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="#list-item-1">Ferienwohnung U</a>
            <a class="list-group-item list-group-item-action" href="#list-item-2">Ferienwohnung O</a>
        </div>
    -->
    <nav id="navbar-example2" class="navbar navbar-light justify-content-end bg-light">
        <ul class="nav nav-pills ">
            <li class="nav-item">
                <a class="nav-link" href="#FerienwohnungU">Ferienwohnung U</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#FerienwohnungO">Ferienwohnung O</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#FerienwohnungB">Ferienwohnung B</a>
            </li>
        </ul>
    </nav>

    <section class="header-bild-Ferienwohnung">
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
    <a class="anker " id="FerienwohnungU"></a>

    <section class="FerienwohnungU" >

        <div class="container" >
            <h2><?= $page->headline()->html()?></h2>

            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-6">
                    <?= $page->box1()->kirbytext() ?>
                </div>

                <div class="col-md-6">
                    <?= $page->box2()->kirbytext() ?>
                </div>
            </div>


            <div class="row">
<?php foreach($page->contactoptions1()->toStructure() as $item): ?>
    <div class="col-md-4 marginbottom">
        <?php $icon = $page->image($item->icon()); ?>

<?php  if ($icon != null): ?>
        <a class="" href="<?= $icon->url() ?>" target="_blank">
                        <div class="tx-hive-cpt-cnt-img">
                            <div class="square aR">
                                <figure class="focuhila">
                                    <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= $icon->url() ?>" title="<?= $item->caption1()->html() ?>" alt="<?= $item->caption1()->html() ?>">
                                    <figcaption>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h5>
                                                    <?= $item->caption1()->html() ?>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>

                                </figure>
                            </div>
                        </div>
                    </a>
<?php endif; ?>
                </div>
<?php endforeach ?>

        </div>
        </div>
    </section>

    <a class="anker" id="FerienwohnungO"></a>

    <section class="FerienwohnungO list-item-2">
        <h2><?= $page->headline2()->html()?></h2>
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <?= $page->box1_1()->kirbytext()?>

                </div>
                <div class="col-md-6">
                    <?= $page->box1_2()->kirbytext()?>
                </div>
            </div>

            <div class="row">
                <?php foreach($page->contactoptions2()->toStructure() as $item): ?>
                    <div class="col-md-4 marginbottom">
                        <?php $icon = $page->image($item->icon()); ?>
                        <?php  if ($icon != null): ?>


                        <a class="" href="<?= $icon->url() ?>"target="_blank">
                            <div class="tx-hive-cpt-cnt-img">
                                <div class="square aR">
                                    <figure class="focuhila">
                                        <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= $icon->url() ?>" title="<?= $item->caption2()->html() ?>" alt="<?= $item->caption2()->html() ?>">
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
                        </a>
                        <?php endif; ?>

                    </div>
                <?php endforeach ?>

            </div>


        </div>
    </section>
    <a class="anker" id="FerienwohnungB"></a>

    <section class="FerienwohnungO">
<?php if ($page->headline3()->isNotEmpty()): ?>
    <h2><?= $page->headline3()->html()?></h2>
    <?php endif; ?>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 text-left">
                <?= $page->box1_30()->kirbytext()?>

            </div>
            <div class="col-md-6 ">
                <?= $page->box1_40()->kirbytext()?>
            </div>
        </div>

        <div class="row">
            <?php foreach($page->contactoptions3()->toStructure() as $item): ?>
                <div class="col-md-4 marginbottom">
                    <?php $icon = $page->image($item->icon()); ?>

                    <?php  if ($icon != null): ?>

                    <a class="" href="<?= $icon->url() ?>"target="_blank">
                        <div class="tx-hive-cpt-cnt-img">
                            <div class="square aR">
                                <figure class="focuhila">
                                    <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= $icon->url() ?>" title="<?= $item->caption2()->html() ?>" alt="<?= $item->caption2()->html() ?>">
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
                    </a>
                    <?php endif; ?>

                </div>
            <?php endforeach ?>

        </div>


    </div>
</section>



<?php snippet('footer') ?>