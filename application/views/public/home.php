
<section class="container box-noticias-eventos" style="line-height: 1.42857143; margin-top: 30px; margin-bottom: 60px;">
  <div id="carousel-noticias" class="carousel slide carousel-noticias" data-ride="carousel" style="border-radius: 15px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ($i=0; $i < 3; $i++) { 
                if (isset($noticias[$i])) { ?>
          <li data-target="#carousel-noticias" data-slide-to="<?= $i ?>" class="<?= ($i == 0) ? 'active' : ""?>"></li>
        <?php }} ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="border-radius: 15px 15px 0px 0px;">
        <?php for ($i=0; $i < 3; $i++) { 
                if (isset($noticias[$i])) { ?>
          <div class="item <?= ($i == 0) ? 'active' : ""?>">
            <img src="<?= asset_url() ?>noticia/<?= $noticias[$i]->imag_not ?>" alt="...">
            <div class="carousel-caption">
              <h4><?= $noticias[$i]->titu_not ?></h4>
              <?= limit_to(strip_tags($noticias[$i]->cont_not), 512) ?>...
            </div>
          </div>
        <?php }} ?>
    </div>
    <div class="carousel-more" style="border-radius: 0px 0px 15px 15px;">
    <p class="carousel-share">
      <b><i>Comparte en: </i></b>
      <button type="button" class="btn btn-twitter btn-circle">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-facebook btn-circle">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-document btn-circle">
        <i class="fa fa-file" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-feed btn-circle">
        <i class="fa fa-rss" aria-hidden="true"></i>
      </button>
      <span id="noticia_link" href="#" class="carousel-link" style="cursor: pointer;"><b>Ver mas</b></span>
    </p>
    </div>
  </div>

  <div class="col-lg-8" style="margin-top: 30px;">
    <div style="background: rgba(255,255,255,.9); border-radius: 15px; padding: 8px; display: grid;">
      <h3 class="title-sisgedo" style="margin-bottom: 5px;"><a href="<?= base_url(). "noticia/page" ?>">Noticias</a></h3>
      <br>
      <?php for ($i=3; $i < 5; $i++) { 
                if (isset($noticias[$i])) { ?>
      <div class="col-lg-12" style="margin-bottom: 30px;">
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <h4 class="title-sisgedo" style="margin-bottom: 5px;"><a href="<?= base_url() . 'noticia/' . $noticias[$i]->codi_not ?>"><span style="color: #666"><?= $noticias[$i]->nume_not ?>: </span><b><?= $noticias[$i]->titu_not ?></b></a></h4>
        <p style="color: #666"><i>Publicado por <b><?= $noticias[$i]->nomb_usu ?></b></i><span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <i>Fecha de publicación: <?= date("d/m/Y h:i A", strtotime($noticias[$i]->fech_not)) ?></i></span></p>
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
      <div class="col-lg-4">
        <img src="<?= asset_url() ?>noticia/<?= $noticias[$i]->imag_not ?>" class="img-thumbnail img-responsive">
        </div>
      <div class="col-lg-8">
        <p><?= limit_to(strip_tags($noticias[$i]->cont_not), 512) ?>...</p>
        <a href="<?= base_url() . 'noticia/' . $noticias[$i]->codi_not ?>" class="pull-right" style="font-weight: bold;">Ver nota completa</a>
        </div>
      <div class="col-lg-12" style="margin-top: 15px;">
        <b><i>Comparte en: </i></b>
            <button type="button" class="btn btn-twitter btn-circle" data-href="<?= base_url() . 'noticia/' . $noticias[$i]->codi_not ?>">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-facebook btn-circle" data-href="<?= base_url() . 'noticia/' . $noticias[$i]->codi_not ?>">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </button>
        </div>
      </div>
      <?php }} ?>
      <div class="col-lg-12 text-center">
          <ul class="pagination">
            <?php for ($i=1; $i <= $pages ; $i++) { ?>
              <li class="<?= ((int) $i == (int) $page) ? "active" : "" ?>"><a href="<?= base_url() . 'noticia/page/' . $i ?>"><?= $i ?></a></li>
            <?php } ?>
          </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-4" style="margin-top: 30px; ">
    <script>
      (function() {
        var cx = '013980864906967710135:ytegr_r5yni';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = false;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    <div class="input-group" style="width: 100%;">
      <gcse:search></gcse:search>
    </div>
  </div>
  <div class="col-lg-4" style="margin-top: 30px; ">
    <div style="background: rgba(255,255,255,.9); border-radius: 15px; padding: 8px; padding-left: 20px;">
      <div class="text-center">
        <img class="logo-01" src="<?= asset_url() ?>img/brand/logo.png" style="width: 160px;">
      </div>
      <h4 style="margin-top: 10px;">El Consejo Regional de Productos Orgánicos de Lima</h4>
      <p><b>¿Quiénes somos?</b></p>
      <p>Somos un organismo que <b><i>articula a las instituciones públicas y privadas</i></b> con los intereses de la colectividad; para fomentar su desarrollo sostenible y competitivo en las provincias de Barranca, Cajatambo, Oyón, Huaura, Huaral, Canta, Huarochirí, Yauyos y Cañete del departamento de Lima, en cumplimiento del <b>D.S. Nº 010-2012-AG, Reglamento de la Ley de la Promoción de la Producción Orgánica o Ecológica, Ley Nº 29196</b>.</p>
      <p>El COREPO LIMA <b>está adscrito a la <a target="_blank" href="http://dral.gob.pe/">Dirección Regional de Agricultura</a> del <a target="_blank" href="http://www.regionlima.gob.pe/">Gobierno Regional de Lima</a></b>.</p>
    </div>
  </div>
  <div class="col-lg-4" style="margin-top: 20px;">
    <div class="col-lg-6">
      <div class="text-center">
        <a target="_blank" href="http://dral.gob.pe/">
          <img class="logo-01" src="<?= asset_url() ?>img/brand/logo-200.jpg" style="width: 150px; border-radius: 15px;">
        </a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="text-center">
        <a target="_blank" href="http://www.regionlima.gob.pe/">
          <img class="logo-01" src="<?= asset_url() ?>img/nosotros/img09.png" style="width: 150px; border-radius: 15px;">
        </a>
      </div>
    </div>
  </div>

</section>
