<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="robots" content="noindex">
        <title>CleanCo</title>
        <meta name="description" content="CleanCo - kompletno održavanje poslovnog i životnog prostora. Mobilna perionica za dubinsko čišćenje vozila i kućnog nameštaja.">
        <meta name="keywords" content="pranje, mobilno pranje, mobilno pranje vozila, perionica, odrzavanje, pranje beograd">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/vendor/datepicker.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/responsive-styles.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- FIXED HEADER (appears on scroll) -->
        <header class="cleanco-header-fixed hidden-xs">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3 col-sm-3">
                        <a href="#"><img src="assets/img/cleanco-logo-small.png" alt="CleanCo logo" /></a>
                    </div>

                    <div class="col-md-7 col-sm-9">
                        <ul class="cleanco-header-info clearfix">
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>+381 11 614 93 31</br><span>office@cleanco.rs</span></p>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>Klare Cetkin 1e/12</br><span>Beograd</span></p>
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <p>09-18h, sub: 09-15h</br><span>Nedeljom ne radimo</span></p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-2 hidden-sm">
                        <ul class="cleanco-header-social">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>    
            </div>
        </header>
        <!-- FIXED HEADER ENDS -->

        <!-- BIG BKG IMAGE SECTION -->
        <div class="cleanco-big-image-bkg">
            
        </div>
        <div class="cleanco-big-image-content-wrapper">

            <div class="container">
                
                <div class="cleanco-big-image-text">

                    <a href="#" class="cleanco-logo"><img src="assets/img/cleanco-logo.png" alt="CleanCo logo" /></a>

                    <div class="cleanco-big-image-hero">
                        <h1>Koristite svoje vreme pametno - održavanje prepustite profesionalcima.</h1>
                        <p>Spremni smo da preuzmemo kompletno održavanje vašeg poslovnog i životnog prostora.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- BIG BKG IMAGE SECTION ENDS -->

        <!-- CTA SECTION -->
        <div class="cleanco-cta">
            <div class="container">
                <div class="row">
                    
                    <div class="cleanco-cta-info col-sm-8 col-xs-12">
                        <p>Zakažite pranje Vašeg vozila na lokaciji koja Vama odgovara!</p>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <a id="cleanco-scheduling-btn" class="cleanco-cta-btn pull-right" href="#" role="button">Zakazivanje pranja <i class="fa fa-chevron-down"></i></a>
                    </div>

                </div>
            </div>
        </div>

        <div class="cleanco-cta-form">
            <div class="container">
                <div class="row">
                    
                    <form id="cleanco-scheduling">
                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="name">Ime i prezime<span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail<span>*</span></label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="phoneNumber">Broj telefona<span>*</span></label>
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="location">Lokacija<span>*</span></label>
                                <select class="form-control cleanco-scheduling-location" id="location" name="location" required>
                                  <option value="" disabled selected>- izaberite -</option>
                                  <option value="0">BOP</option>
                                  <option value="1">Đorđa Stanojevića</option>
                                  <option value="2">Vaša lokacija</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="customLocation" name="customLocation" placeholder="Upišite svoju lokaciju" disabled required>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="input-append date form-group" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                <label for="date">Datum<span>*</span></label>
                                <input id="date" class="form-control datepicker" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="time">Vreme<span>*</span></label>
                                <select id="time" class="form-control" required>
                                  <option value="" disabled selected>- izaberite -</option>
                                  <option value="0">09:00</option>
                                  <option value="1">09:30</option>
                                  <option value="2">10:00</option>
                                  <option value="3">10:30</option>
                                  <option value="4">11:00</option>
                                  <option value="5">11:30</option>
                                  <option value="6">12:00</option>
                                  <option value="7">12:30</option>
                                  <option value="8">13:00</option>
                                  <option value="9">13:30</option>
                                  <option value="10">14:00</option>
                                  <option value="11">14:30</option>
                                  <option value="12">15:00</option>
                                  <option value="13">15:30</option>
                                  <option value="14">16:00</option>
                                  <option value="15">16:30</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" id="cleanco-scheduling-submit" class="cleanco-form-btn pull-right">Zakaži pranje</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- CTA SECTION ENDS -->

        <!--  M A I N   S E C T I O N  -->
        <div class="cleanco-main-section">

            <!-- SERVICES SECTION -->
            <article class="cleanco-services">
                <div class="container">
                    
                    <h2>Naše usluge</h2>

                    <div class="row">
                        
                        <div class="col-sm-4 col-xs-12">
                            <div class="cleanco-services-single-inner cleanco-services-single-inner-left">
                                <img src="assets/img/usluge-1.jpg" class="img-responsive" alt="Mobilna perionica" />

                                <div class="cleanco-services-single-inner-text">
                                    <h3>Mobilna perionica</h3>

                                    <p>Da bismo izašli u susret potrebama naših klijenata, osposobili smo pokretnu perionicu kojoj nije potreban izvor napajanja. Brzo stižemo do Vas i efikasno izvršavamo usluge pranja. Posedujemo izuzetne najsavremenije mašine i iskusan tim, koji Vam u svakom trenutku mogu pružiti usluge čišćenja, pranja, pranja pod visokim pritiskom, kao i dubinsko čišćenje vozila i kućnog nameštaja.</p>
                                    <p>Mašine za uklanjanje prljavštine koriste vodenu paru čime se smanjuje upotreba štetnih hemijskih sredstava, steriliše površina automobila i postiže veća efikasnost i bolji rezultat pranja.</p>
                                    <p>Od konkurencije nas izdvaja fleksibilnost  i vrhunska tehnologija pranja. Takođe, u ponudi imamo i veliki izbor auto kozmetike.</p>

                                    <a class="cleanco-services-btn hidden-lg hidden-md hidden-sm" href="#" role="button"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="cleanco-services-single-inner cleanco-services-single-inner-middle">
                                <img src="assets/img/usluge-2.jpg" class="img-responsive" alt="Upravljanje objektima" />

                                <div class="cleanco-services-single-inner-text">
                                    <h3>Upravljanje objektima</h3>

                                    <p>Uvođenjem potrebnih  servisa za rad i funkcionisanje poslovnih objekata povećavamo kvalitet života i rada u njima. U zavisnosti od kategorije objekta, standarda gradnje, opremljenosti, lokacije i namene, ponudićemo Vam nivo, obim i vrstu usluge za svaki objekat pojedinačno. Nudimo usluge  čišćenja i održavanja prostorija, industrijskog čišćenja, domarskih usluga i popravki. Takodje, nudimo usluge hemijskog čišćenja podnih površina, mašinskih instalacija i opreme, kuhinja restorana, restoranske opreme, roštilja, ventilacija,  AC sistema i grejanje.</p>
                                    <p>Na ovaj način dugoročno investirate u svoj poslovni objekat, a mi ćemo brigom o njemu indirektno uticati na komercijalnu vrednost i značajno mu produžiti vek trajanja.</p>

                                    <a class="cleanco-services-btn hidden-lg hidden-md hidden-sm" href="#" role="button"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="cleanco-services-single-inner cleanco-services-single-inner-right">
                                <img src="assets/img/usluge-3.jpg" class="img-responsive" alt="Upravljanje zelenim povrsinama" />

                                <div class="cleanco-services-single-inner-text">
                                    <h3>Projektovanje, izgradnja i održavanje zelenih površina</h3>

                                    <p>Firma CleanCo je između ostalog specijalizovana i za pružanje kompletnih usluga iz oblasti pejzažne arhitekture i hortikulture.</p>
                                    <p>U ovoj oblasti pokrivamo sve faze projektovanja, izgradnje i održavanja zelenih površina.</p>
                                    <p>Posedujemo punu licencu za projektovanje i izvođenje radova na uređenju zelenih povšina i trudimo se da kvalitetnom i profesionalnom uslugom ispunimo sve zahteve svojih klijenata.</p>

                                    <a class="cleanco-services-btn hidden-lg hidden-md hidden-sm" href="#" role="button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!-- SERVICES SECTION ENDS -->

            <!-- CLIENTS SECTION -->
            <article class="cleanco-clients">
                <div class="container">

                    <h2>Naši klijenti:</h2>

                    <div class="row">
                        
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <img src="assets/img/vip-logo.png" class="img-responsive" alt="Vip" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <img src="assets/img/piraeus-logo.png" class="img-responsive" alt="Piraeus" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <img src="assets/img/actavis-logo.png" class="img-responsive" alt="Actavis" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <img src="assets/img/ericsson-logo.png" class="img-responsive" alt="Ericsson" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <img src="assets/img/bambi-logo.png" class="img-responsive" alt="Bambi" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <img src="assets/img/agricole-logo.png" class="img-responsive" alt="Agricole" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <img src="assets/img/sport-vision-logo.png" class="img-responsive" alt="Sport Vision" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <img src="assets/img/vb-leasing-logo.png" class="img-responsive" alt="VB Leasing" />
                                </div>
                            </div>
                        </div>

                        <div class="hidden-lg hidden-md col-sm-4 hidden-xs cleanco-tablet-client">
                            <div class="cleanco-clients-rectangle">
                                <div class="cleanco-clients-rectangle-inner">
                                    <p>I mnogi drugi...</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </article>
            <!-- CLIENTS SECTION ENDS -->

            <!-- TESTIMONIALS SECTION -->
            <article class="cleanco-testimonials">
                <div class="container">

                    <h2>Rekli su o nama</h2>
                    
                    <div id="cleanco-testimonials-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#cleanco-testimonials-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#cleanco-testimonials-carousel" data-slide-to="1"></li>
                            <li data-target="#cleanco-testimonials-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p>“Maecenas et facilisis quam. Nullam molestie, tellus eu laoreet euismod, massa dui interdum eros, eget imperdiet lorem elit eu libero. Sed faucibus ante vel metus vestibulum dictum. Morbi nec convallis neque. Pellentesque et orci tempus nunc malesuada mattis. Sed tempus orci volutpat hendrerit commodo.”</p>
                                <p><strong>Ime i prezime</strong></p>
                            </div>
                            <div class="item">
                                <p>“Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus.”</p>
                                <p><strong>Ime i prezime</strong></p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control hidden-xs" href="#cleanco-testimonials-carousel" role="button" data-slide="prev">
                            <i class="fa fa-chevron-circle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control hidden-xs" href="#cleanco-testimonials-carousel" role="button" data-slide="next">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </article>
            <!-- TESTIMONIALS SECTION ENDS -->

        </div>
        <!--  M A I N   S E C T I O N  ENDS -->

        <!-- GOOGLE MAP SECTION -->
        <div id="cleanco-map">
            
        </div>
        <!-- GOOGLE MAP SECTION ENDS -->

        <!-- FOOTER -->
        <footer class="cleanco-main-footer">            
                
            <div class="cleanco-footer-black">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">

                            <h3>O nama</h3>

                            <p>Privredno društvo CleanCo d.o.o. osnovano je 2011. godine u Beogradu u cilju pružanja higijenskih i usluga održavanja kako u poslovnim tako i u privatnim objektima.</p>
                            <p>Naša specijalnost je kompletno održavanje poslovnih prostora, domaćinstava, njihove okoline, kao i voznog parka kojim raspolažu, po sistemu „ključ u ruke“. U cilju daljeg izlaska u susret svojim klijentima, uveli smo i usluge mobilne perionice. CleanCo je tu da Vam obezbedi profesionalno obučen personal koji će svojim umećem i vrhunskom opremom, pravovrememno učiniti da Vaš radni prostor i dom zablistaju.</p>
                            <p>Od samog osnivanja naša misija je pružanje vrhunskog kvaliteta usluga kroz fleksibilnost, dostupnost i profesionalizam. Da smo postavili nove standarde potvrđuje i lista naših zadovoljnih klijenata.</p>

                            <ul class="cleanco-header-social cleanco-footer-social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>

                            </div>

                    </div>
                </div>

            </div>

            <div class="cleanco-footer-shadow"></div>

            <div class="cleanco-footer-copyright">
                <div class="container">
                    <p>Copyright &copy; 2015 <a href="#">Company Name</a>. All rights reserved.</p>    
                </div>                
            </div>
        </footer>
        <!-- FOOTER ENDS -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="assets/js/vendor/bootstrap-datepicker.js"></script>
        <script src="assets/js/vendor/jquery.validate.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/jquery.mobile.custom.min.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>