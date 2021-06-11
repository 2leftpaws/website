<?php get_header( 'header.php' ); ?>
  
    <a href="javascript:" id="myBtn"><i class="icon-chevron-up"></i></a>  
      <header>
          <div class="nav-bar-links">
          <div class="container">
              <div class="row">
                  <div class="col-12 pl-0 pr-0">
                    <nav class="navbar navbar-expand-lg navbar-light navbar-dark">
                        <a id="name_twoleftpaws" class="navbar-brand text-white" href="#">2leftpaws
                          <button id="mobile_light_mode" type="button" class="btn btn-outline-danger">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lightning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
                          </svg>
                        </button>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="#about-me">about me <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#projects">projects</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#contact-me">contact</a>
                            </li>
                          </ul>
                        </div>
                        <button id="desktop_light_mode" type="button" class="btn btn-outline-danger">Light it up
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lightning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
                          </svg>
                        </button>
                      </nav>
                  </div>
              </div>
          </div>
        </div>
      <div id="about_me" class="about-me mt-3 mb-3">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 id="hey_there" class="h1 text-white title-about-me">
              <div id="about_me_photo"></div>
            <?php
            // $post_id = 20;
            echo get_the_title( 20 ); 

            ?> </h1>
          </div>
        </div>
          <div class="row mt-3">
              <div class="col-12">
                <p id="first_p">
                    <?php
                        $post_id = 20;// example post id
                        $post_content = get_post($post_id);
                        $content = $post_content->post_content;
                        echo do_shortcode( $content );//executing shortcodes
                    ?>
                    
                    <!-- // I'm a front end developer who likes to code, make cool stuff and enjoys making easy UI for everyone.
                    //  I'm also an amateur photographer and musician. 
                    // I decided to leave my 5 year old secure job
                    // because i want to make a living out of coding. 
                      -->
                </p>
                <p id="second_p">
                    <!-- Anywho here i am. Nice to meet you. Hope we can work together. -->
                </p>
              </div>
          </div>
          </div>
      </div>
    </div>
</header>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <div id="projects" class="projects">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 id="projects-heading" class="h1">
                <?php echo get_the_title(24); ?>
                </h1>
            </div>
            <?php 
                if ( have_posts() ) {
	            while ( have_posts() ) {
                    the_post(); 
                    ?>
                    <div class="col-12 col-md-4">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?php the_title(); ?></h5>
                      <p class="card-text"><?php the_content(); ?></p>
                      <a href="<?php the_field("card_title"); ?>" target="_blank" class="btn btn-outline-danger">Go to website</a>
                    </div>
                  </div>
            </div>
                    <?php
                    //
                    // Post Content here
                    //
                } // end while
            } // end if
            ?>
            <!-- <div class="col-12 col-md-4">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                      <h5 class="card-title text-white">Giphy API</h5>
                      <p class="card-text">Search any gif you like!</p>
                      <a href="https://2leftpaws.dev/Giphy/" target="_blank" class="btn btn-outline-danger">Go to website</a>
                    </div>
                  </div>
            </div> -->
            <!-- <div class="col-12 col-md-4">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                      <h5 class="card-title text-white">Migration to Wordpress for Bright North</h5>
                      <p class="card-text">Bright North.</p>
                      <a href="https://www.brightnorth.net/" target="_blank" class="btn btn-outline-danger">Go to website</a>
                    </div>
                  </div>
            </div> -->
        </div>
    </div>
</div>


<?php get_footer( 'footer.php'); ?>
    
