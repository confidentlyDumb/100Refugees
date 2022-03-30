<section id="home" class="s-home target-section bb-yellow" data-parallax="scroll" data-image-src="/images/help-bg.jpg" data-natural-width=1920 data-natural-height=1280 data-position-y=center>

    <div class="overlay"></div>
    <div class="shadow-overlay"></div>

    <div class="home-content">

        <div class="row home-content__main">

            <h3><?php echo $text->help->sub1; ?></h3>

            <h1>
              <?php echo $text->help->hed1; ?>
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

<section id="clients" class="s-clients separate bb-yellow">


    <div class="row" data-aos="fade-up">
        <div class="col-full">

          <?php althelp_build($text->help->bod1); ?>
            
        </div> 
    </div>

</section>
