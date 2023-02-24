<?php include("header.php"); ?>
    <?php include("loader.php"); ?>

    <div class="video-container">
        <video id="video1" preload="" autoplay="" muted="" playsinline="" loop="" style = "height: 100%; width: 100%; object-fit: cover;">
            <source src="assets/images/bg_video.mp4" type="video/mp4">
        </video> 
    </div>
    
    <div class="main-banner change-name">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h6>Timely, Reliable, Unique, Efficient</h6>
                        <h2><em>TRUE</em> Fashion</h2>
                        <div class="white-button">
                            <a href="product.php">Watch Our Manufacturing Film</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="explore-work"
             id="explore" style="margin-top:-5vh">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Get A Glimpse At What We Do<br><em>Clothing Work</em>.</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/home1.jpg"
                             alt="Interior Design Work">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="right-content">
                        <h4>What we do ?</h4>
                        <h6>Manufacturing</h6>
                        <p>Appearance is crucial for obvious reasons in the fashion industry. At True Fashion you will
                            find the latest styles of women's bohemian wear, beachwear, men’s wear, kids wear, scarves,
                            beach bags and accessories.
                            <br>
                            We strive to give our buyers a blissful buying experience by providing popular and unique
                            styles for the global market, all in one place. we have earned a respectable position in the
                            international market as a leading Exporter of various kinds of fashion garments with
                            beautiful prints, embroideries merged in fashion story.
                            Fashion has become an integral part of human life. True Fashion is Government Recognised
                            Export House.
                        </p>
                        <div class="primary-button mb-3">
                            <a href="about.php">Discover More   </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="whats-trending">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h2>Check Out What We Offer<br><em>Manufacturing</em>.</h2>
                    </div>
                    <div class="left-content">
                        <p>TRUE FASHION, a high-end fashion house/exporters of exclusive women’s,men’s,kids,beach wears, high fashion garment
                            scarves, pareos, stoles, shawls, bags and accessories.
                            <br>
                            Our company code is one of measured strategic management, a desire to fulfill client needs,
                            a nexus of skilled workmanship and an infallible commitment to product and quality control.
                            We are constantly perfecting the service we provide by understanding the upcoming trends
                            allowing us to better cater to your needs.
                        </p>
                        <div class="primary-button mb-3">
                            <a href="about.php">Discover More   </a>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center">
                    <img src="assets/images/home2.jpg"
                         alt=""
                         class="img-fluid text-center"
                         style = "max-height:90vh; width: fit-content">
                </div>
            </div>
        </div>
    </section>

    <section class="whats-trending">
        <div class="container expanded">
            <div class="row">
                <div class="col">
                    <img src="assets/images/clients.jpg"
                         alt=""
                         class="img-fluid">
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h2>Our Clients.</h2>
                    </div>
                    <p>We have a large client base with a few dedicated buyers who import 
                        exclusively from us in India due to our high quality and timely delivery.
                        We export to France, USA ,Brazil, Spain, Italy, Germany, Australia, & 
                        UK.
                        Under the roof of ATOLL PALME we work for many Europian brands 
                        Caroll, Armand Thiery, Galeries Lafayette, Printemps, Bonobo jeans, 
                        Cassis ETC
                        Under the roof of Z&L Europe we work for USA and other country 
                        buyers ,CAMOMILLA,TJX ,FARM,dillards ,arula ETC.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us"
             id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left-form">
                    <form id="contact"
                          action="db.php"
                          method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h2>Don't be Hesitated<br><em>Get in touch</em></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <input name="name"
                                       type="text"
                                       id="name"
                                       placeholder="First Name*"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <input name="last_name"
                                       type="text"
                                       id="last_name"
                                       placeholder="Last Name*"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <input name="email"
                                       type="text"
                                       id="email"
                                       pattern="[^ @]*@[^ @]*"
                                       placeholder="Your Email"
                                       required="">
                            </div>
                            <div class="col-lg-6">
                                <input name="subject"
                                       type="text"
                                       id="subject"
                                       placeholder="Subject*"
                                       required="">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message"
                                          type="text"
                                          class="form-control"
                                          id="message"
                                          placeholder="Message"
                                          required=""></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit"
                                        id="form-submit"
                                        class="main-button"
                                        value="submit"
                                        onclick="send_contact(event)">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 right-map">
                    <div id="map">

                        <!-- You can easily copy and paste your own map point from Google Maps -> Share -> Embed a map -->
                        <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.3551109240498!2d77.32072791537685!3d28.589121782434958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce519b4b31299%3A0xcad3b63b3b0c202!2sTrue%20Fashion!5e0!3m2!1sen!2sin!4v1677160341290!5m2!1sen!2sin"
                                width="100%"
                                height="542px"
                                frameborder="0"
                                style="border:0"
                                allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        setTimeout(function () {
            $('.loader').fadeToggle();
        }, 1500);

        $("a[href='#top']").click(function () {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
    </script>

    <script>
        function send_contact(e) {
            var name_input = document.querySelector("#name");
            name_input = name_input.value.trim();

            var last_name_input = document.querySelector("#last_name");
            last_name_input = last_name_input.value.trim();

            var email_input = document.querySelector("#email");
            email_input = email_input.value.trim();

            var subject_input = document.querySelector("#subject");
            subject_input = subject_input.value.trim();

            var message_input = document.querySelector("#message");
            message_input = message_input.value.trim();

            var data = new FormData();

            data.append("fname", name_input);
            data.append("last", last_input);
            data.append("email", email_input);
            data.append("subject", subject_input);
            data.append("message", message_input);
        }

    </script>

</body>

</html>