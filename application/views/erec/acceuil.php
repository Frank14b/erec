        <aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background: url(<?=base_url()?>assets/images/ec26402bc805.jpg)center/cover;" data-stellar-background-ratio="0.3">
			   		<div class="overlay" style=""></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2><?=t("slide1h")?></h2>
				   					<h1><?=t("slide1")?></h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(<?=base_url()?>assets/images/fond1.jpg);" data-stellar-background-ratio="0.3">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2><?=t("slide2h")?></h2>
				   					<h1><?=t("slide2")?></h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(<?=base_url()?>assets/images/7170795c61f1c54937d4b6c9c1032637.jpg);" data-stellar-background-ratio="0.3">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
								   <h2><?=t("slide2h")?></h2>
				   					<h1><?=t("slide3")?></h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(<?=base_url()?>assets/images/provenderie2.jpg);" data-stellar-background-ratio="0.3">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
								   <h2><?=t("slide2h")?></h2>
				   					<h1><?=t("slide4")?></h1>
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
				         <!--<div id="hotel" class="tab-pane fade">
						      <form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>Book Now</h2>
					              	 	<span>Best Price Online</span>
				              	 	</div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
						   <div id="car" class="tab-pane fade">
						   	<form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Start Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Return Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Car" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
						   <div id="cruises" class="tab-pane fade">
						      <form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Start Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Categories</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="category" id="category" class="form-control">
				                        <option value="#">Suite</option>
				                        <option value="#">Super Deluxe</option>
				                        <option value="#">Balcony</option>
				                        <option value="#">Economy</option>
				                        <option value="#">Luxury</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Cruises" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>-->
			         </div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 animate-box text-center aside-stretch">
						<div class="services">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
							<h3>EREC</h3>
							<p><?=substr(t("home-quisomnous"), 0, 160)?> ...</p>
							<button class="btn btn-default btn-sm"><?=ucfirst(t("home-moreDetails"))?></button>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-boat"></i>
							</span>
							<h3>EREC Distribution</h3>
							<p><?=substr(t("home-erecDistribution"), 0, 130)?> ...</p>
							<button class="btn btn-primary btn-outline"><?=ucfirst(t("home-moreDetails"))?></button>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-island"></i>
							</span>
							<h3>EREC Ferme</h3>
							<p><?=substr(t("home-erecFerme"), 0, 130)?> ...</p>
							<button class="btn btn-primary btn-outline"><?=ucfirst(t("home-moreDetails"))?></button>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-cocktail"></i>
							</span>
							<h3>EREC Buvette</h3>
							<p><?=substr(t("home-erecBuvette"), 0, 130)?> ...</p>
							<button class="btn btn-primary btn-outline"><?=ucfirst(t("home-moreDetails"))?></button>
						</div>
					</div>
				</div>
			</div>
        </div>

        <div id="colorlib-intro" class="intro-img" style="background-image: url(<?=base_url()?>assets/images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">99</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">de</span>
										</div>
										<h4 class="text-sale" style="font-size:2.6em"><?=t("Garantie")?></h4>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title"><?=t("beElectify")?></h3>
									<p><?=t("beElectifyText")?></p>
									<p><a href="#" class="btn btn-primary"><?=ucfirst(t("apropos"))?></a> <a href="#" class="btn btn-primary btn-outline"><?=t("nousContacter")?></a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="video-wrap">
							<div class="video colorlib-video" style="background-image: url(<?=base_url()?>assets/images/img_bg_2.jpg);">
								<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video"></i></a>
								<div class="video-overlay"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!--<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Recent Blog</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="blog-flex">
					<div class="f-entry-img" style="background-image: url(<?=base_url()?>assets/images/blog-3.jpg);">
					</div>
					<div class="blog-entry aside-stretch-right">
						<div class="row">
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(<?=base_url()?>assets/images/blog-1.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>A Definitive Guide to the Best Dining</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(<?=base_url()?>assets/images/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>How These 5 People Found The Path to Their Dream Trip</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(<?=base_url()?>assets/images/blog-4.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>Our Secret Island Boat Tour Is just for You</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->

		<!--<div id="colorlib-hotel">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Recommended Hotels</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(<?=base_url()?>assets/images/hotel-1.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(<?=base_url()?>assets/images/hotel-2.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(<?=base_url()?>assets/images/hotel-3.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(<?=base_url()?>assets/images/hotel-4.jpg);">
										<p class="price"><span>EREC-Cameroun</span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
										<h3><a href="#">Hotel Edison</a></h3>
										<span class="place">New York, USA</span>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->

		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2><?=t("clientSatisfait")?></h2>
						<p><?=t("soyezSatisfait")?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box">
						<div class="owl-carousel2">
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(<?=base_url()?>assets/images/person1.jpg);"></span>
									<span class="user">Alysha Myers</span>
									<small>Miami Florida, USA</small>
									<blockquote>
										<p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(<?=base_url()?>assets/images/person2.jpg);"></span>
									<span class="user">James Fisher</span>
									<small>New York, USA</small>
									<blockquote>
										<p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(<?=base_url()?>assets/images/person3.jpg);"></span>
									<span class="user">Jacob Webb</span>
									<small>Athens, Greece</small>
									<blockquote>
										<p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-subscribe" style="background-image: url(<?=base_url()?>assets/images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2><?=t("partenaire")?></h2>
						<p><?=t("partenaireText")?></p>
					</div>
				</div>
				<div class="row">
				<div class="tour-wrap">
				<div class="col-md-2"></div>
				<div class="col-md-10">
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background: url(<?=base_url()?>assets/images/img/3.jpg)center/cover;">
					</div>
					<span class="desc">
						<p class="star" style="color:#fff"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
						<h2 style="color:#fff">ENEO</h2>
						<span class="city" style="color:#fff">Cameroun, Afrique</span>
						<span class="price" style="color:#fff">24h/24</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background: url(<?=base_url()?>assets/images/img/Logo-nuscience-safe-innovation-nutrition-XL.jpg)center/cover;">
					</div>
					<span class="desc">
						<p class="star" style="color:#fff"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
						<h2 style="color:#fff">Nuscience group</h2>
						<span class="city" style="color:#fff">Belgique, Europe</span>
						<span class="price" style="color:#fff">24h/24</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background: url(<?=base_url()?>assets/images/img/camwater270415460-460x445.jpg)center/cover;">
					</div>
					<span class="desc">
						<p class="star" style="color:#fff"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
						<h2 style="color:#fff">CAMWATER</h2>
						<span class="city" style="color:#fff">Cameroun, Afrique</span>
						<span class="price" style="color:#fff">24h/24</span>
					</span>
				</a>
				</div>
			</div>
				</div>
			</div>
		</div>

		<div class="colorlib-tour" style="margin-bottom:-160px;">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2><?=t("recenteTaches")?></h2>
						<p><?=t("soyezSatisfait")?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="f-tour">
							<div class="row row-pb-md">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0008.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Bafousssam</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0016.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Foumban</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0005.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Bafoussam</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0029.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Limbe</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0025.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Mindourou</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0020.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Nkongsamba</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Cameroun, Afrique</h3>
												<p><?=t("operationText")?></p><br>
											</div>
											<div class="col-md-12">
												<h4><?=t("bestRelease")?></h4>
												<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0028.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Mbouda</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0022.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Bamenda</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0017.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Bafoussam</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(<?=base_url()?>assets/images/img/IMG-20180430-WA0026.jpg);">
												<div class="desc">
													<h3></h3>
													<p class="price"><span>EREC-Cameroun</span> <small>/ Mindourou</small></p>
												</div>
											</a>
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
		</div>
