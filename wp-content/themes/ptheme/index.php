<?php get_header(); ?>
	<div class="content-area main section-main">
      <section class="slide section_banner--top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <picture><img src="medias/images/hptop.png" alt=""></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="services section_banner--apropos">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <picture><img src="medias/images/img1.png" alt=""></picture>
            </div>
            <div class="col-sm-6">
              <h2>à propos</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="services section_banner--law">
        <div class="container">
          <div class="lawlogos">
            <div class="row">
              <div class="col-sm-3" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-sine">
                <div class="logolaw">
                  <div class="lawcontent">
                    <div class="lawimg">
                      <picture><img src="medias/images/law1.png" alt=""></picture>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3" data-aos="fade-right" data-aos-duration="400" data-aos-easing="ease-in-sine">
                <div class="logolaw">
                  <div class="lawcontent">
                    <div class="lawimg">
                      <picture><img src="medias/images/law2.png" alt=""></picture>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3" data-aos="fade-left" data-aos-duration="400" data-aos-easing="ease-in-sine">
                <div class="logolaw">
                  <div class="lawcontent">
                    <div class="lawimg">
                      <picture><img src="medias/images/law3.png" alt=""></picture>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3" data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-in-sine">
                <div class="logolaw">
                  <div class="lawcontent">
                    <div class="lawimg">
                      <picture><img src="medias/images/law4.png" alt=""></picture>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="middle-area section_banner--contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-container">
                <form name="frmContact" id="" method="post" action="" enctype="multipart/form-data" onsubmit="return validateContactForm()">
                  <div class="input-row">
                    <label>votre nom<span class="info" id="userName-info"></span><br>
                      <input class="input-field" id="userName" type="text" name="userName">
                    </label>
                  </div>
                  <div class="input-row">
                    <label>Email<span class="info" id="userEmail-info"></span><br>
                      <input class="input-field" id="userEmail" type="text" name="userEmail">
                    </label>
                  </div>
                  <div class="input-row">
                    <label>Subject<span class="info" id="subject-info"></span><br>
                      <input class="input-field" id="subject" type="text" name="subject">
                    </label>
                  </div>
                  <div class="input-row">
                    <label>Message<span class="info" id="userMessage-info"></span><br>
                      <textarea class="input-field" id="content" name="content" cols="60" rows="6"></textarea>
                    </label>
                  </div>
                  <div>
                    <input class="btn-submit" type="submit" name="send" value="Send">
                    <div id="statusMessage"></div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15626.22593297906!2d-5.961130325700553!3d34.57863015249453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0a6e5fa2b2251d%3A0x8wa47ad294f2c3db7!2sMechra%20Bel%20Ksiri!5e0!3m2!1sfr!2sma!4v1611538186595!5m2!1sfr!2sma" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>	
		</section>
	</div>
<?php get_footer(); ?>