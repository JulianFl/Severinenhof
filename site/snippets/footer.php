
  <footer>
      <div class="container">
          <div class="row d-flex align-items-center">
              <div class="col-md-4">

                  <h3>Kontakt</h3>

                  <p>
                      Fam. Moosmann<br>
                      Gersbach 239<br>
                      78144 Tennenbronn<br>
                      Tel.: 07729/8578<br>
                      <a title="E-Mail Severinenhof" href="mailto:info@severinenhof.de">info@severinenhof.de</a>
                  </p>
              </div>
              <div class="col-md-4 ">
                  <div class="tx-hive-cpt-cnt-img">
                      <div class="landscape aR">
                          <figure class="focuhila">
                              <img class="card-img-top b-lazy opacity_0" style="object-fit: contain; object-position: 50% 50%; height: 50px;"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-echo="content/preistraeger.png" title="Preisträger Familien Ferien" alt="Preisträger Familien Ferien">
                          </figure>
                      </div>
                  </div>
              </div>

              <div class=" col-md-4">
                  <a title="Impressum" href="<?= page('impressum')->url() ?>">Impressum</a><br/>
                  <a title="Datenschutz" href="<?= page('impressum')->url() ?>">Datenschutz</a><br><br>

                  <a class="jf" title="Autor Julian Fleig" href="<?= page('impressum')->url() ?>#JulianFleig"><strong>made by Julian Fleig</strong></a>

              </div>
          </div>
      </div>
        <div class="pseudoelement"></div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  <script>
      window.cookieconsent.initialise({

          "palette": {
              "popup": {
                  "background": "#000000",
                  "text": "#ffffff"
              },
              "button": {
                  "background": "#047a1d",
                  "text": "#ffffff"
              }
          },
          "theme": "edgeless",
          "type": "opt-in",
          "content": {
              "message": "Wir verwenden Cookies, um Ihnen ein optimales Webseiten-Erlebnis zu bieten. Dazu zählen Cookies, die zu anonymen Statistikzwecken genutzt werden. Sie können selbst entscheiden, ob Sie Cookies zulassen möchten. Weitere Informationen finden Sie im Datenschutz.",
              "deny": "Ablehnen",
              "allow": "Akzeptieren",
              "link": "Datenschutz",
              "href": "/impressum"

          }
      });
  </script>

  <script>var hive_cfg_typoscript__windowLoad=!0;</script>


  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo js(array(
      'assets/js/JQuery/jquery-3.2.1.min.js',
      'assets/js/bootstrap.bundle.min.js',
      'assets/js/script.js',
  )) ?>



    </body>
</html>
