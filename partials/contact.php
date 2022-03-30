<section id="contact" class="s-contact bb-yellow" data-parallax="scroll" data-image-src="/images/contact-bg.jpg" data-natural-width=1920 data-natural-height=1920 data-position-y=center>

  <div class="overlay"></div>
  <div class="shadow-overlay"></div>

  <div class="row section-header" data-aos="fade-up">
      <div class="col-full">
          <h1 class="display-2 display-2--light">
          <?php echo $text->cont->hed1; ?>
          </h1>
      </div>
  </div>

  <div class="row contact-content" data-aos="fade-up">
      
      <div class="contact-primary">

          <h3 class="h6"><?php echo $text->cont->sub1; ?></h3>

          <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
              <fieldset>

              <?php cont_build($text->cont->form); ?>

              
              <div class="form-field">
                  <button class="full-width btn--primary">Submit</button>
                  <div class="submit-loader">
                      <div class="text-loader">Sending...</div>
                      <div class="s-loader">
                          <div class="bounce1"></div>
                          <div class="bounce2"></div>
                          <div class="bounce3"></div>
                      </div>
                  </div>
              </div>

              </fieldset>
          </form>

          <div class="message-warning">
          <?php echo $text->notif->fail; ?>
          </div> 
      
          <div class="message-success">
          <?php echo $text->notif->success; ?>
          </div>

      </div>

      <div class="contact-secondary">
          <div class="contact-info">

              <h3 class="h6 hide-on-fullwidth"><?php echo $text->cont->sub2; ?></h3>

              <div class="cinfo">
                  <h5><?php echo $text->cont->mail; ?></h5>
                  <p>
                  anibal@charlesrobotics.com
                  </p>
              </div>

              <div class="cinfo">
                  <h5><?php echo $text->cont->call; ?></h5>
                  <p>
                    +3197010259000
                  </p>
              </div>

              <ul class="contact-social">
                  <li>
                      <a href="#void"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                      <a href="#void"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                      <a href="#void"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
              </ul>

          </div>
      </div>

  </div>

</section>