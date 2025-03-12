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
    <div class="breadcrumb-area about-breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-txt">
                        <span>TRACK YOUR SHIPMENT</span>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">TRACK YOUR SHIPMENT</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay"></div>
    </div>
    <!--  breadcrumb end  -->



    <section class="tracking">
        <div class="container-auto">
            <div class="tracking__inner">
                <div class="col-md-12">
                    <h2 style="text-align: center;font-size: -webkit-xxx-large;font-weight: bold;">Track Your Shipment in Real Time</h2>
                </div>
            </div>
            <div class="container">
                <div
                    class="row justify-content-center align-items-center g-2">

                    <div class="col-12">
                        <div class="col-md-12">
                            <form method="get" class="form-tracking mt-4">
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select name="searchSelected" id="searchSelected" class="form-control">
                                                <option value="1" selected="selected">AWB No.</option>
                                                <option value="6">Forwarding No.</option>
                                                <option value="2">Reference No.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="tracking_no" id="tracking_no" placeholder="Enter Your Tracking No...">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 text-center">
                                        <button class="thm-btn  reg_button" id="submit_tracking" type="submit" style="color: white;background-color: #025a68;">Track</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="tracking">
        <div class="container-auto">
            <div class="tracking__inner">
                <div class="col-lg-12 col-md-12 col-sm-12 mt-5 track-result track-block">
                    <div class="accordion tracking-data"></div>
                </div>
            </div>
        </div>
    </section>


    <?php include('includes/footer.php') ?>
    <?php include('includes/footer_script.php') ?>

</body>

</html>