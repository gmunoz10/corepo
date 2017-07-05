
<section class="container box-noticias-eventos" style="line-height: 1.42857143; margin-top: 30px; margin-bottom: 60px;">
  <div id="carousel-noticias" class="carousel slide carousel-noticias" data-ride="carousel" style="border-radius: 15px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-noticias" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-noticias" data-slide-to="1" class=""></li>
        <li data-target="#carousel-noticias" data-slide-to="2" class=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="border-radius: 15px 15px 0px 0px;">
        <div class="item active">
          <img src="http://conceptodefinicion.de/wp-content/uploads/2014/03/agricultura.jpg" alt="...">
          <div class="carousel-caption">
            <h4>TÍTULO DE NOTICIA 1</h4>
            DESCRIPCIÓN CORTA DE NOTICIA 1...
          </div>
        </div>
        <div class="item">
          <img src="http://conceptodefinicion.de/wp-content/uploads/2014/03/agricultura.jpg" alt="...">
          <div class="carousel-caption">
            <h4>TÍTULO DE NOTICIA 1</h4>
            DESCRIPCIÓN CORTA DE NOTICIA 1...
          </div>
        </div>
        <div class="item">
          <img src="http://conceptodefinicion.de/wp-content/uploads/2014/03/agricultura.jpg" alt="...">
          <div class="carousel-caption">
            <h4>TÍTULO DE NOTICIA 1</h4>
            DESCRIPCIÓN CORTA DE NOTICIA 1...
          </div>
        </div>
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
      <h3 class="title-sisgedo" style="margin-bottom: 5px; margin-top: 10px; padding-left: 20px;"><a href="#">Noticias</a></h3>
      <br>
      <div class="col-lg-12" style="margin-bottom: 30px;">
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <h4 class="title-sisgedo" style="margin-bottom: 5px;"><a href="#"><span style="color: #666">001: </span><b>TÍTULO DE NOTICIA 4</b></a></h4>
        <p style="color: #666"><i>Publicado por <b>USER_NAME</b></i><span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <i>Fecha de publicación: <?= date("d/m/Y h:i A") ?></i></span></p>
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <div class="col-lg-4">
          <img src="http://conceptodefinicion.de/wp-content/uploads/2014/03/agricultura.jpg" class="img-thumbnail img-responsive">
        </div>
        <div class="col-lg-8">
          <p>DESCRIPCIÓN DE NOTICIA 4...</p>
          <a href="#" class="pull-right" style="font-weight: bold;">Ver nota completa</a>
        </div>
        <div class="col-lg-12" style="margin-top: 15px;">
          <b><i>Comparte en: </i></b>
          <button type="button" class="btn btn-twitter btn-circle" data-href="<?= base_url() . 'noticia/' . $noticia->codi_not ?>">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-facebook btn-circle" data-href="<?= base_url() . 'noticia/' . $noticia->codi_not ?>">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </button>
        </div>
      </div>
      <div class="col-lg-12" style="margin-bottom: 30px;">
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <h4 class="title-sisgedo" style="margin-bottom: 5px;"><a href="#"><span style="color: #666">001: </span><b>TÍTULO DE NOTICIA 5</b></a></h4>
        <p style="color: #666"><i>Publicado por <b>USER_NAME</b></i><span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <i>Fecha de publicación: <?= date("d/m/Y h:i A") ?></i></span></p>
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <div class="col-lg-4">
          <img src="http://conceptodefinicion.de/wp-content/uploads/2014/03/agricultura.jpg" class="img-thumbnail img-responsive">
        </div>
        <div class="col-lg-8">
          <p>DESCRIPCIÓN DE NOTICIA 5...</p>
          <a href="#" class="pull-right" style="font-weight: bold;">Ver nota completa</a>
        </div>
        <div class="col-lg-12" style="margin-top: 15px;">
          <b><i>Comparte en: </i></b>
          <button type="button" class="btn btn-twitter btn-circle" data-href="<?= base_url() . 'noticia/' . $noticia->codi_not ?>">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-facebook btn-circle" data-href="<?= base_url() . 'noticia/' . $noticia->codi_not ?>">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </button>
        </div>
      </div>
      <div class="col-lg-12" style="margin-bottom: 30px;">
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <h4 class="title-sisgedo" style="margin-bottom: 5px;"><a href="#"><span style="color: #666">001: </span><b>TÍTULO DE NOTICIA 6</b></a></h4>
        <p style="color: #666"><i>Publicado por <b>USER_NAME</b></i><span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <i>Fecha de publicación: <?= date("d/m/Y h:i A") ?></i></span></p>
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <div class="col-lg-4">
          <img src="http://conceptodefinicion.de/wp-content/uploads/2014/03/agricultura.jpg" class="img-thumbnail img-responsive">
        </div>
        <div class="col-lg-8">
          <p>DESCRIPCIÓN DE NOTICIA 6...</p>
          <a href="#" class="pull-right" style="font-weight: bold;">Ver nota completa</a>
        </div>
        <div class="col-lg-12" style="margin-top: 15px;">
          <b><i>Comparte en: </i></b>
          <button type="button" class="btn btn-twitter btn-circle" data-href="<?= base_url() . 'noticia/' . $noticia->codi_not ?>">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-facebook btn-circle" data-href="<?= base_url() . 'noticia/' . $noticia->codi_not ?>">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </button>
        </div>
      </div>
      <div class="col-lg-12" style="margin-bottom: 30px;">
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <h4 class="title-sisgedo" style="margin-bottom: 5px;"><a href="#"><span style="color: #666">001: </span><b>TÍTULO DE NOTICIA 6</b></a></h4>
        <p style="color: #666"><i>Publicado por <b>USER_NAME</b></i><span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <i>Fecha de publicación: <?= date("d/m/Y h:i A") ?></i></span></p>
        <hr style="border-color: #999; margin-top: 10px; margin-bottom: 10px;">
        <div class="col-lg-4">
          <img src="http://conceptodefinicion.de/wp-content/uploads/2014/03/agricultura.jpg" class="img-thumbnail img-responsive">
        </div>
        <div class="col-lg-8">
          <p>DESCRIPCIÓN DE NOTICIA 6...</p>
          <a href="#" class="pull-right" style="font-weight: bold;">Ver nota completa</a>
        </div>
        <div class="col-lg-12" style="margin-top: 15px;">
          <b><i>Comparte en: </i></b>
          <button type="button" class="btn btn-twitter btn-circle" data-href="<?= base_url() . 'noticia/' . $noticia->codi_not ?>">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-facebook btn-circle" data-href="<?= base_url() . 'noticia/' . $noticia->codi_not ?>">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </button>
        </div>
      </div>
      <div class="col-lg-12 text-center">
          <ul class="pagination">
            <li class="active"><a href="#">1</a></li>
            <li class=""><a href="#">2</a></li>
            <li class=""><a href="#">3</a></li>
            <li class=""><a href="#">4</a></li>
            <li class=""><a href="#">5</a></li>
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
          <img class="logo-01" src="<?= asset_url() ?>img/brand/logo-200.jpg" style="width: 100%; border-radius: 15px;">
        </a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="text-center">
        <a target="_blank" href="http://www.regionlima.gob.pe/">
          <img class="logo-01" src="<?= asset_url() ?>img/nosotros/img09.png" style="width: 100%; border-radius: 15px;">
        </a>
      </div>
    </div>
  </div>

</section>
