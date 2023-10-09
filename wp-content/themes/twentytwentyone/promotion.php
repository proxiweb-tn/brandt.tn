

<?php /* Template Name: promotion Page*/ ?>



<link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/original/socicon.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/original/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/original/stack-interface.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/original/theme-cedar.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/original/custom.css" rel="stylesheet" type="text/css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,400i,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/original/font-sourcesanspro.css" rel="stylesheet" type="text/css">

        <nav id="menu2" class="bar bar-2 hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 text-center text-left-sm hidden-xs order-lg-2">
                                <div class="bar__module">
                                    <a href="/brandthtml"> <img class="logo logo-dark" alt="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/original/logo.svg" height="40"> <img class="logo logo-light" alt="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/original/logo.svg"> </a>
                                </div>
                            </div>
                            <div class="col-lg-5 order-lg-1">
                                <div class="bar__module">
                                    <ul class="menu-horizontal text-left">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>


<div class="main-container">
            <section class="space--xxs bg--dark text-justify">
                <div class="container">
                    <div class="cta cta--horizontal text-center-xs row">
                        <div class="col-md-4 hidden-xs">
                          <a href="#">  <h4>TN&nbsp; عربية </h4>
                        </a></div><a href="#">
                        </a><div class="col-md-8  text-right text-center-xs"><a href="#">
                            </a><a class="btn type--uppercase" href="#"> <span class="btn__text">Règlement</span> </a>
                        </div>
                    </div>
                </div>
            </section>

            
            <section class="cover height-80 imagebg text-center">
                <div class="background-image-holder" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/original/landing-brandt.png); opacity: 1;"> <img alt="background" src="<?php echo get_stylesheet_directory_uri(); ?>/original/landing-brandt.png"> </div>
            </section>

            <section class="cover imagebg text-center height-100 hidden-md hidden-lg hidden-sm">
                <div> <img alt="background" src="<?php echo get_stylesheet_directory_uri(); ?>/original/landing-brandt-mobile.png"> </div>

            </section>



            <section class="bg--dark text-center space--xs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-11">
                            <div class="cta">
                                <h2>N’attendez plus !! </h2>
                                <p class="lead">Achetez un réfrigérateur Brandt et tentez de gagner plus de 100 cadeaux</p>
                                <a class="btn btn--primary type--uppercase" href="#"> <span class="btn__text">
                            inserer numéro de série </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-center imagebg space--md" data-overlay="6">
                <div class="background-image-holder" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/original/frigos.png&quot;); opacity: 1;"> <img alt="background" src="<?php echo get_stylesheet_directory_uri(); ?>/original/frigos.png"> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <div class="cta">
                                <h2>Découvrez nos réfrigérateurs <br>et bénéficiez de plus d’informations</h2>
                                <a class="btn btn--primary type--uppercase" href="#"> <span class="btn__text">
                            Plus d'infos </span> </a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Form" class="text-center bg--dark space--xxs">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="boxed boxed--lg bg--dark subscribe-form-1">
                                <h3>Insérez votre numéro de série</h3>
                                <h4>et tentez de gagner l’un des cadeaux exceptionnels</h4>
                                <div class="row justify-content-center no-gutters">
                                    <div class="col-md-8 text-left">
                                      <form action="https://brandt.dz/offres/upload.php" method="POST" enctype="multipart/form-data" class="text-left row mx-0" data-success="Merci , votre formulaire a été envoyé avec succès" data-error="Veuillez remplir tous les champs">
                                          <input required="" type="text" name="NOM" placeholder="Nom et prénom">
                                          <input required="" type="text" name="ADRESSE" placeholder="Adresse">
                                          <input required="" type="tel" name="TELEPHONE" placeholder="Numéro de téléphone" pattern="[0-9]{10}" title="Exemple : 0511223344">
                                          <input required="" type="text" name="SERIAL" placeholder="Numéro de serie" pattern="[A-Za-z]{1}[0-9]{1}[A-Za-z]{1}[0-9]{17}[A-Za-z]{2}" title="Exemple : S1L52310000165100001LB">

                                              <b>Bon ou facture d'achat</b>
                                              <input required="" name="FicheGarantie" type="file" placeholder="Fiche de garantie">

                                          <button type="submit" class="btn btn--primary type--uppercase">valider</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          