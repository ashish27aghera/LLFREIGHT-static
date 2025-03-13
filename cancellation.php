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
                        <span>Cancellation Policy</span>
                        <h1>Cancellation Policy</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cancellation Policy</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay"></div>
    </div>
    <!--  breadcrumb end  -->

    <section class="section about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about__item">
                        <p>1. Any shipment which has been booked, scanned as PICKED UP and dispatched from hub will be considered as  UN-VOIDABLE and cannot be cancelled, hence, no refunds will be considered for what so ever reason by shipper or consignee.</p>
                        <p>2. Any Shipment which has been booked and scanned as PICKED UP , but requested by Shipper or Consignee for  REQUESTED FOR HOLD for any reason ,will be kept on hold at our hub for maximum 48hours, after 48hours,warehousing and demurrage charges will be applicable, but in no case any shipment REQUESTED FOR HOLD will be subject to refund. </p>
                        <p>3. Refunds will be applicable only for shipments which have been requested to CANCEL THE ORDER within 3hours of PICKED UP scan, Shipping amount will be refunded in 7 working days to shipper/consignee after deducting the Airway Bill charges along with the  pick-up charges incurred in executing the said subject.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('includes/footer.php') ?>
    <?php include('includes/footer_script.php') ?>

</body>

</html>