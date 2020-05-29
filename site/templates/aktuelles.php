<?php snippet('header') ?>
    <section class="header-bild-Aktuelles">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tx-hive-cpt-cnt-img">
                        <div class="landscape aR aR--21_9">
                            <figure class="focuhila">
                                <img class="card-img-top b-lazy opacity_0" style="object-fit: cover; object-position: 50% 50%; height: 300px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="<?= image($page->titelbild())->url()?>" alt="Der Severinenhof" title="Der Severinenhof">
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

    <section class="angebote">
        <?= $page->headline1()->kirbytext()?>

        <div class="container">
            <div class="card-deck">
            <div class="row">
    <?php foreach($page->contactoptions()->toStructure() as $item): ?>

        <div class="d-flex col-md-4 col-sm-6">
              <div class="card">
                        <div class="card-body">
                           <h4><b><?= $item->title()->html() ?></b></h4>
                            <?= $item->text()->kirbytext() ?>
                        </div>
                    </div>
                </div>
    <?php endforeach ?>



            </div>

        </div>
    </section>


    <section class="aktuelles">
    <div class="container">
        <?= $page->headline()->kirbytext()?>

        <div class="card-deck">
          <div class="row">
<?php foreach($page->contactoptions1()->toStructure() as $item): ?>

    <div class="col-md-4 col-sm-6 d-flex ">
                  <div class="card">
                      <div class="card-body">
                          <h4><b><?= $item->title1()->html() ?></b></h4>
                          <p><?= $item->text1()->html() ?></p>
                      </div>
                  </div>
                  </div>

<?php endforeach ?>

            </div>
          </div>
      </div>
   </section>
<?php snippet('footer') ?>