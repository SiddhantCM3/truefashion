<!--<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>True Fashion - Contact Page</title>

     Bootstrap core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


     Additional CSS Files 
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-572-designer.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>-->
<!--

TemplateMo 572 Designer

https://templatemo.com/tm-572-designer


  </head>

<body>-->

    
    <?php include("header.php"); ?>
    <?php include("loader.php"); ?>
    
    <div class="video-container-page-banner">
        <video id="video1" preload="" autoplay="" muted="" playsinline="" loop="" style = "height: 100%; width: 100%; object-fit: cover;">
            <source src="assets/images/bg_video.mp4" type="video/mp4">
        </video> 
    </div>
    
    <div class="page-banner change-name">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="header-text">
                        <h2><em>Contact</em> Us</h2>
                        <p>TRUE FASHION is a high-end fashion house/exporters of exclusive women’s,men’s,kids,beach wears, scarves, pareos, stoles, shawls, bags and accessories.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page-map adjust-margin-section">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-12">
                
                	<!-- You can easily copy and paste your own map point from Google Maps -> Share -> Embed a map -->
                
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.3551109240498!2d77.32072791537685!3d28.589121782434958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce519b4b31299%3A0xcad3b63b3b0c202!2sTrue%20Fashion!5e0!3m2!1sen!2sin!4v1677160341290!5m2!1sen!2sin" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-page">
        <div class="container">
            <div class="col-lg-12">
                <div class="contact-page-form">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <form id="contact" action="db.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h2>Don't be Hesitated<br><em>Send a message now</em>!</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                 
                                        <input name="name" type="text" id="first-name" placeholder="First Name*" required="">               
                                    </div>
                                    <div class="col-lg-6">                
                                        <input name="last_name" type="text" id="last-name" placeholder="Last Name*" required="">                           
                                    </div>
                                    <div class="col-lg-6">                       
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">                        
                                    </div>
                                    <div class="col-lg-6">                         
                                        <input name="subject" type="text" id="subject" placeholder="Subject*" required="">                        
                                    </div>
                                    <div class="col-lg-12">                           
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>                          
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" id="form-submit" class="main-button ">Send Message</button>                            
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-info">
                                <ul>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg></div>
                                        <h6>Mailing Address</h6>
                                        <p class="text-start"><span><strong>Noida: </strong> B-31, B Block, Sector 5, Noida, Uttar Pradesh 201301</span></p>
                                        <p class="text-start"><span><strong>Mumbai: </strong> A-1, Unit NO 17, Shah AND Nahar Indlestate, S.J. Road, Lower Parel, Mumbai, Maharashtra 400013</span></p>
                                    </li>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="44" viewBox="0 0 24 24" width="44"><g><rect fill="none" height="24" width="24"/><path d="M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h9v-2H4V8l8,5l8-5v5h2V6C22,4.9,21.1,4,20,4z M12,11L4,6h16L12,11z M19,15l4,4 l-4,4v-3h-4v-2h4V15z"/></g></svg></div>
                                        <h6>Email Address</h6>
                                        <span>hello@truefashion.in</span>
                                    </li>
                                    <li>
                                        <div class="icon whatsapp" style="margin-left: 15px"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="55" viewBox="0 0 24 24" width="55"><g><rect fill="none" height="24" width="24"/><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></g></svg></div>
                                        <h6>Chat With Us</h6>
                                        <span style="display: block;"><a href="https://wa.me/919311022839" style="color: white;"> +919311022839</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h2 class="text-center">Thank You !!!</h2>
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
    setTimeout(function(){
        $('.loader').fadeToggle();
    }, 2000);
	$("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
		
    </script>

</body>
</html>