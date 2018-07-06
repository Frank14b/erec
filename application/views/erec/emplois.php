
<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background: url(<?=base_url()?>assets/images/Job-Search-SB.jpg)center/cover;" data-stellar-background-ratio="0.3">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2><?=t("slide2h")?></h2>
				   					<h1><?=t("emploisStage")?></h1>
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

<style>
   .about input[type="text"], .about select {
    height: 40px;
    margin-bottom:8px;
    margin-left:25px;
    color: #fff;
}
</style>


<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="about-flex">
						<div class="col-one-forth aside-stretch animate-box" style="background:#2C2E3E;">
							<div class="row">
								<div class="col-md-12 about">
									<h2 style="color:#fff"><?=t("votreCV")?></h2>
                                    <form method="POST" action="" class="addoffres zs_form check_form addmyoffres" enctype="multipart/form-data">
                            <div class="row form-group">
								<div class="col-md-12 padding-bottom">
									<input type="text" id="fname" class="form-control" required placeholder="<?=t("votre_nom")?> complet" style="background:#fff; color:#333;border:0px; border-radius:5px;">
								</div>
								<div class="col-md-12">
									<input type="text" id="email" class="form-control" required placeholder="<?=t("email")?>" style="background:#fff; color:#333;border:0px; border-radius:5px;">
								</div>
							</div>
                            <div class="form_groupe form-group offbtn" style=" margin-top:-55px;">
                                <div class="form_icone" style="color:#444; margin-left:35px; color:#aaa">
                                    <i class="icon icon-file" style=" float:right;"></i>
                                </div>
                                <div class="form_element">
                                    <label for="file" class="zs_label file" style="color:#aaa">PDF du CV</label>
                                    <input type="file" name="icone" id="file" class="zs_file" multiple/>
                                </div>
                            </div>
                            <div class="row form-group">
								<div class="col-md-12 padding-bottom">
									<select name="secteur" class="form-control">
                                        <option selected disabled>-- Choisir votre poste pourvu --</option>
                                    </select>
								</div>
								<div class="col-md-12"><br>
									<button type="submit" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="bottom" title="Cliquer pour effectuer un enregistrement"><i class="icon icon-upload"></i>&nbsp;<?=t('form_valider')?></button>
								</div>
							</div>
                                    </form>
								</div>
							</div>
						</div>
						<div class="col-three-forth animate-box">
							<h2><?=t("nosOffres")?></h2>
							<div class="row">
								<div class="col-md-12">
									<p><b>EREC-CAMEROUN</b> vous permet d'ameliorer vos capacités professionnelles et academiques par le biai des stages. Vous y trouverez ce dont vous avez besoin pour parfaire votre CV et atteindre vos objectifs.</p>
                                    <p>En besoin d'effectif nous lancons des recrutements pour augmenter notre force de frappe et mener a bien nos missions.</p>

                <div class="container" style="margin-top:-30px">
				<div class="row no-gutters">
                    <div class="col-md-8 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-postcard"></i>
							</span>
							<h3>EREC - Cameroun</h3>
							<p><?=t("aucuneOffre")?> ...</p>
							<button class="btn btn-primary btn-outline"><?=ucfirst(t("obtenirStage"))?></button>
						</div>
					</div>
                </div>
                </div>
                                    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>