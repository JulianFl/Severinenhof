<?php snippet('header') ?>
    <section class="header-bild-Aktuelles">
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

    <section class="angebote">
        <?= $page->headline1()->kirbytext()?>

        <div class="container">
            <div class="card-deck">
            <div class="row">
                <div class="d-flex col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <?= $page->angebot()->kirbytext()?>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <?= $page->angebot1()->kirbytext()?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-body">
                            <?= $page->angebot2()->kirbytext()?>
                        </div>
                    </div>
                </div>
            </div>

            </div>

        </div>
    </section>


    <section class="aktuelles">
    <div class="container">
        <?= $page->headline()->kirbytext()?>

        <div class="card-deck">
          <div class="row">
              <div class="col-md-4 col-sm-6 d-flex">
                  <div class="card">
                      <div class="card-body">
                          <?= $page->news1()->kirbytext()?>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 d-flex">
                  <div class="card">
                      <div class="card-body">
                          <?= $page->news2()->kirbytext()?>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 d-flex">
                  <div class="card">
                      <div class="card-body">
                          <?= $page->news3()->kirbytext()?>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 d-flex">
                  <div class="card">
                      <div class="card-body">
                          <?= $page->news4()->kirbytext()?>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 d-flex">
                  <div class="card">
                      <div class="card-body">
                          <?= $page->news5()->kirbytext()?>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6  d-flex">
                  <div class="card">
                      <div class="card-body">
                          <?= $page->news6()->kirbytext()?>
                      </div>
                  </div>
              </div>

            </div>
          </div>
      </div>
   </section>
<?php snippet('footer') ?>