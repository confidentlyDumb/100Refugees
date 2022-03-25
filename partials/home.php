
<section id="home" class="s-home target-section bb-yellow" data-parallax="scroll" data-image-src="/images/header-bg.jpg" data-natural-width=1920 data-natural-height=1280 data-position-y=center>

    <div class="overlay"></div>
    <div class="shadow-overlay"></div>

    <div class="home-content">

        <div class="row home-content__main">

            <h3><span id="typed1"></span></h3>

            <h1>
                <?php echo $text->hero->hed1; ?>
            </h1>

            <div class="home-content__buttons">
                <a href="#contact" class="smoothscroll btn btn--stroke">
                    <?php echo $text->hero->btn1; ?>
                </a>
                <a href="#about" class="smoothscroll btn btn--stroke">
                    <?php echo $text->hero->btn2; ?>
                </a>
            </div>

        </div>

        <div class="home-content__scroll">
            <a href="#about" class="scroll-link smoothscroll">
                <span><?php echo $text->hero->scrl; ?></span>
            </a>
        </div>

        <div class="home-content__line"></div>

    </div>


    <ul class="home-social">
        <li>
            <a href="#void"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
        </li>
        <li>
            <a href="#void"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
        </li>
        <li>
            <a href="#void"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
        </li>
        </li>
    </ul> 

    </section> 
    <section id='about' class="s-about bb-yellow">

    <div class="row section-header has-bottom-sep bs-yellow" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead yellow"><?php echo $text->about->sub1; ?></h3>
            <h1 class="display-1 yellow"><?php echo $text->about->hed1; ?></h1>
        </div>
    </div>

    <div class="row about-desc" data-aos="fade-up">
        <div class="col-full">
            <p class="yellow">
            <?php echo $text->about->bod1; ?>
            </p>
            <br>
            <h3 class="subhead yellow">
            <?php echo $text->about->sub2; ?>
            </h3>
            <p class="yellow">
              <span id="typed2"></span>
            </p>
            <br>
            <br>
        </div>
    </div>

    <div class="about__line"></div>

    </section>

    <section id='services' class="s-services">

    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead"><?php echo $text->work->sub1; ?></h3>
            <h1 class="display-2"><?php echo $text->work->hed1; ?></h1>
        </div>
    </div>

    <div class="row services-list block-1-2 block-tab-full">

    <?php work_build($text->work->bod1); ?>

    </div>

    </section>

    <div class="custom-shape-divider-top-1648054252">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
    </svg>
    </div>

    <section id='works' class="s-works">

    <div class="intro-wrap bb-yellow">
            
        <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
            <div class="col-full">
              <br>
                <h3 class="subhead yellow"><?php echo $text->detl->sub1; ?></h3>
                <h1 class="display-2 display-2--light"><?php echo $text->detl->hed1; ?></h1>
            </div>
        </div>
        <div class="row about-desc" data-aos="fade-up">
          <div class="col-full">
            <p><?php echo $text->detl->bod1; ?></p>
          </div>
      </div> 
    </div>

    <div class="row" data-aos="fade-up">
      <div class="row narrow section-intro add-bottom text-center about-desc">

        <div class="col-twelve tab-full">
          <br><br>

            <h1 class="display-2"><?php echo $text->detl->hed2; ?></h1>

            <p class="lead"><?php echo $text->detl->sub2; ?></p>

        </div>

      </div>
      <div class="row">

        <div class="col-six tab-full">

          <p class="drop-cap">
          <?php echo $text->detl->bod2[0]; ?>
          </p>

        </div>

        <div class="col-six tab-full">

            <p>
            <?php echo $text->detl->bod2[1]; ?>
            </p>

        </div>

    </div>

    <div class="row" data-aos="fade-up">
      <div class="row narrow section-intro add-bottom text-center about-desc">

        <div class="col-twelve tab-full">

        <p class="lead">
          <?php echo $text->detl->sub3; ?><br><br>
          <img src="/images/heart.png" class="heart_ua" alt="heart">
        </p>

        </div>

      </div>


    </section>

    <div class="custom-shape-divider-top-1648055506">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
    </svg>
    </div>

    <section id="clients" class="s-clients bb-yellow">

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead"><?php echo $text->help->sub1; ?></h3>
            <h1 class="display-2"><?php echo $text->help->hed1; ?></h1>
        </div>
    </div>

    <div class="row clients-testimonials" data-aos="fade-up">
        <div class="col-full">
            <div class="testimonials">

            <?php help_build($text->help->bod1); ?>

            </div>
            
        </div> 
    </div>

</section>