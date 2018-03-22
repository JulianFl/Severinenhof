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
            <?= $page->headline()->kirbytext()?>

            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-6">
                    <?= $page->box1()->kirbytext() ?>
                </div>

                <div class="col-md-6">
                    <?= $page->box2()->kirbytext() ?>
                </div>
            </div>


         <div class="row">
            <div class="col-md-4">
                <a class="" href="\content\4-ferienwohnungen\normal\Bad_U.jpg"target="_blank">
                <div class="tx-hive-cpt-cnt-img">
                    <div class="square aR">
                        <figure class="focuhila">
                            <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box3())->url()?>">
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
                </a>
            </div>
             <div class="col-md-4">
                 <a href="\content\4-ferienwohnungen\normal\Kueche_U.jpg"target="_blank">
                 <div class="tx-hive-cpt-cnt-img">
                     <div class="square aR">
                         <figure class="focuhila">
                             <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box4())->url()?>">                             <figcaption>
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
                 </a>
             </div>
             <div class="col-md-4">
                <a href="\content\4-ferienwohnungen\normal\Flur_U.jpg"target="_blank">
                 <div class="tx-hive-cpt-cnt-img">
                     <div class="square aR">
                         <figure class="focuhila">
                             <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box5())->url()?>">
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
                </a>
             </div>
        </div>








        <div class="row">

        <div class="col-md-4">
            <a href="\content\4-ferienwohnungen\normal\Wohnzimmer_U2.jpg"target="_blank">
            <div class="tx-hive-cpt-cnt-img">
                <div class="square aR">
                    <figure class="focuhila">
                        <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box6())->url()?>">
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
            </a>
        </div>

        <div class="col-md-4">
            <a href="\content\4-ferienwohnungen\normal\Wohnzimmer_U.jpg"target="_blank">

            <div class="tx-hive-cpt-cnt-img">
                    <div class="square aR">
                        <figure class="focuhila">
                            <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box7())->url()?>">
                            <figcaption>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <?= $page->caption5()->kirbytext() ?>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>

                        </figure>
                    </div>
            </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="\content\4-ferienwohnungen\normal\Sessel.jpg"target="_blank">

            <div class="tx-hive-cpt-cnt-img">
                    <div class="square aR">
                        <figure class="focuhila">
                            <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box8())->url()?>">
                            <figcaption>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <?= $page->caption6()->kirbytext() ?>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>

                        </figure>
                    </div>
                </div>
            </a>
        </div>


            </div>

            <div class="row">

                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normal\Terasse_U.jpg"target="_blank">

                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR ">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box9())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption7()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>

                            </figure>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normal\Schlafzimmer_U2.jpg"target="_blank">

                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR ">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box10())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption8()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>

                            </figure>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normal\Kinderzimmer_U.jpg" target="_blank">

                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR ">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box11())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption9()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>

                            </figure>
                        </div>
                    </div>
                    </a>
                </div>

            </div>





        </div>

    </section>

    <a class="anker" id="FerienwohnungO"></a>

    <section class="FerienwohnungO list-item-2">
        <?= $page->headline2()->kirbytext()?>
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
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\BadO.jpg" target="_blank"">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_3())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption10()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\BadO2.jpg" target="_blank">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR ">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_4())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption11()->kirbytext() ?>

                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\Esszimmer_O.jpg" target="_blank">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_5())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption12()->kirbytext() ?>

                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\SchlafzimmerO.jpg" target="_blank">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_6())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption13()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\Schlafzimmer_O2.jpg" target="_blank">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_7())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption14()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\Kinderzimmer.jpg" target="_blank">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_8())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption15()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    </a>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\Wohnzimmer_O2.jpg" target="_blank">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_9())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption16()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\Balkon.jpg" target="_blank">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 500px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_10())->url()?>">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption17()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="\content\4-ferienwohnungen\normalO\Kueche_O.jpg" target="_blank">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="square aR">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->box1_11())->url()?>">                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <?= $page->caption18()->kirbytext() ?>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    </a>
                </div>

            </div>


        </div>
    </section>




<?php snippet('footer') ?>