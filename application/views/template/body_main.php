<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <base href="/">
    <title>COREPO</title>
    <meta name="description" content="Dirección Regional de Agricultura Lima">
    <meta name="fragment" content="!">

    <!--
    <meta property="og:title" content="<?= (isset($title) && $title != "") ? $title : "DRAL" ?>" />
    <meta property="og:description" content="<?= (isset($description) && $description != "") ? $description : "Dirección Regional de Agricultura Lima" ?>" />
    <meta property="og:url" content="<?= base_url(uri_string()); ?>" />
    <meta property="og:image" content="<?= (isset($img) && $img != "") ? $img : asset_url() . 'img/brand/logo-200.jpg' ?>" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:site_name" content="Dirección Regional de Agricultura Lima" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@DRAL59954891" />
    <meta name="twitter:title" content="<?= (isset($title) && $title != "") ? $title : "DRAL" ?>" />
    <meta name="twitter:description" content="<?= (isset($description) && $description != "") ? $description : "Dirección Regional de Agricultura Lima" ?>" />
    <meta name="twitter:image" content="<?= (isset($img) && $img != "") ? $img : asset_url() . 'img/brand/logo-200.jpg' ?>" />

    <meta property="fb:app_id" content="1327135627399921" />
    <meta property="fb:pages" content="182498662244220" />
    -->

    <link rel="icon" type="image/x-icon" href="<?= asset_url() ?>img/brand/favicon.ico">
    <link rel="shortcut icon" href="<?= asset_url() ?>img/brand/favicon.ico" type="image/x-icon" />

    <link href="<?= asset_url() ?>plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?= asset_url() ?>plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?= asset_url() ?>plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= asset_url() ?>css/core.css" rel="stylesheet">
    <?php
      foreach ($styles as $style) {
        echo $style;
      }
    ?>
  </head>
  <body>
    <div class="super-header">
      <a href="http://www.dral.gob.pe" target="_blank">http://www.dral.gob.pe</a>
      <?php
        if ($this->session->userdata("usuario")) {
      ?>
      <button class="btn pull-right" style="margin-right: 4px; margin-left: 10px; border: none; padding: 2px 10px; background: #9e9e9e; font-family: Verdana, sans-serif;"><a href="<?= base_url('logout') ?>" style="text-decoration: none;"><i class="fa fa-power-off" aria-hidden="true"></i> Cerrar sesión</a></button>
          <span class="pull-right" style="border: none; padding: 2px 10px; background: rgba(14,130,64, 1); color: white; font-family: Verdana, sans-serif;"><i class="fa fa-user" aria-hidden="true"></i> Bienvenido, <b><a href="<?= base_url() . 'cambiar_clave' ?>"><?= $this->session->userdata("usuario")->nomb_usu ?></b></a></span>
      <?php
        } else {
      ?>
          <button class="btn pull-right sesion-login" style="margin-right: 4px; border: none; padding: 2px 10px; background: rgba(14,130,64, 1); font-family: Verdana, sans-serif;"><a href="<?= base_url('login') ?>" style="text-decoration: none;"><i class="fa fa-user" aria-hidden="true"></i> Intranet</a></button>
      <?php
        }
      ?>
    </div>
    <div class="main-background" style="background-image: url('<?= asset_url() ?>img/background/corepo-background.jpg');">
      <div class="box-logo text-center" style="background: rgba(255,255,255, .8); text-align: left;">
        <a id="b" href="<?= base_url() ?>" class="navbar-brand-header">
          <img class="logo-01" src="<?= asset_url() ?>img/brand/logo.png" style="height: 100px; margin-top: -22px;">
        </a>
        <span class="pull-right" style="margin-top: 45px; margin-right: 15px;"><i>MENSAJE DE LA INSTITUCIÓN</i></span>
      </div>
      <nav class="navbar navbar-inverse navbar-group navbar-main-group">
        <div class="container-fluid no-padding">
          <div class="navbar-header navbar-static-top nav-main">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-menu">
            <ul class="nav navbar-nav navbar-header-menu navbar-left">
              <li>
                <a class="item-menu" href="<?= base_url() ?>">Inicio</a>
              </li>
              <li>
                <a class="item-menu" href="<?= base_url('nosotros') ?>">Nosotros</a>
              </li>
              <li>
                <a class="item-menu" href="<?= base_url() ?>">Servicios</a>
              </li>
              <li>
                <a class="item-menu" href="<?= base_url() ?>">Prensa</a>
              </li>
              <li>
                <a class="item-menu" href="<?= base_url() ?>">Contacto</a>
              </li>
              <?php
                if ($this->session->userdata("usuario")) {
              ?>
              <li class="dropdown">
                <a class="item-menu dropdown-toggle" data-toggle="dropdown">Operaciones</a>
                <ul class="dropdown-menu no-padding">
                  <?php if (check_permission(BUSCAR_ROL)) { ?>
                    <li><a href="<?= base_url('rol') ?>">Roles</a></li>
                  <?php } ?>
                  <?php if (check_permission(BUSCAR_CUENTA)) { ?>
                    <li><a href="<?= base_url('usuario') ?>">Cuentas de acceso</a></li>
                  <?php } ?>
                  <?php if (check_permission(BUSCAR_NOTICIA)) { ?>
                    <li><a href="<?= base_url('noticia') ?>">Noticia</a></li>
                  <?php } ?>
                </ul>
              </li>
              <?php
                }
              ?>
              <li class="divider-vertical"></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="content">

        <?php if ($this->session->userdata('ci_message_system') != '') { ?>
          <input type="hidden" id="ci_type" value="<?= $this->session->userdata('ci_message_system')["type"] ?>">
          <input type="hidden" id="ci_message" value="<?= $this->session->userdata('ci_message_system')["message"] ?>">
        <?php $this->session->set_userdata('ci_message_system', ''); } ?>

        <?= $content ?>

      </section>
      <br>
      <br>
    </div>
    <footer class="well box-footer" style="padding: 0px; display: none;">
          <!--
          <section id="counter" class="counter">
            <div class="main_counter_area">
                <div class="overlay p-y-3">
                    <div class="container">
                        <div class="row">
                            <div class="main_counter_content text-center white-text wow fadeInUp text-center">
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa fa-user m-b-1"></i>
                                        <h2 class="statistic-counter">100</h2>
                                        <p>Visitas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>
          -->
    </footer>

    <script src="<?= asset_url() ?>plugins/jquery/dist/jquery.js"></script>
    <script src="<?= asset_url() ?>plugins/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?= asset_url() ?>plugins/toastr/toastr.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script>
        // App data
        var base_url = '<?= base_url() ?>';

        toastr.options = {
            closeButton: true,
            progressBar: false,
            showMethod: 'slideDown',
            timeOut: 3000
        };

        function show_toast(type, message) {
          toastr[type](message);
        }

        if ($("#ci_message").length) {
            show_toast($("#ci_type").val(), $("#ci_message").val());
        }
    </script>
    <?php
      foreach ($scripts as $script) {
        echo $script;
      }
    ?>
  </body>
</html>
