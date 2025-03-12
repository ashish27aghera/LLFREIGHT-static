<?php include('includes/header_script.php') ?>
<?php include('includes/header.php') ?>

<body>
    <!--   search bar popup start   -->
    <div class="search-popup">
        <form class="search-form" action="#">
            <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
        </form>
        <div class="search-popup-overlay" id="searchOverlay"></div>
        <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
    </div>
    <!--   search bar popup end   -->


    <!--  breadcrumb start  -->
    <div class="breadcrumb-area contact-breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="breadcrumb-txt">
                        <span>Contact</span>
                        <h1>keep in touch with us for help </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay"></div>
    </div>
    <!--  breadcrumb end  -->


    <!--   contact section start    -->
    <div class="contact-section">
        <div class="container">
            <!--  contact infos start  -->
            <div class="contact-infos">
                <div class="row no-gutters">
                    <div class="col-lg-6 single-info-col">
                        <div class="single-info wow fadeInRight" data-wow-duration="1s">
                            <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                            <div class="info-txt">
                                <p>A/62, Shanti Shopping Center, Near Rly. Stn, Mira Road East, Thane, Maharashtra 401107</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 single-info-col">
                        <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                            <div class="info-txt">
                                <p>+91 730 440 3221</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 single-info-col">
                        <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                            <div class="info-txt">
                                <p>Info@LLFreight.com</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  contact infos end  -->
            <!--  contact form and map start  -->
            <div class="contact-form-section">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="title">Contact</span>
                        <h2 class="subtitle">KEEP IN TOUCH</h2>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-element"><input type="text" placeholder="Name"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-element"><input type="text" placeholder="Email"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-element"><input type="text" placeholder="Phone"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-element"><input type="text" placeholder="Subject"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-element">
                                        <textarea name="comment" cols="30" rows="10" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-element">
                                        <button type="submit"><span>Submit</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="map-wrapper">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15064.124143547802!2d72.8574081!3d19.2810165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b04dd63b5603%3A0x7fd4abc7c20673a6!2sLogic%20Load%20Global!5e0!3m2!1sen!2sin!4v1689424166424!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!--  contact form and map end  -->
        </div>
    </div>
    <!--   contact section end    -->
<?php include('includes/footer_script.php') ?>
<?php include('includes/footer.php') ?>

</body>

</html>