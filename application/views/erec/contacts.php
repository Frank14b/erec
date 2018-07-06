        <aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background: url(<?=base_url()?>assets/images/ray.jpg)center/cover;" data-stellar-background-ratio="0.3">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2><?=t("slide2h")?></h2>
				   					<h1><?=t("contactezNous")?></h1>
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

		<div id="colorlib-services">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 animate-box text-center aside-stretch hover-1"  style="background:#2C2E3E;">
						<div class="services" style="background:#2C2E3E;">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
							<h3 style="color:#fff"><?=t("contactezNous")?></h3>
							<p style="color:#fff"><?=t("contactezNoustext")?></p>
						</div>
					</div>
					<div class="col-md-9 animate-box text-center">
                    <div class="col-md-8 col-md-offset-2  animate-box" style="margin-top:15px;">
						<h3></h3>
						<form action="#" id="addMess" method="post">
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="fname"><?=t("votre_nom")?></label>
									<input type="text" id="fname" class="form-control" required name="nom" placeholder="Votre Nom">
								    <input type="hidden" name="ajouterMess"/>
								</div>
								<div class="col-md-6">
									<label for="email"><?=t("email")?></label>
									<input type="text" id="email" class="form-control" required name="email" placeholder="Votre Email">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-6">
									<label for="subject"><?=t("sujet")?></label>
									<input type="text" id="subject" class="form-control" required name="sujet" placeholder="Sujet du Message">
                                </div>
                                <div class="col-md-6">
									<label for="phone"><?=t("phone")?></label>
									<input type="text" id="phone" class="form-control" required name="numero" placeholder="Ex: 237-699-99-99-99">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea id="message" class="form-control" required name="texte" placeholder="Entrez votre message ici" style="max-height:130px; min-height:130px; max-width:100%;"></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" class="btn fa btn-primary" value="Envoyer le message" id="push">
								<button type="button" disabled class="btn  btn-info disabled" id="reponse"></button>
							</div>

						</form>		
                    </div>
                    
					</div>
				</div>
			</div>
        </div>