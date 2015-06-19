<?php require_once("header.php"); 
if (isset($_GET['sent'])){
	$sent = $_GET['sent'] ;
}
else {
	$sent='';
}
?>

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

<div class="cleanco-cta-form" <?php if ($sent=="true") {echo "style='display: block;'";} ?>>
    <div class="container">
        <div class="row">

            <?php if ($sent=="true") { ?>
            <div class="cleanco-form-messages">
                <i class="fa fa-check-square-o"></i>
                <p>Uspešno ste poslali zahtev za zakazivanje pranja.</p>
                <p>Očekujte potvrdu putem mail-a u najkraćem roku.</p>
            </div>
            <?php } else if ($sent=="false") { ?>
            <div class="cleanco-form-messages error">
                <i class="fa fa-times-circle-o"></i>
                <p>Došlo je do greške u slanju poruke</p>
                <p>Molim vas pokušajte kasnije</p>
            </div>

            <?php } else { ?>

            <div class="col-xs-12 cleanco-cta-form-info hidden-lg hidden-md hidden-sm">
                <p><span>*</span>Uskoro i za fizička lica</p>
            </div>
            
            <form action="formprocess.php" id="cleanco-scheduling" method="post">
            <img src="assets/img/cleanco-badge.png" alt="" class="cleanco-badge hidden-xs">
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="name">Ime i prezime<span>*</span></label>
                        <input type="text" class="form-control" id="name" name="name" />
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail<span>*</span></label>
                        <input type="email" class="form-control" id="email" name="email" />
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="phoneNumber">Broj telefona<span>*</span></label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" />
                    </div>
                    <div class="form-group">
                        <label for="location">Lokacija<span>*</span></label>
                        <select class="form-control cleanco-scheduling-location" id="location" name="location" >
                          <option value="" disabled selected>- izaberite -</option>
                          <option value="0">BOP - Đorđa Stanojevića 12-14</option>
                          <option value="1">SBC - Milentija Popovića 5a</option>
                          <option value="2">Vaša lokacija</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="customLocation" name="customLocation" placeholder="Upišite svoju lokaciju" disabled required />
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="input-append date form-group" id="dp3">
                        <label for="date">Datum<span>*</span></label>
                        <input id="date" name="date" class="form-control datepicker" readonly />
                    </div>
                    <div class="form-group">
                        <label for="time">Vreme<span>*</span></label>
                        <select id="time" name="time" class="form-control">
                          <option value="" disabled selected>- izaberite -</option>
                          <option value="0">06:00</option>
                          <option value="1">06:30</option>
                          <option value="2">07:00</option>
                          <option value="3">07:30</option>
                          <option value="4">08:00</option>
                          <option value="5">08:30</option>
                          <option value="6">09:00</option>
                          <option value="7">09:30</option>
                          <option value="8">10:00</option>
                          <option value="9">10:30</option>
                          <option value="10">11:00</option>
                          <option value="11">11:30</option>
                          <option value="12">12:00</option>
                          <option value="13">12:30</option>
                          <option value="14">13:00</option>
                          <option value="15">13:30</option>
                          <option value="16">14:00</option>
                          <option value="17">14:30</option>
                          <option value="18">15:00</option>
                          <option value="19">15:30</option>
                          <option value="20">16:00</option>
                          <option value="21">16:30</option>
                          <option value="22">17:00</option>
                          <option value="23">17:30</option>
                          <option value="24">18:00</option>
                          <option value="25">18:30</option>
                          <option value="26">19:00</option>
                          <option value="27">19:30</option>
                          <option value="28">20:00</option>
                          <option value="29">20:30</option>
                          <option value="30">21:00</option>
                          <option value="31">21:30</option>
                          <option value="32">22:00</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12">
                    <button type="submit" id="cleanco-scheduling-submit" class="cleanco-form-btn pull-right">Zakaži pranje</button>
                </div>
            </form>

            <?php } ?>

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

                            <a class="cleanco-services-btn hidden-lg hidden-md hidden-sm" href="#" role="button">...</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="cleanco-services-single-inner cleanco-services-single-inner-middle">
                        <img src="assets/img/usluge-2.jpg" class="img-responsive" alt="Upravljanje objektima" />

                        <div class="cleanco-services-single-inner-text">
                            <h3>Čišćenje i održavanje objekata</h3>

                            <p>Uvođenjem potrebnih  servisa za rad i funkcionisanje poslovnih objekata povećavamo kvalitet života i rada u njima.</p>
                            <p>U zavisnosti od kategorije objekta, standarda gradnje, opremljenosti, lokacije i namene, ponudićemo Vam nivo, obim i vrstu usluge za svaki objekat pojedinačno. Nudimo usluge  čišćenja i održavanja prostorija, industrijskog čišćenja, domarskih usluga i popravki. Takođe, nudimo usluge hemijskog čišćenja podnih površina, mašinskih instalacija i opreme, kuhinja restorana, restoranske opreme, roštilja, ventilacija,  AC sistema i grejanje.</p>
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
                            <p>Posedujemo punu licencu za projektovanje i izvođenje radova na uređenju zelenih površina i trudimo se da kvalitetnom i profesionalnom uslugom ispunimo sve zahteve svojih klijenata.</p>

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
                        <p class="cleanco-testimonials-content">“Kada god žurim uvek me prime preko reda.”</p>
                        <p><strong>Uroš Ćulibrk</strong>, Royal Norwegian Embassy</p>
                    </div>
                    <div class="item">
                        <p class="cleanco-testimonials-content">“Godinama sarađujemo na obostrano zadovoljstvo.”</p>
                        <p><strong>Željko Mileusnić</strong>, Philips</p>
                    </div>
                    <div class="item">
                        <p class="cleanco-testimonials-content">“Momci su za svaki dogovor, uvek nam izlaze u susret.”</p>
                        <p><strong>Bojana Stević</strong>, Credit Agricole Bank</p>
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

<?php require_once("footer.php"); ?>