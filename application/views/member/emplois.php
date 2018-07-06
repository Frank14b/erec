<?php 
$CI = &get_instance();
?>
<style>
    #mainn{
        background:url(<?=base_url()?>assets/images/cover-img-1.jpg)center/cover;
        z-index:99;
    }
</style>
<div class="row" id="mainn" style="position:relative; min-height:250px; margin-top:-20px">
<div style="position:absolute; top:0; left:0; z-index:99" class=""></div>

</div>

<div class="row" style="z-index:99; position:relative; top:-150px; left:0">
    <div class="col-md-1"></div>
    <div class="col-md-10 card" style="z-index:99; background:#fff;">
    <div class="col-md-6" style=""><br>
          <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?=base_url()?>assets/images/7170795c61f1c54937d4b6c9c1032637.jpg" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?=base_url()?>assets/images/7170795c61f1c54937d4b6c9c1032637.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?=base_url()?>assets/images/7170795c61f1c54937d4b6c9c1032637.jpg" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <div class="row">
        <div class="col-md-12" style="margin-top:55px">
          <div class="info-box card">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nombre de Vus</span>
              <span class="info-box-number">9<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-12" style="margin-top:5px">
          <div class="info-box card">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Commentaires</span>
              <span class="info-box-number">9<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
           </div>
        </div>
    </div>
</div>


<div class="row" style="z-index:99; position:relative; top:-130px; left:0">
    <div class="col-md-1"></div>
    <div class="col-md-10 card" style="z-index:99; background:#fff;">
    <div class="col-md-12" style=""><br>
          <button class="btn btn-primary" data-toggle="modal" data-target="#newPoste">Nouveau Poste</button>
          <button class="btn btn-success" data-target="#newPeriodeStage" data-toggle="modal">Configurer les Periodes de Stage</button>
          <hr>
          
          <h4><b>Recemment Ajoute</b></h4>

          <?php 
             $val = $CI->offres->getAlloffres();
             if($val != null){
               foreach($val as $row):
               ?>
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-sticky-note-o"></i>

              <h3 class="box-title" style="text-transform:uppercase"><?=$row->intituler?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
                <p><?=substr($row->details, 0, 150)?> ...<p>
                <small>Expire le : <?=$row->datefin?> <cite title="Source Title"><hr><button class="btn btn-primary">Consulter</button></cite></small>
              </blockquote>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
               <?php 
               endforeach;
             }else{
              ?>
              <div class="alert alert-info">
                  <i class="fa fa-info"></i>&nbsp; Aucune donnee disponible
              </div>
              <?php 
             }
          ?>

    </div>
    <!-- /.col -->
    </div>
</div>


        <div class="modal modal-default fade" id="newPoste">
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
                               <form method="POST" class="addElemt">
                                  <div class="row">
                                     <div class="col-md-12"><br>
                                        <input type="hidden" name="addPosteP"/>
                                        <input type="text" class="form-control" required name="intituler" placeholder="Entrer l'intituler"/>
                                     <br></div>
                                     <div class="col-md-12"><br>
                                        <textarea class="form-control" required name="details" placeholder="Entrer les details du poste propose"></textarea>
                                     <br></div>
                                     <div class="col-md-12"><br>

                                        <div class="col-md-6">debut
                                             <input type="text" value="<?=date("m/d/Y")?>" min="<?=date("m/d/Y")?>" class="form-control datepicker" required name="dates"/>
                                        </div>

                                        <div class="col-md-6">fin
                                             <input type="text" class="form-control datepicker" required name="datefin"/>
                                        </div>
                                     
                                     <br></div>
                                     <div class="col-md-12" id="reponse"></div>
                                     <div class="col-md-12" id="push"><hr>
                                        <input type="submit" class="btn btn-primary" value="Enregistrer"/>
                                        <input type="reset" class="btn btn-warning" value="vider"/>
                                     </div>
                                  </div>
                               </form>
                            </div>
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal modal-default fade" id="newPeriodeStage">
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
                               <form method="POST" class="addElemt">
                                  <div class="row">
                                     <div class="col-md-12"><br>
                                        <input type="hidden" name="addPstage"/>
                                      <br></div>
                                     <div class="col-md-12"><br>

                                        <div class="col-md-6">debut
                                             <input type="date" min="<?=date('d/m/Y')?>" max="<?=date('d/m/Y')?>" class="form-control atepicker" required name="dates"/>
                                        </div>

                                        <div class="col-md-6">fin
                                             <input type="text" class="form-control datepicker" required name="datefin"/>
                                        </div>
                                     
                                     <br></div>
                                     <div class="col-md-12" id="reponse"></div>
                                     <div class="col-md-12" id="push"><hr>
                                        <input type="submit" class="btn btn-primary" value="Enregistrer"/>
                                        <input type="reset" class="btn btn-warning" value="vider"/>
                                     </div>
                                  </div>
                               </form>
                            </div>
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->