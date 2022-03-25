<section id="home" class="s-home target-section bb-yellow" data-parallax="scroll"
         data-image-src="https://images.unsplash.com/photo-1625014618427-fbc980b974f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2864&q=80"
         data-natural-width=1920 data-natural-height=1280 data-position-y=center>

    <div class="overlay"></div>
    <div class="shadow-overlay"></div>

    <div class="home-content">

        <div class="row home-content__main">

            <h3><span id="typed3"></span></h3>

            <h1>
                <?php echo $text->cookies->hed1; ?>
            </h1>


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

<section id='works' class="s-works">

  <div class="row" data-aos="fade-up">
    <div class="row narrow section-intro add-bottom text-center about-desc">

      <div class="col-twelve tab-full">
        <br><br>

        <h1 class="display-2"><?php echo $text->cookies->hed2; ?></h1>
        <p class="lead"><?php echo $text->cookies->desc; ?></p>
      </div>

    </div>

    <div class="row cookies">
      <?php cookies_build($text->cookies->typs); ?>
      <br><br><br><br>
    </div>

</section>