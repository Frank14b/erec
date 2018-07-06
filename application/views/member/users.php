<?php
  $_POST['M-Details'] = "Acces Espace Filtre";
?>
<style>
  .table tr td, .table tr th, button{
      font-size:1em;
  }
</style>

    <div class="row">
      <main class="">
        <div class="col-md-12">
        <div class="row">
              <div class="col-md-12">
              <?php 
               $CI = &get_instance();

                if(isset($power) or isset($supprimer)){
                  ?>
                    <div class="alert card" style="border-radius:0px; margin-top:-25px;<?php if(isset($power)){echo 'color:#096304d0';}else{ echo 'color:orange';} ?>">
                                              <span>
                                                  <b><i class="now-ui-icons travel_info"></i> &nbsp; Infos - </b> <?= $power ?? $supprimer ?></span>
                                          </div>
                  <?php 
                }
                ?>
                </div>
            </div>
          <div class="col-md-12 card" style="padding-bottom:10px">
            <div class="col-md-12">
              <div class="">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 card">
<!-- Card image -->

<div class="view zoom card hidden" style="width:100%; height:230px">
    <img src="<?=base_url()?>assets/img/blog-img/cours.jpg" class="img-fluid" alt="VIRTEK." style="width:100%; margin-top:-260px;">
    <div class="mask pattern-3 flex-center waves-effect waves-light">
        <p class="white-text" style="font-size: 2.3em">" Elements à Filtrer "</p>
    </div>
</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <?php 
                $val = $CI->users->getAllusers();
                if($val == NULL){
                    ?>
                      vide
                    <?php 
                }else{
                    ?>
                    <div class="mdc-card">
                <div class="table-heading px-2 px-1 border-bottom"><br>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#addFiltre">Ajouter un Personnel</button>
                  <h3 class="mdc-card__title mdc-card__title--large">Membres du Personnel EREC-Cameroun</h3>
                </div>
                <div class="row"><hr>
                <?php 
                   foreach($val as $row):
                    ?>
                    <div class="col-md-4" style="margin-bottom:5px"><div class="col-md-12 card">
                    <div class="dropdown user user-menu mask rgba-white-strong waves-effect waves-light">
                <ul class="bg-grey">
                  <!-- User image -->
                  <div class="user-header">
                    <img src="<?=base_url()?>assets/profile/<?=$CI->users->getOneData($_SESSION['erec_userid'], 'photo')?>" class="img-circle card img-fluid" style="height:100px;width:100px" alt="User Image" />
                    <h3><b>
                    <?=$CI->users->getOneData($_SESSION['erec_userid'],'prenom')?>
                    <?=$CI->users->getOneData($_SESSION['erec_userid'],'nom')?></b></h3>
                    <h5><b><?=$CI->users->getOneData($_SESSION['erec_userid'],'role')?></b></h5>
                   </h5>
                   </div>
                  
                  <!-- Menu Footer-->
                  <div class="user-footer">
                    <div class="pull-left">
                      <a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard/profil" class="btn btn-primary" style="color:#fff">Consulter</a>
                    </div>
                    <div class="pull-left">
                      <a href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? 'fr' ?>/dashboard/users/<?=$row->id?>/delete" class="btn btn-warning delete" style="color:#fff">Bloquer</a>
                    </div>
                   </div>
                </ul>
                   </div>  
                    </div></div>
                    <?php 
                   endforeach
                ?>
                   
                </div>
                  </div>
                    <?php 
                }
              ?>
            </div>
          </div>
        </div>
      </main>

      <div class="modal modal-default fade" id="addFiltre">
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
                  <form method="POST" class="addElemt">
                  <div class="row" style="border:0px solid #eee">
                    <div class="col-md-12"><div class="icon col-md-12 text-center"><h4> Ajouter un mot au Filtre</h4></div>
                    <div class="col-md-12">
                    <div class="col-md-12">
                      <label class="col-md-12">Intituler
                            <input type="text" name="mots" required class="mdc-text-field__input form-control">
                            <span class="mdc-text-field__label"></span>
                            <div class="mdc-text-field__bottom-line"></div>
                            <input type="hidden" name="ajouterFiltre" class=""/>
                          </label>
            						</div>
                        
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            						</div>
                        <div class="col-md-12">
                          <button style="margin-left:15px;" class="btn btn-primary" data-mdc-auto-init="MDCRipple">
                            Enregistrer
                          </button>
                        </div>
            					</div>
            				</div>
                  </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-default fade" id="editsFiltre">
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
                  <form method="POST" class="addElemt">
                  <div class="row" style="border:0px solid #eee">
                    <div class="col-md-12"><div class="icon col-md-12 text-center"><h4> Ajouter un mot au Filtre</h4></div>
                    <div class="col-md-12">
                    <div class="col-md-12">
                      <label class="col-md-12">Intituler
                            <input type="text" name="mots" required class="mdc-text-field__input form-control data-edit" data-elemt="mots">
                            <span class="mdc-text-field__label"></span>
                            <div class="mdc-text-field__bottom-line"></div>
                            <input type="hidden" name="editerFiltre" class="data-edit"  data-elemt="id"/>
                          </label>
            						</div>
                        
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            						</div>
                        <div class="col-md-12">
                          <button style="margin-left:15px;" class="btn btn-primary" data-mdc-auto-init="MDCRipple">
                            Enregistrer
                          </button>
                        </div>
            					</div>
            				</div>
                  </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->