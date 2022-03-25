
    <section id="contact" class="s-contact" data-parallax="scroll" data-image-src="/images/contact-bg.jpg" data-natural-width=1920 data-natural-height=1920 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>
        <div class="contact__line"></div>

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


    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo h3">
                  <a href="#top"><span class="yellow">100R</span>efugees<span class="yellow">.</span></a>
                </div>
                <?php echo $text->footer[0]; ?>
            </div>

            <br><br>
            <p><?php  echo $text->footer[1]; ?><br><br>
                <?php echo $text->footer[2]; ?></p>

          </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© 100Refugees <?php echo date('Y'); ?></span> 
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>

    </footer> 