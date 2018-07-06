
<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background: url(<?=base_url()?>assets/images/cintiq22hd-hands-on-f.jpg)center/cover;" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2><?=t("slide2h")?></h2>
				   					<h1><?=t("aproposdeNous")?></h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
        </aside>

        <div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="icon icon-question"></i> Qui Sommes Nous ?</a></li>
								<!--<li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
								<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li>
								<li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Cruises</a></li>-->
							</ul>
						</div>
						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
				              	<div class="row">
                                <div class="col-md-1"></div>
				              	<div class="col-md-8" style="color:#fff">
                                      <center>
                                          <p><?=t("home-quisomnous")?></p>
                                      </center>
                                </div>
                                <div class="col-md-1"></div>
				                <div class="col-md-2">
				                  <button type="button" class="btn btn-primary btn-block"><?=t("home-moreDetails")?></button>
				                </div>
				                </div>
				            </div>
			            </div>
					</div>
				</div>
			</div>
        </div>

<?php
if ($this->uri->segment(3) != null) {
	$val = $this->uri->segment(3);
	//echo $val;
}
?>
<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="about-flex">
						<div class="col-one-forth aside-stretch animate-box">
							<div class="row">
								<div class="col-md-12 about">
									<h2><?=t("apropos")?></h2>

									<ul>
										<li><a class="btn <?php if(!isset($val))echo'btn-primary';?>" href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? "fr"?>/apropos"><?=t("general")?></a></li>
										<li><a class="btn <?php if(isset($val)){{if($val == "staff")echo'btn-primary';}} ?>" href="<?=base_url()?><?=$_SESSION['abbr_lang'] ?? "fr"?>/apropos/staff#equipe"><?=t("staff")?></a></li>
										<li><a class="btn" href="#"><?=t("discussion")?></a></li>
										<li><a class="btn" href="#"><?=t("services")?></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-three-forth animate-box" id="equipe">
							<?php
							   if(isset($val)){
								   if($val == "staff"){
									   ?>
									   <div class="row">
									   <h2><?=t("staff")?></h2>
		<div id="colorlib-hotel">
				<div class="row" style="margin-top:-45px;">
				<div class="col-md-12 animate-box">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2><?= t("hauteInstance") ?> EREC-Cameroun</h2>
						<p><?= t("quiContacter") ?>.</p>
					</div>
				</div>
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a class="hotel-img hover" style="background-image: url(<?=base_url()?>assets/images/img_bg_1.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> 24h/7</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">MEKONKEU Louise</a></h3>
										<span class="place">PDG EREC - Cameroun</span>
										
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a class="hotel-img hover" style="background-image: url(<?=base_url()?>assets/images/img_bg_1.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> 24h/7</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">FOTEM TSAGUE Billy</a></h3>
										<span class="place">PD, Adjoint EREC - Cameroun</span>
										<p></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a class="hotel-img hover" style="background-image: url(<?=base_url()?>assets/images/img_bg_1.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> 24h/7</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">DEMANOU Maurice</a></h3>
										<span class="place">D.A.F EREC - Cameroun</span>
										<p></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a class="hotel-img hover" style="background-image: url(<?=base_url()?>assets/images/img_bg_1.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> 24h/7</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">TEMATIO Etienne</a></h3>
										<span class="place">Chef du Personnel EREC - Cameroun</span>
										<p></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a class="hotel-img hover" style="background-image: url(<?=base_url()?>assets/images/img_bg_1.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> 24h/7</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">KANA TEFO Claude</a></h3>
										<span class="place">Chef Base Ngaoundere EREC - Cameroun</span>
										<p></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a class="hotel-img hover" style="background-image: url(<?=base_url()?>assets/images/img_bg_1.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> 24h/7</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">DJUNTU Gabriel G.</a></h3>
										<span class="place">Chef Base Yaounde EREC - Cameroun</span>
										<p></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a class="hotel-img hover" style="background-image: url(<?=base_url()?>assets/images/img_bg_1.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> 24h/7</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">MOMO SOFFACK J.C.</a></h3>
										<span class="place">Chef Base Nkonsamgba EREC - Cameroun</span>
										<p></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
								   </div>

									   <?php 
								   }
							   }else{
								   ?>

							<h2><?=t("general")?></h2>
							<div class="row">
								<div class="col-md-12" style="text-align:justify;">
									<p><b>EREC-CAMEROUN</b> definit comme Etude et Realisation Electriques du Cameroun est une entreprise de construction et d'entretien des réseaux MT/BT, de Branchements BT, d'elagage, de Bâtiment, TP et de commerce general. Nous répondons aux besoins de nos clients pour chaque projet en travaillant dur et en utilisant nos années d'expériences dans l'industrie. Nous fournissons à nos clients des options créatives qui vous feront économiser du temps et de l'argent. Notre siège principal est dans la ville de Bafoussam au Cameroun derriere la pharmacie salvia.</p>

									<div class="row row-pb-sm">
									    <div class="col-md-6">
											<img class="img-responsive" src="<?=base_url()?>asset/images/hotel-7.jpg" alt="">
										</div>
										<div class="col-md-6">
										    <p>La plupart d'entre nous ne peuvent pas imaginer la vie sans électricité. Ainsi, lorsque votre appareil est en baisse vous devez être en mesure de trouver immédiatement un électricien pour vous aider à résoudre le problème. Quel est la meilleure entreprise de votre région pour fournir un travail de qualité électrique à bas prix ? Ne cherchez plus car <b>EREC-CAMEROUN</b> est la pour vous ! Nous avons une équipe de professionnels expérimentés dans leur domaine prêt à répondre à vos besoins électriques.</p>
								        </div>
									</div>

									<p>A <b>EREC-CAMEROUN</b> votre carrière prend une nouvelle direction "Ascendante". En effet, nous offrons plus que les autres: à savoir, plus d'occasion, plus de défi et plus de perspertives. Nous sommes toujours à l'affût des plus performants avec des attentes très élevées.</p>
								</div>
							</div>

								   <?php
							   }
							?>
							
						</div>
					</div>
				</div>
			</div>
		</div>