
<?php 
   $CI = &get_instance();
?>
     <div class="row">
        <div class="col-md-3">
          <a data-toggle="modal" data-target="#compose" class="btn btn-primary btn-block margin-bottom" style="font-size:1em;">Compose</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Standard</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Boite de Reception
                  <span class="label label-primary pull-right">0</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Envoyés</a></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Corbeille</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Detrompeur</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Message Interne</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Message Sortant</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Message Entrant</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Boite de Reception</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Rechercher un message">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-primary checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-primary"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-primary"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-primary"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>

                  <?php 
                    $rs = $CI->message->getAllmessage();
                    if($rs != false){
                        foreach($rs as $row):
                            ?>
                             <tr>
                                <td style="font-size:1em;"><input type="checkbox"></td>
                                <td style="font-size:1em;" class="mailbox-star"><a href="#"><i class="fa fa-circle-o text-blue"></i></a></td>
                                <td style="font-size:1em;" class="mailbox-name"><a href="read-mail.html"><?=$row->nom?></a></td>
                                <td style="font-size:1em;" class="mailbox-subject"><b><?=$row->sujet?></b> - <?=substr($row->texte, 0, 60)?>...</td>
                                <td style="font-size:1em;" class="mailbox-attachment"></td>
                                <td style="font-size:1em;" class="mailbox-date"><?=$row->dates?></td>
                              </tr>
                            <?php 
                        endforeach;
                    }
                  ?>

                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding hidden">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-primary checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-primary"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-primary"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-primary"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <div class="modal modal-default fade" id="compose">
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
        <form class="" method="post" id="sendCompose">
        <div class="row">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Configurer le message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                 <input class="form-control" required name="email" placeholder="A :">
              </div>
              <div class="form-group">
                <input class="form-control" required name="sujet" required placeholder="Sujet :">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="texte" class="form-control scroll" style="height: 300px">
                      <h1><u>Heading Of Message</u></h1>
                      <h4>Subheading</h4>
                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, t ...</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Pieces Jointes
                  <input type="file" name="attachment">
                </div>
                <p class="help-block col-md-12">Max. 5MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Envoie Programmer</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Envoyer</button>
              </div>
              <button type="reset" class="btn btn-warning"><i class="fa fa-times"></i> Annuler</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->