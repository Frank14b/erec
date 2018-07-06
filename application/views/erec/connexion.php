<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>EREC | Connexion</title>
    <!-- endinject -->
    <link rel="icon" href="<?=base_url()?>assets/img/core-img/favicon.ico">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url()?>files/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url()?>files/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?=base_url()?>files/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?=base_url()?>assets/mdb/css/mdb.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page" style="background:url(<?=base_url()?>assets/images/hero_contact_us-desktop.jpg)center/cover;">
  <div class=" mask rgba-black-strong waves-effect waves-light" style="position:absolute;right:0; top:0; bottom:0; left:0"> 
    <div class="login-box">
      <div class="login-logo">
        <a href="#" style="color:#fff"><b>EREC</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body card">
        <p class="login-box-msg">Connectez vous pour demarrer</p>
        <form action="" method="post" id="getConnect">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="login" required placeholder="Login"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <input type="hidden" name="connectUser"/>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" required placeholder="Mot de passe"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">    
              <div class="checkbox icheck">
                <label class="">
                  <input type="checkbox" checked> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="row">
              <div class="col-md-12" id="push"><center><button type="submit" class="btn btn-primary btn-flat">Connexion </button></center></div>
              <div class="col-12 col-md-12" id="reponses"></div>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="<?=base_url()?>" class="acc btn btn-block btn-social btn-facebook btn-flat" style="padding-top:10px;"><i class="glyphicon glyphicon-home"></i><span style="font-size:1.2em; margin-left:20px;">Acceuil</span></a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat hidden"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <hr>
        <a href="#" data-toggle="modal" data-target="#restore"><i class="glyphicon glyphicon-eye-close"></i> J'ai oublie mon mot de passe</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    </div>

      <div class="modal modal-default fade" id="restore">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                x
                            </button>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" id="restorepassword" enctype="multipart/form-data">
                    <div class="col-md-12">
                    <div class="row"><div class="icon col-md-12"><h5><i class="glyphicon glyphicon-eye-open"></i> Mot de Passe Oublie</h5><br></div>
            					<div class=" row">

                        <div class=" col-md-12">
                          <label class=" col-md-12">Email de recuperation
                            <input name="email" type="email" placeholder="Votre adresse email" class="form-control" required value=""/>
                          </label>
            						</div>
                        
                        <input type="hidden" name="restorepass"/>

            <div class="row">
              <div class="col-md-12" id="push"><center><button type="submit" class="btn btn-primary btn-flat">M'envoyer le lien de recuperation </button></center></div>
              <div class="col-12 col-md-12" id="reponses"></div>
            </div><!-- /.col -->
            					</div>
            				</div>
                  </form>

                                    </div>
                                    </div>
                    <div class="modal-footer">
                    </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


    <!-- jQuery 2.1.3 -->
    <script src="<?=base_url()?>files/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url()?>files/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>files/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });

      $(document).ready(function () {

        if($(document).width() <= 983)
        {
            $('.acc').hide();
        }
                                $('#getConnect').on('submit', function (e) {
                                    var $this = $(this);
                                    e.preventDefault();
                                    $this.find('#reponses').show();
                                    $this.find('#reponses').html('<div class="col-md-12 alert text-center" style="background: #f5f5f5; padding:5px;"><center>Connexion en Cours ...</center>'
                                            + '</div>');
                                    $this.find('#push').hide();
                                    $.ajax({
                                        type: "POST",
                                        url: "",
                                        data: $this.serialize(),
                                        dataType: 'json',
                                        success:
                                                function (data) {
                                                    if (data == 0) {
                                                        $this.find('#reponses').html('<div class="alert col-md-12" style="background: #f5f5f5; color: green; margin-top: 0px; padding:5px;">'
                                                                + '<div class="col-md-12"><center>Redirection en cours ...</center>'
                                                                + '</div></div>');
                                                        //$this.find('#push').show();
                                                        setTimeout(function () {
                                                            window.location.reload();
                                                        }, 1500);
                                                    } else {
                                                        $this.find('#push').show();
                                                        $this.find('#reponses').html('<div class="alert col-md-12" style="background: #f5f5f5; color: #ff6565; margin-top: 0px; padding:5px;">'
                                                                + '<div class="col-md-12 text-center">'
                                                                + data + '</div></div>');
                                                        $this.find('#push').show();
                                                    }
                                                }
                                    });// you have missed this bracket
                                })
                            });
    </script>
  </body>
</html>