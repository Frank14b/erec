<?php 
$CI = &get_instance();
?>
</section> 
<!-- partial:partials/_footer.html -->
<!-- partial -->
</div>

<?php 
    if(isset($lists)){
        if($CI->notecours->checkIfuserExist($_SESSION['ens_userid'], $lists) == false){
        ?>
          <div class="row noter-cours" style="position:fixed; top:52px; left:0; right:0; min-height:60px; z-index:999; background:none;">
              <div class="col-md-3">

              </div>
              <div class="col-md-9 card" style=" background:url(<?=base_url()?>assets/images/course_7.jpg)center/cover;">
              <div class="col-md-12"><button class="btn btn-danger pull-right noter-after">noter Plus tard</button>
              <button class="btn btn-primary pull-right">Je n'aime pas ce cours</button></div>
              <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <h5><b><center>Bienvenue sur EREC</center></b></h5>
                    <h3>Vous aimez ce cours ? suggerez le a vos amis en lui attribuant une note</h3>
                    <center><?php 
                      for($i=1; $i<6; $i++){
                          ?><a href="#" class="noteDuCours" data-elemt="cours" id="<?=$lists?>" data-note="<?=$i?>" style="font-size:1.9em"><i class="glyphicon glyphicon-star"></i></a><?php
                      }
                    ?></center>
                  </div>
                  <div class="col-md-3">
                    <img src="<?=base_url()?>assets/images/course_7.jpg" class="img-fluid hidden"/>
                  </div>
              </div>
          </div>
          <div class="row" id="remarqu" style="position:fixed; top:162px; left:0; right:0; min-height:60px; z-index:99999; background:none;">
            <div class="col-md-3">

            </div>
            <div class="col-md-9 card" style="background:#fff">
               <input type="text" id="remarq" placeholder="Veuillez nous faire part de votre preocupation" class="form-control" style="border: 0px"/>
               <button class="btn btn-danger pull-right" id="closeNote">Annuler</button>
               <button class="btn btn-primary pull-right" id="envoyerNote">Envoyer</button>
            </div>
          </div>
        <?php
        }
    }
?>

<?php 
  if($title != "messages"){
      ?>
        <div class='col-md-3 card col-sm-6 col-xs-12 hidden' style="position:fixed; z-index:99; right:5px; bottom:0; background:#fff">
              
              <!-- DIRECT CHAT -->
              <div id="myDirectChat" class="box box-warning direct-chat direct-chat-info wow bounceIn">
                <div class="box-header with-border">
                  <h3 class="box-title">Discussion</h3>
                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title=""></span>
                    <button class="btn btn-success btn-sm reduise" data-widget="collapse"><i class="glyphicon glyphicon-resize-small"></i></button>
                    <button class="btn btn-primary btn-sm contact" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="glyphicon glyphicon-user"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    

                  </div><!--/.direct-chat-messages-->


                  <!-- Contacts are loaded here -->
                  <div class="contlist" style="">
                    <ul class='contacts-list'>
                    <?php 
                     
                    ?>
                      
                    </ul><!-- /.contatcts-list -->
                  </div><!-- /.direct-chat-pane -->
                </div><!-- /.box-body -->
                <div class="box-footer" style="height:80px;">
                  <form action="#" method="post" id="addMess2">
                    <div class="input-group">
                      <input type="hidden" name="addMess"/>
                      <input type="hidden" value="01" required name="useid2" id="iddirectchat"/>
                      <input type="text" name="texte" autocomplete="off" required id="inputChat" placeholder="&#xf118; Votre message ici ! ..." class="form-control fa" style="border:0px"/>
                      <span class="input-group-btn hidden">
                        <button type="submit" class="btn btn-success btn-flat"><i class="glyphicon glyphicon-arrow-right"></i></button>
                      </span>
                    </div>
                  </form>
                
                <h4 style="margin-left:10px;"><a class="messThumb" data-value="&#xf087;"><i class="fa fa-thumbs-o-up text-blue"></i></a> &nbsp;<a class="messThumb" data-value="&#xf165;"><i class="fa fa-thumbs-o-down text-blue"></i></a> &nbsp; <a><i class="fa fa-image text-red"  data-toggle="tooltip" title="Images"></i></a>
                &nbsp;<a><i class="fa fa-paperclip" style="" data-toggle="tooltip" title="Files"></i></a>
                &nbsp;<a class="messThumb" data-value="&#xf002;"><i class="fa fa-frown-o" data-toggle="tooltip" title="Angry"></i></a>
                &nbsp;<a class="messThumb" data-value="&#xf118;"><i class="fa fa-smile-o" data-toggle="tooltip" title="Smile"></i></a>
                &nbsp;<a><i class="fa fa-microphone" data-toggle="tooltip" title="Voice"></i></a></h4>
                
                </div><!-- /.box-footer-->
              </div><!--/.direct-chat -->
            </div><!-- /.col -->
      <?php 
  }
?>

<style>
  .contlist{
      width:100%;position:absolute; top:0; left:0; z-index:999; background:#222d32;
      display:none;
  }
</style>

<button class="openSmall btn btn-primary" style="position:fixed; bottom:50px; right:5px; z-index:999"><i class="glyphicon glyphicon-list"></i></button>
<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright © <?= date("Y") ?> <a class="text-green" href="" target="_blank">VIRTEK</a>. All rights reserved. | Made by <a href="">Frank Fontcha</a>.</strong> All rights reserved.
      </footer>
</div>

<!-- body wrapper -->
<!-- plugins:js -->
<!-- jQuery 2.1.3 -->
    <script src="<?=base_url()?>files/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url()?>files/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?=base_url()?>files/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?=base_url()?>files/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?=base_url()?>files/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>files/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=base_url()?>files/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?=base_url()?>files/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?=base_url()?>files/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?=base_url()?>files/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>files/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?=base_url()?>files/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=base_url()?>files/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>files/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE App -->
    <script src="<?=base_url()?>files/dist/js/adminlte.min.js"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>files/dist/js/demo.js" type="text/javascript"></script>

    <!-- Select2 -->
<script src="<?=base_url()?>files/bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="<?= base_url() ?>assets/mdb/js/mdb.js"></script>
<script src="<?= base_url() ?>assets/mdb/js/popper.min.js"></script>

<script src="<?php echo base_url(); ?>assets/zonestyle/js/myJs.js"></script>
<script src="<?php echo base_url(); ?>assets/zonestyle/js/croppie.js"></script>
<script src="<?php echo base_url(); ?>assets/zonestyle/js/pdfobject.js"></script>

<script src="<?php echo base_url(); ?>assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables-responsive/dataTables.responsive.js"></script>

<!-- Bootstrap slider -->
<script src="<?php echo base_url(); ?>files/plugins/bootstrap-slider/bootstrap-slider.js"></script>
<script src="<?php echo base_url(); ?>files/bower_components/ckeditor/ckeditor.js"></script>
<!-- fullCalendar -->
<script src="<?php echo base_url(); ?>files/bower_components/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>files/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>


<script>
  
  $(document).ready(function(){
    $('.datepicker').datepicker({
      autoclose: true
    })

        $('.addElemt').on('submit', function (e) {
            var $this = $(this)
            e.preventDefault()

            if(confirm("Voulez vous vraimant Effectué cet enregistrement ?")){
                $('#reponse').show(function(){
                    $(this).html('<center><img src="<?=base_url()?>assets/images/loader.gif" style="height:30px; width:30px; border-radius:50%;"/></center>')
                })
                $.ajax({
                type: 'POST',
                url: "",
                data: $this.serialize(),
                success: function (data) {
                    if (data != 0) {
                        alert('Element enregistrer avec succes !')
                        window.location.reload()
                    } else {
                        alert('Echec lors de lenregistrement de lelement')
                    }
                }
                });
            }else{
                return false;
            }
            
        })
  })

  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>


<script>
  $(function () {
    //Add text editor
    $("textarea").wysihtml5();
  });
</script>

<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>

    <script type="text/javascript">

  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').slider()
  });

  //Initialize Select2 Elements
    $('select').select2()

      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        <?php 
          if($title == 'cours' || $title == 'forum'){
              ?>CKEDITOR.replace('editor1');<?php
          }

          if($title == 'actualites'){
            ?>CKEDITOR.replace('editor1');<?php
          }
        ?>
        //bootstrap WYSIHTML5 - text editor
        //$("textarea").wysihtml5();
      });
    </script>

<?php

if ($title == "profile") {
    ?>
    <script>

        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -35.997, lng: 250.644},
                zoom: 6
            });

            var infoWindow = new google.maps.InfoWindow({map: map});

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent("Votre position");
                    map.setCenter(pos);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpVz8n3SUhLlMZXgxyPZpoI-3OESQsMPU&callback=initMap"></script>
    <?php
}
?>

<script>

<?php
if (isset($lists)) {
    ?>
        var options = {
            fallbackLink: false,
            height: "1000px",

            pdfOpenParams: {
                view: 'FitH',
                scrollbars: '0',
                statusbar: '0',
                navpanes: '0',
                pagemode: 'thumbs',
    <?php
    if ($roleUser != "Admin") {
        ?> toolbar: '0', <?php
    }
    ?>
            }
        };
    <?php
    if ($roleUser == "Postulant" || $roleUser == "Admin") {
        $offres = "postulant";
        $file = "details";
        if ($this->uri->segment(3) == "offres") {
            $offres = "offres";
            $file = "details";
        }
    } else {
        $offres = "offres";
        $file = "details";

        if ($this->uri->segment(3) == "cv") {
            $offres = "postulant";
            $file = "details";
        }
    }
    ?>
        function loadPDF(link)
        {
            $(document).ready(function(){
                $('#ob').html('<div class="alert alert-primary bg-blue"><center><i class="fa fa-infos"></i><br>En cours de chargement du cours.<br> Veuillez patienter...</center></div>');
            
                setTimeout(function(){
                    new PDFObject.embed("<?= base_url() ?>assets/cours/" + link, "#ob", options);
                },3000)
            })
            
        }
        loadPDF("<?= $CI->parties->getfirstDatabyCours($lists, 'details'); ?>")

    <?php
}

if (isset($ex)) {
    ?>
        var options = {
            fallbackLink: false,
            height: "1000px",

            pdfOpenParams: {
                view: 'FitH',
                scrollbars: '0',
                statusbar: '0',
                navpanes: '0',
                pagemode: 'thumbs',
    <?php
    if ($roleUser != "Admin") {
        ?> toolbar: '0', <?php
    }
    ?>
            }
        };
    <?php
    if ($roleUser == "Postulant" || $roleUser == "Admin") {
        $offres = "postulant";
        $file = "details";
        if ($this->uri->segment(3) == "offres") {
            $offres = "offres";
            $file = "details";
        }
    } else {
        $offres = "offres";
        $file = "details";

        if ($this->uri->segment(3) == "cv") {
            $offres = "postulant";
            $file = "details";
        }
    }
    ?>
        function loadPDF(link)
        {
            new PDFObject.embed("<?= base_url() ?>assets/exos/" + link, "#ob", options);
        }
        loadPDF("<?= $CI->exos->getfirstDatabyExos($ex, 'details'); ?>")

    <?php
}
?>

        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: true // default
        })
        wow.init();

    $(document).ready(function () {

        $('#openADD').on('click', function(){
            $('#blockADD').slideToggle('fast');
            $('#blockADD2').slideToggle('fast');
        });

        $('#rangeVal').on('change', function(){
            var val = $(this).val()
            if(val <= 2){
                var dif = "Facile"
            }
            if(val > 2 && val <= 5){
                var dif = "Normale"
            }
            if(val > 5 && val <= 8){
                var dif = "Difficile"
            }
            if(val > 8){
                var dif = "Tres Difficile"
            }
            $('#rsVal').html('<span class="badge badge-success badge-pill">'+dif+' (:'+val+')</span>')
        });

        //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

        $('.delete').on('click', function(e){
            var $this = $(this)
            e.preventDefault()
            if(confirm("Voulez vous vraimant supprimer cet element ?")){
               var id= $this.attr('data-id')
               var ele= $this.attr('data-ele')

               $.ajax({
                type: 'POST',
                url: "",
                data: {'id':id, 'ele':ele, 'deleteEle':''},
                success: function (data) {
                    if (data != 0) {
                        alert('Element Supprimer avec succes !')
                        window.location.reload()
                    } else {
                        alert('Echec lors de la suppression de lelement')
                    }
                }
                });

            }else{
                return false;
            }
        })

        $('.reduise').click();

        // mini slider for elements items.

        $('.contact').on('click', function(){
            $('.contlist').fadeToggle()
        })

        $('.sender').on('click', function(){
            var id = $(this).attr('data-user')
            $('#iddirectchat').val(id)
            directchat()
            $('.contact').click()
        })

    //setInterval(function(){
        if($(document).width() <= 983)
        {
            $('.menuSmall').hide();
            $('.openSmall').show();
        }else{
            $('.menuSmall').show();
            $('.openSmall').hide();            
        }

        $('.openSmall').on('click', function(){
            $('.menuSmall').css({'position':'fixed', 'z-index':'999', 'top':'95px', 'bottom':'0', 'right':'0', 'background':'#fff', 'overflow-y':'auto'});
            $('.menuSmall').fadeToggle('fast');
        });
    //},500)

        $('.partiesCchoise').on('change', function () {
            var id = $(this).val()
            $.ajax({
                type: 'POST',
                url: "",
                data: {'getOneDatabyCours': '', 'id': id},
                //contentType: "application/json",
                //dataType: 'json',
                success: function (data) {
                    if (data != 0) {
                        loadPDF(data)
                    } else {

                    }
                }
            })
        });


        $('.zs_form').zsForm();

        $('.mdc-expansion-panel').hide()
        $('.mdc-drawer-item').attr('data-toggle', 'expansionPanel').on('click', function () {
            $('.mdc-expansion-panel').hide()
            $(this).find('.mdc-expansion-panel').show()
        })

        function vumess(user2) {
            $.ajax({
                type: 'POST',
                url: "",
                data: {'vuMess': '', 'Use_id2': user2},
                //contentType: "application/json",
                //dataType: 'json',
                success: function (data) {
                    //alert(data)
                    if (data != 0) {
                        retriveMess()
                        //alert('ok')
                    } else {
                        //alert('no')
                    }
                }
            })
        }

        $('#addMess').on('submit', function (e) {
            e.preventDefault();
            var $this = $(this)
            //alert(3)
            $.ajax({
                type: 'POST',
                url: "",
                data: $this.serialize(),
                //contentType: "application/json",
                //dataType: 'json',
                success: function (data) {
                    //alert(data)
                    if (data != 0) {
                        retriveMess()
                        $this.find('#inputChat').val("")
                    } else {
                        alert('no')
                    }
                }
            })
        });

        $('.messThumb').on('click', function(){
            var actual = $('#inputChat').val()
            var texte = $(this).attr('data-value')

            $('#inputChat').val(actual+' '+texte)
            //$('#addMess').submit()
        });

    $('.objetMess').hover(function(){
       $(this).find('.deleteMess').fadeIn(); 
    })

                $('.table').DataTable({
//                                dom: 'Bfrtip',
//                                buttons: [
//                                    'copy', 'csv', 'excel', 'pdf', 'print'
//                                ],

                    "responsive": false,
                    "bPaginate": true,
                    //"sPaginationType": "full_numbers",
                    "bLengthChange": false,
                    "bSort": true,
                    "bFilter": true,
                    "bInfo": false,
                    "bRetrieve": true,
                    "bAutoWidth": true,
                    "iDisplayLength": 20,
                    "bUrl": "",
                    "oLanguage": {
                        "sDecimal": "",
                        "sEmptyTable": "Aucune donnée disponible dans la Base de donnée",
                        "sInfo": " De: _START_ à:  _END_ Sur: _TOTAL_ Données",
                        "sInfoEmpty": "<?= t("resultat") ?>: 0",
                        "sInfoFiltered": "(<?= t("recherche_sur_un_total") ?> de _MAX_ <?= t("donnees") ?>)",
                        "sInfoPostFix": "",
                        "sThousands": ",",
                        "sLengthMenu": "Afficher _MENU_ Données",
                        "sLoadingRecords": "En cours de chargement...",
                        "sProcessing": "Processing...",
                        "sSearch": "<?= t("recherche_globale") ?>: &nbsp;",
                        "sZeroRecords": "<?= t("Aucune_donnée_trouvé") ?>",
                        "oPaginate": {
                            "sFirst": "Debut",
                            "sLast": "Fin",
                            "sNext": "Suiv",
                            "sPrevious": "Prec"
                        },
                        "Aria": {
                            "sortAscending": ": activate to sort column ascending",
                            "sortDescending": ": activate to sort column descending"
                        }
                    },

                    "bStateSave": true,
                });
            })
</script>

<script>
    $(document).ready(function () {

        if($(document).width() < 800){
            $('.zone-menu').removeClass('mdc-persistent-drawer--open')
            $('.content-wrapper').addClass('drawer-minimized')
            $('.mdc-toolbar__menu-icon').on('click', function(){
                $('.content-wrapper').addClass('drawer-minimized')
            });  
        } 

        $('#support').change(function (e) {
            e.preventDefault();
            var $this = $(this);
            var ext = ['pdf', 'PDF', 'jpg', 'gif', 'bmp', 'png'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), ext) === -1) {
                alert('Erreur: Format non Valide image ou PDF requis');
                $this.val("");
            } else {
            }
        });

        $(".choose_image").click(function (e) {
            $("#images").click();
            e.preventDefault();
        });

        $('#images').change(function (e) {
            e.preventDefault();
            var $this = $(this);
            var ext = ['png', 'jpeg', 'jpg', 'gif', 'bmp'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), ext) === -1) {
                alert('Erreur: Format non Valide image requise');
                $this.val("");
                $('.cropped_image').fadeOut();
                $('#imgprofile').fadeIn();
                $('#upload-image').hide();
                $('#upload-imageProfile').hide();
            } else {
                $('#imgprofile').hide();
                $('#upload-image').fadeIn();
                $('.cropped_image').fadeIn();
                $('#upload-imageProfile').fadeIn();
            }
        });
    });

    $(document).ready(function () {
        $image_crop = $('#upload-imageProfile').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square'
            },
            boundary: {
                width: 250,
                height: 250
            },
            showZoomer: true,
            enableResize: true,
            enableOrientation: true
        });

        //$image_crop.croppie('bind');
        $image_crop.croppie('setZoom', 1.0);

        $("#RotateAntiClockwise").on("click", function () {
            $image_crop.croppie('rotate', -90);
        });
        $("#RotateClockwise").on("click", function () {
            $image_crop.croppie('rotate', 90);
        });

        $('#images').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                $image_crop.croppie('bind', {
                    url: e.target.result,
                    orientation: 4
                }).then(function () {
                    console.log('jQuery bind complete');
                });

                $image_crop.result('blob').then(function (blob) {
                    // do something with cropped blob
                });
            }
            reader.readAsDataURL(this.files[0]);
        });

        $('.cropped_imageUsers').on('click', function (ev) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (response) {
                $.ajax({
                    url: "",
                    type: "POST",
                    data: {"imageP": response, "addProfile": ""},
                    success: function (data) {
                        alert(data);
                        window.location.reload();
                    }
                });
            });
        });

        $('.edit-elemt').on('click', function () {
            var id = $(this).attr('id');
            var table = $(this).attr('data-edit');
            $('.data-edit').attr('', function () {
                var $this = $(this);
                var elem = $this.attr("data-elmt");
                //alert(elem);
                $.ajax({
                    url: "",
                    type: "POST",
                    data: {"id": id, "table": table, "elem":elem, "getAlloneDataById": ""},
                    success: function (data) {
                        $this.val(data);
                    }
                });
            });
        });
    });
</script>

</body>

<style>
    .crop_preview {
        background: #e1e1e1;
        width: 100%;
        padding: 30px;
        max-height: 500px;
        margin-top: 30px
    }

    .cropped_image {
        display: none;
    }

    #upload-image, #upload-imageProfile {
        display: none;
    }
</style>

<style>
    .form-inline {
        display: -ms-flexbox;
        display: block;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    }

    .paginate_button{
        background:#f5f5f5;
        cursor:pointer;
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 0px solid transparent;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        border-radius: .25rem;
        transition: all .15s ease-in-out;
        margin:5px;
    }
</style>

</html>