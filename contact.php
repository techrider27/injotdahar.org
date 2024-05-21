<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Injot Dahar - A Non Government Organization</title>
    <?php include 'assets/includes/head.php' ?>
</head>

<body>

    <div class="boxed_wrapper">
        <?php include 'assets/includes/header.php' ?>


        <div class="inner-banner has-base-color-overlay text-center">
            <div class="container">
                <div class="box">
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>

        <section class="contact sec-padd2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Send Your <span class="thm-color">Message</span></h2>
                        </div>
                        <div class="default-form-area">
                            <form class="default-form" action="phpfiles/getData.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="name" pattern="[a-zA-Z\s]+" class="form-control" value="" placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control required email" value="" placeholder="Your Mail *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="mobile" minlength="10" maxlength="10" pattern="[0-9]{10}]" class="form-control" value="" placeholder="Phone*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button class="thm-btn style-2" type="submit">send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Quick <span class="thm-color">Contact</span></h2>
                        </div>
                        <div class="content">
                            <div class="text">
                                <!-- <p>If you are passionate about helping people: through education, or preventing then you are in the right place. </p> -->
                            </div>
                            <ul class="contact-info">
                                <li><i class="icon-arrows"></i><span>Address:</span> Bagichatoli, Near Kutiatu Chawk, Vill - Lodhma, P.O. - Tetri, PS. Ranchi Airport Police Station, Namkum, Ranchi Jharkhand - 834010</li>
                                <li><i class="icon-phone"></i><span> Phone:</span>+91-9921820670</li>
                                <li><i class="icon-back"></i><span>Email:</span>injotdaharindia@gmail.com | info@injotdahar.org</li>
                            </ul>
                            <h3 class="center mb-2">Our Social Media</h3>
                            <ul class="social-icon">
                                <li><a href="javascript:void(0);" id="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0);" id="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/injotdahar/?igsh=MXBnZWk4eXA3bm5tOA%3D%3D" id="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="home-google-map">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.505001306642!2d85.37916273354422!3d23.290991817355533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f51d0058080025%3A0xe7b6660905b63677!2sInjot%20Dahar!5e0!3m2!1sen!2sin!4v1714664675996!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'assets/includes/footer.php' ?>


        <?php include 'assets/includes/scripts.php' ?>
    </div>
</body>


</html>