 <!-- TradingView Widget BEGIN -->
 <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>

        <script type="text/javascript" src="external-embedding/embed-widget-ticker-tape.js" async="">
            {
                "symbols": [{
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500"
                }, {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "Nasdaq 100"
                }, {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                }, {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "BTC/USD"
                }, {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "ETH/USD"
                }],
                "showSymbolLogo": false,
                "colorTheme": "dark",
                "isTransparent": false,
                "displayMode": "regular",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
    <!-- <div class="preloader">
<div id="bitcoin">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewbox="100 100 400 400" xml:space="preserve">
    <filter id="dropshadow" height="130%">
  <fegaussianblur in="SourceAlpha" stddeviation="5"></fegaussianblur>
  <feoffset dx="0" dy="0" result="offsetblur"></feoffset>
  <feflood flood-color="red"></feflood>
<fecomposite in2="offsetblur" operator="in"></fecomposite>
<femerge>
<femergenode></femergenode>
<femergenode in="SourceGraphic"></femergenode>
</femerge>
</filter>          
<path class="path" style="filter:url(#dropshadow)" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
	c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
	l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
	c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
	c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
	l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
	C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
	C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
	C327.767,212.14,389.234,221.02,379.302,260.846z"></path>
          
</svg>
</div>
</div> -->
    <script>
        /*--window load functions--*/
        jQuery(window).load(function() {
            var preLoder = $(".preloader");
            preLoder.fadeOut(1000);
            $("body").removeClass("loading_it");
        });
    </script>


    <div class="banner-area center">
        <div class="area">
            <div class="bodycontainer">
                <h1 class="tlt text-white" style="margin: 20px 0;">Contact <span class="text-default">Us</span></h1>
                <div class="banner-title">
                    <span class="decor-equal"></span>
                </div>
                <div style="margin: 20px 0;">
                    <a href="index.htm">HOME</a> / CONTACT US
                </div>
            </div>
            <div id="particles-js"></div>
        </div>
    </div>
    <div class="bodycontainer">



        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="col-8 col-sm-12">
                    <div class="title_container">
                        <h4>Feel free to drop us a message.</h4>
                        <span class="decor_default"></span>
                    </div>
                    <div class="alerter"></div>
                    <script type="text/javascript" src="js/mail.js"></script>
                    <form method="POST" action="" id="contactform">
                        <p>What can we help you with?</p>
                        <div class="row">
                            <div class="col-12" style="padding:5px 0">
                                <select name="topic" style="width:100%" class="round">
            <option value="Trading Question">Trading Question</option>
            <option value="Finance Question">Finance Question</option>
            <option value="Technical Question">Technical Question</option>
        </select>
                            </div>
                            <div class="col-6" style="padding:5px 0">
                                <input type="text" name="name" placeholder="Name" required="" style="width:100%;" class="round" value="">
                            </div>
                            <div class="col-6" style="padding:5px 0">
                                <input type="text" name="email" placeholder="Email" required="" style="width:100%" class="round" value="">
                            </div>
                            <div class="col-12" style="padding:5px 0">
                                <textarea name="text" placeholder="Message" class="round" required="" style="width:100%; height: 120px"></textarea>
                            </div>
                            <div class="col-12" style="padding:5px 0">
                                <button name="Submit" type="submit" id="sendform" class="btn default round">Send</button>

                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-4 col-sm-12">
                    <div class="darkgrey row">
                        <div class="col-3 col-m-2 col-sm-3 center">
                            <i class="fa fa-home fa-2x text-default"></i>
                        </div>
                        <div class="col-9 col-m-10 col-sm-9">
                            <h6 style="line-height:30px !important">ADDRESS:</h6>
                            <p>5 Preston Court, Burton Latimer, United Kingdom, NN15 5LR</p>
                        </div>
                        <div class="col-3 col-m-2 col-sm-3 center">
                            <i class="fa fa-envelope fa-2x text-default"></i>
                        </div>
                        <div class="col-9 col-m-10 col-sm-9">
                            <h6 style="line-height:30px !important">EMAIL ADDRESSE:</h6>
                            <p><a href="mailto://support@cryptocraftfx.com">support@cryptocraftfx.com</a></p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up show-back-to-top"></a>
    <script>
        /*--window Scroll functions--*/
        $(window).on('scroll', function() {
            /*--show and hide scroll to top --*/
            var ScrollTop = $('#back-to-top');
            if ($(window).scrollTop() > 500) {
                ScrollTop.fadeIn(1000);
            } else {
                ScrollTop.fadeOut(1000);
            }
        });
    </script>
    <div class="footer_bg center">
        <div class="area">
            <div class="bodycontainer">
                <div style="z-index:2; position: relative">
                    <h2 class="margintb">GET STARTED TODAY WITH BITCOIN INVESTMENT</h2>
                    <p class="margintb">Open account for free and start trading Bitcoins!</p>
                    <a href="get-started.html" class="btn">GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
