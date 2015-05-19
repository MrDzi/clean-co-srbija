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
<form action="formprocess.php" method="post" id="cleanco-scheduling">
                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="name">Ime i prezime<span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>E-mail<span>*</span></label>
                                <input type="email" class="form-control" name="email" required>
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
                                <input id="date" class="form-control datepicker" name="date" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="time">Vreme<span>*</span></label>
                                <select id="time" class="form-control" name="time" required>
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