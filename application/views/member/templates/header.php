<!DOCTYPE html>
<style>
    html::-webkit-scrollbar-track,
    .scroll::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #aaa;
        border-radius: 0px;
        height: 8px;
        width: 8px;
        opacity: 0.5;
    }

    /* line 16, zonestyle.scss */

    html::-webkit-scrollbar,
    .scroll::-webkit-scrollbar {
        width: 8px;
        background-color: #f5f5f5;
        cursor: pointer;
        height: 8px;
    }

    /* line 23, zonestyle.scss */

    html::-webkit-scrollbar:hover,
    .scroll::-webkit-scrollbar:hover {
        width: 8px;
        background-color: #fff;
        cursor: pointer;
        height: 8px;
    }

    /* line 30, zonestyle.scss */

    html::-webkit-scrollbar-thumb,
    .scroll::-webkit-scrollbar-thumb {
        border-radius: 0px;
        background-color: #fff;
        cursor: pointer;
    }

    /* line 35, zonestyle.scss */

    HTML {
        overflow-x: hidden;
    }

    /* line 38, zonestyle.scss */

    .no_scroll {
        overflow: hidden;
    }

    /* line 41, zonestyle.scss */

    .scroll_v_h,
    .scroll_h_v {
        overflow: auto;
    }

    /* line 44, zonestyle.scss */

    .scroll_v {
        overflow-y: auto;
        overflow-x: hidden;
    }

    /* line 48, zonestyle.scss */

    .scroll_h {
        overflow-x: auto;
        overflow-y: hidden;
        height: 8px;
    }

    /* line 53, zonestyle.scss */

    .scroll_hover {
        transition-duration: 0.6s;
    }

    /* line 54, zonestyle.scss */

    .scroll_hover .scroll::-webkit-scrollbar {
        width: 0px;
        background-color: none;
        cursor: pointer;
        height: 0px;
    }

    /* line 63, zonestyle.scss */

    .scroll_hover:hover .scroll::-webkit-scrollbar {
        width: 8px;
        background-color: #fff;
        cursor: pointer;
        height: 8px;
    }

    /* line 69, zonestyle.scss */

    .scroll_hover:hover .scroll::-webkit-scrollbar-thumb {
        background-color: #f5f5f5;
    }

    /* line 73, zonestyle.scss */

    .scroll_bleu::-webkit-scrollbar-thumb {
        background-color: #229CDD;
        opacity: 0.5;
    }

    /* line 77, zonestyle.scss */

    .scroll_bleu::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid lightblue;
    }

    /* line 82, zonestyle.scss */

    .scroll_bleu::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 86, zonestyle.scss */

    .scroll_hover:hover .scroll_bleu::-webkit-scrollbar-thumb {
        background-color: #229CDD;
        opacity: 0.5;
    }

    /* line 90, zonestyle.scss */

    .scroll_hover:hover .scroll_bleu::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid lightblue;
    }

    /* line 95, zonestyle.scss */

    .scroll_hover:hover .scroll_bleu::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 100, zonestyle.scss */

    .scroll_noir::-webkit-scrollbar-thumb {
        background-color: #555;
        opacity: 0.5;
    }

    /* line 104, zonestyle.scss */

    .scroll_noir::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid #aaa;
    }

    /* line 109, zonestyle.scss */

    .scroll_noir::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 113, zonestyle.scss */

    .scroll_hover:hover .scroll_noir::-webkit-scrollbar-thumb {
        background-color: #555;
        opacity: 0.5;
    }

    /* line 117, zonestyle.scss */

    .scroll_hover:hover .scroll_noir::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid #aaa;
    }

    /* line 122, zonestyle.scss */

    .scroll_hover:hover .scroll_noir::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 127, zonestyle.scss */

    .scroll_red::-webkit-scrollbar-thumb {
        background-color: red;
        opacity: 0.5;
    }

    /* line 131, zonestyle.scss */

    .scroll_red::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid lightcoral;
    }

    /* line 136, zonestyle.scss */

    .scroll_red::-webkit-scrollbar {
        opacity: 0.5;
    }

    /* line 140, zonestyle.scss */

    .scroll_hover:hover .scroll_red::-webkit-scrollbar-thumb {
        background-color: red;
        opacity: 0.5;
    }

    /* line 144, zonestyle.scss */

    .scroll_hover:hover .scroll_red::-webkit-scrollbar-track {
        background-color: #fff;
        opacity: 0.5;
        border: 1px solid lightcoral;
    }

    /* line 149, zonestyle.scss */

    .scroll_hover:hover .scroll_red::-webkit-scrollbar {
        opacity: 0.5;
    }

    .hover {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    .menus {
        display: none;
    }

    .visible {
        display: block;
    }

    @-webkit-keyframes fadeIn{
      from{opacity: 0;}
      to{opacity:1;}
    }
    
    @keyframes fadeIn{
      from{opacity: 0;}
      to{opacity:1;}
    }

    @keyframes zoomi{
      from{opacity: 0; width:0.9em}
      to{opacity:1; width:1.3em}
    }

    @-webkit-keyframes zoomi{
      from{opacity: 0;width:0.9em}
      to{opacity:1;width:1.3em}
    }

    @media only screen and (max-width: 800px){
      .small-hide{
        display:none;
      }

      .elemtalpha{
        display:none;
      }

      .carousel-inner .items{
        display:none;
        opacity:0;
        height:0;
        overflow:hidden;
        transition:3s ease-out;
      }
      .carousel-inner .items.activ{
        display:block;
        opacity:1;
        height:auto;
        transition:3s ease-out;
        -webkit-animation:fadeIn .5s;
        animation:fadeIn .5s;
      }
      
    }

    @media only screen and (min-width: 800px){
      .carousel-inner .items{
        display:none;
        opacity:0;
        height:0;
        overflow:hidden;
        transition:3s ease-out;
      }
      .carousel-inner .items.activ{
        display:block;
        opacity:1;
        height:auto;
        transition:3s ease-out;
        -webkit-animation:fadeIn .5s;
        animation:fadeIn .5s;
      }
    }

    .carousel-controls{
      position:absolute;
      top:0;
      bottom:0;
      background:linear-gradient(rgba(255,255,255,.56), rgba(255,255,255,.56));
      z-index:99;
      cursor:pointer;
      padding:20px;
      color:#eee;
    }

    .control-left{
      left:0;
    }

    .control-right{
      right:0;
    }

    .carousel-controls .glyphicon{
      font-size:1.4em;
      margin-top:45px;
    }

   .pagination .page-item .page-link {
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: .375rem;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
   }

</style>

<html>
  <head>
    <meta charset="UTF-8">
    <title>EREC | <?= $title ?></title>
    <!-- endinject -->
    <link rel="icon" href="<?=base_url()?>assets/img/core-img/favicon.ico">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url()?>files/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>files/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>files/bower_components/Ionicons/css/ionicons.min.css">    
    <!-- Theme style -->
    <link href="<?=base_url()?>files/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url()?>files/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?=base_url()?>files/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?=base_url()?>files/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?=base_url()?>files/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?=base_url()?>files/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link href="<?=base_url()?>files/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?=base_url()?>files/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?=base_url()?>assets/mdb/css/mdb.min.css">

  <link href="<?php echo base_url(); ?>assets/zonestyle/css/croppie.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/zonestyle/css/cards.css" rel="stylesheet"/>

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url()?>files/plugins/iCheck/all.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>files/bower_components/select2/dist/css/select2.min.css">

  <!-- bootstrap slider -->
  <link rel="stylesheet" href="<?=base_url()?>files/plugins/bootstrap-slider/slider.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?=base_url()?>files/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?=base_url()?>files/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

  </head>
<?php
$CI = &get_instance();
?>

<style>
    .main-header .s-toggle {
    float: left;
    background-color: transparent;
    background-image: none;
    padding: 15px 15px;
    font-family: fontAwesome;
    color:#fff;
}

.no-print{
    display:none;
}

</style>

  <body class="hold-transition <?php if($CI->users->getOneData($_SESSION['erec_userid'],"role")=="Admin")echo'skin-blue blue';elseif($CI->users->getOneData($_SESSION['erec_userid'],"role")=="Employees")echo'skin-red'; else echo'skin-yellow'; ?> fixed sidebar-mini scroll hold-transition">
    <div class="wrapper">
      
      <header class="main-header bg-blue">
        <!-- Logo -->
        <a href="<?=base_url()?>" class="logo hidden-sm hidden-xs"><b>EREC</b><small style="font-size:0.5em"></small></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top bg-blue" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="s-toggle" data-toggle="offcanvas" role="button">
              <i class="glyphicon glyphicon-list"></i>
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu bg-blue">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-flag"></i>
                  <span class="label label-danger">Fr</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="footer">
                    <a href="#">Fr - Francais</a>
                    <a href="#">En - Englais</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=base_url()?>assets/profile/<?=$CI->users->getOneData($_SESSION['erec_userid'], 'photo')?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?=$CI->users->getOneData($_SESSION['erec_userid'],'prenom')?></span>
                </a>
                <ul class="dropdown-menu bg-blue">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?=base_url()?>assets/profile/<?=$CI->users->getOneData($_SESSION['erec_userid'], 'photo')?>" class="img-circle" alt="User Image" />
                    <p>
                    <?=$CI->users->getOneData($_SESSION['erec_userid'],'prenom')?> - <?=$CI->users->getOneData($_SESSION['erec_userid'],'role')?>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard/profil" class="btn btn-primary" style="color:#fff">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard/deconnexion" class="btn btn-primary" style="color:#fff">Deconnexion</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar z-depth-4 blue" style="">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar mask rgba-black-strong waves-effect waves-light" style="position:absolute; right:0; left:0; top:0; bottom:0">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url()?>assets/profile/<?=$CI->users->getOneData($_SESSION['erec_userid'], 'photo')?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?=$CI->users->getOneData($_SESSION['erec_userid'],'prenom')?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu de Configuration</li>
            <li class="treeview<?php if($title=='dashboard')echo' active btn-primary'; ?> btn" style="width:100%; font-size:0.9em; text-align:left; color:#fff">
              <a href="<?= base_url() ?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard">
                <i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="btn<?php if($title=='users')echo' active btn-primary'; ?>" style="width:100%; font-size:0.9em; text-align:left; color:#fff;">
              <a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard/users">
                <i class="fa fa-users"></i> <span>Personnel</span>
                <small class="label pull-right bg-blue"><?=$CI->users->countAllusers()?></small>
              </a>
            </li>

            <li class="btn<?php if($title=='message')echo' active btn-primary'; ?>" style="width:100%; font-size:0.9em; text-align:left; color:#fff;">
              <a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard/message">
                <i class="fa fa-envelope"></i> <span>Messages</span>
                <small class="label pull-right bg-blue"><?=$CI->message->countAllmessage()?></small>
              </a>
            </li>

            <li class="btn<?php if($title=='emplois')echo' active btn-primary'; ?>" style="width:100%; font-size:0.9em; text-align:left; color:#fff;">
              <a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard/emplois">
                <i class="fa fa-gears"></i> <span>Emplois | Stages</span>
                <small class="label pull-right bg-blue"></small>
              </a>
            </li>

            <li class="btn<?php if($title=='agenda')echo' active btn-primary'; ?>" style="width:100%; font-size:0.9em; text-align:left; color:#fff;">
              <a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard/agenda">
                <i class="fa fa-calendar"></i> <span>Agenda</span>
                <small class="label pull-right bg-blue"></small>
              </a>
            </li>

            <li class="btn<?php if($title=='agenda')echo' active btn-primary'; ?>" style="width:100%; font-size:0.9em; text-align:left; color:#fff;">
              <a href="#" data-toggle="modal" data-target="#poste">
                <i class="fa fa-calendar"></i> <span>Postes Pourvu</span>
                <small class="label pull-right bg-blue"></small>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper" style="">
        <!-- Content Header (Page header) -->
        <section class="content-header  mask rgba-black-strong waves-effect waves-light">
          <h1>
            Tableau de Board
            <small>Panneau de Configuration</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Acceuil</a></li>
            <li class="active"><?=$title?></li>
          </ol>
        </section>

        <style>
          li.btn{
            margin-top:5px;
            display:block;
          }

          #blockADD{
            display:none;
          }
        </style>

        <!-- Main content -->
        <section class="content mask rgba-white-strong waves-effect waves-light" style="margin-top:20px;">



        <div class="modal modal-default fade" id="poste">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                <i class="fa fa-power-off"></i>
                            </button>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                               <button class="btn btn-primary" id="openADD"><i class="fa fa-plus"></i>&nbsp; Ajouter</button>
                            </div>
                            <div class="col-md-12" id="blockADD">
                               <form method="POST" class="addElemt">
                                  <div class="row">
                                     <div class="col-md-12"><br>
                                        <input type="hidden" name="addPoste"/>
                                        <input type="text" class="form-control" required name="libeller" placeholder="Entrer l'intituler"/>
                                     <br></div>
                                     <div class="col-md-12" id="reponse"></div>
                                     <div class="col-md-12" id="push">
                                        <input type="submit" class="btn btn-primary" value="Enregistrer"/>
                                        <input type="reset" class="btn btn-warning" value="vider"/>
                                     </div>
                                  </div>
                               </form>
                            </div>
                            <div class="col-md-12" id="blockADD2">

              <?php 
                $val = $CI->postes->getAllpostes();

                if($val == NULL){
                    ?>
                      <div class="alert alert-info">
                          <i class="fa fa-info"></i>&nbsp; Aucune donnee disponible
                      </div>
                    <?php 
                }else{
                    ?>
              <div class="mdc-card" style="padding:15px;">
                <div class="table-heading px-2 px-1 border-bottom">
                 </div>
                <div class=" table-responsive scroll">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-right" style="font-size: 1em;">#</th>
                      <th style="font-size: 1em;">Intituler</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                      foreach($val as $row):
                        ?>
                    <tr>
                      <td class="text-right"><button class="btn btn-sm btn-primary edit-elemt" data-edit="matieres" id="<?= $row->id ?>" data-mdc-auto-init="MDCRipple" data-toggle="modal" data-target="#addmatiere"><i class="glyphicon glyphicon-pencil"></i></button></td>
                      <td style="font-size: 1em;"><?= $row->libeller ?></td>
                      <td><a class="btn btn-sm btn-danger delete" data-id="<?= $row->id ?>" data-ele="postes"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                    <?php 
                      endforeach;
                    ?>
                    </tbody>
                  </table>
                  </div>
              </div>
                    <?php 
                }
              ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->