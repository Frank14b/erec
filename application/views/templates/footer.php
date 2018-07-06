        <div id="colorlib-subscribe" style="background-image: url(<?=base_url()?>assets/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2><?=t("soucrireNewsletter")?></h2>
						<p><?=t("soucrireNewslettertext")?></p>
						<form class="form-inline qbstp-header-subscribe" id="subscribe" method="post">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input required type="email" name="email" class="form-control" id="email" placeholder="Entrer votre email">
										<button type="submit" class="btn btn-primary" id="pash"><?=t("souscrire")?></button>
										<button type="button" disabled class="btn btn-info disabled" id="raponse"></button>
									</div>
								</div>
							</div>
							<input type="hidden" name="addNewsletter"/>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo" style="padding-bottom:0px;">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>EREC - Cameroun</h4>
						<p><?=substr(t("home-quisomnous"), 0, 150)?> ...</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4><?=t("filiales")?></h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">EREC Elec</a></li>
								<li><a href="#">EREC Provenderie</a></li>
								<li><a href="#">EREC Ferme</a></li>
								<li><a href="#">EREC Snack</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4><?=t("nosLocaux")?></h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a><i class="icon-world"></i>&nbsp; Yaounde</a></li>
								<li><a><i class="icon-world"></i>&nbsp; Bafoussam</a></li>
								<li><a><i class="icon-world"></i>&nbsp; Limbe</a></li>
								<li><a><i class="icon-world"></i>&nbsp; Bamenda</a></li>
								<li><a><i class="icon-world"></i>&nbsp; Nkongsamba ...</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2">
					    <h4><?=t("partenaire")?></h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a target="_blank" href="https://eneocameroon.cm/"><i class="icon-world"></i>&nbsp; ENEO</a></li>
								<li><a target="_blank" href=""><i class="icon-world"></i>&nbsp; NUSCIENCE</a></li>
								<li><a target="_blank" href=""><i class="icon-world"></i>&nbsp; CAMWATER</a></li>
								<li><a href="http://www.enielecsarl.fr/" target="_blank"><i class="icon-world"></i>&nbsp; ENI-ELEC</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Direction : Agence Marche B, Bafoussam, Derriere Avenir<br> </li>
							<li><a href="tel:237 699 99 00 99"><i class="icon-phone"></i>&nbsp; + 237 699 99 00 99</a></li>
							<li><a href="tel:237 699 99 00 99"><i class="icon-phone"></i>&nbsp; + 237 699 99 00 99</a></li>
							<li><a href="mailto:service@ereccameroun.com"><i class="icon-envelope"></i>&nbsp; service@ereccameroun.com</a></li>
							<li><a href="#"><i class="icon-world"></i>&nbsp; www.ereccameroun.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Made by <a target="_blank" href="https://facebook.com/donald.demanou.7">Donald Demanou</a> & <a target="_blank" href="https://facebook.com/franck.meteeb">Frank Donald Fontcha</a>.<!--This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<!--<span class="block">Demo <?=base_url()?>assets/images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>-->
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?=base_url()?>assets/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url()?>assets/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?=base_url()?>assets/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="<?=base_url()?>assets/js/main.js"></script>
	<!-- zonetyle form js -->
	<script src="<?=base_url()?>assets/js/myJs.js"></script>
    <!--
	<script src="<?= base_url() ?>assets/mdb/js/mdb.js"></script>-->

	<script>
	    $(document).ready(function(){
			$('.zs_form').zsForm();

			$('#addMess').on('submit', function (e) {
            e.preventDefault();
            var $this = $(this)
			$this.find('#reponse').html('Patienter...')
			$this.find('#push').hide()
			$this.find('#reponse').show()
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
						$this.find('#reponse').html('Succes')
                        $this.find('.form-control').val('')
                    } else {
                        alert("Echec lors de l'envoi du message veuillez reessayer plutard.")
						$this.find('#push').show()
			            $this.find('#reponse').hide()
                    }
                }
            })
            });

			$('#subscribe').on('submit', function (e) {
            e.preventDefault();
            var $this = $(this)
			$this.find('#raponse').html('Patienter...')
			$this.find('#pash').hide()
			$this.find('#raponse').show()
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
						$this.find('#raponse').html('Succes')
                        $this.find('.form-control').val('')
                    } else {
                        alert("Echec lors de l'enregistrement a la newsletter")
						$this.find('#pash').show()
			            $this.find('#raponse').hide()
                    }
                }
            })
            });
		});
	</script>

	</body>
</html>