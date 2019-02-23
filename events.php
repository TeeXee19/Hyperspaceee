<?php
    include_once("controllers/hackathonController.php");

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="assets/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link
        href="http://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800%7CRoboto:300i,400,400i,500,500i,700"
        rel="stylesheet" type="text/css">

    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/library/bootstrap.css">  -->


    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <script type="text/javascript" src="assets/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>Hyperspace</title>
</head>

<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
	<?php
		include("partials/header.php");
	?>
        <!-- Header  
====================================== -->

        <!-- Page Title #1
============================================= -->
        <section id="hackathon-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>Events</h1>
                            </div>

                        </div><!-- .col-lg-8 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
        </section><!-- #page-title end -->

        <!-- Blog Grid
======================================= -->
        <section id="blog" class="blog blog-grid">
            <div class="container">
                <div class="row">

                    <?php
                        while($hackathons = $results->fetch_assoc()) {
                    ?>
                        <!-- Blog Entry #1 -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="blog-entry">
                                <div class="entry--img">
                                    <a href="#">
                                        <img src="assets/uploads/ <?php echo $hackathons['image']  ?>" alt="entry image" />
                                        <div class="entry--overlay"></div>
                                    </a>
                                </div><!-- .entry-img end -->
                                <div class="entry--content">
                                    <div class="entry--meta">
                                        <a href="#"><?php echo $hackathons['tags']  ?></a>
                                    </div>
                                    <div class="entry--title">
                                        <h4><a href="hackathon_details.php?id= <?php echo $hackathons["id"]; ?>"> <?php echo $hackathons["name"]; ?> </a>
                                        </h4>
                                    </div>
                                    <div class="entry--date">
                                       <?php echo $hackathons["start_date"]; ?>
                                    </div>
                                    <div class="entry--bio">
                                        <p> 
                                           <?php 
                                           $detail = $hackathons["description"];
                                           echo substr($detail,0,200); ?> ...
                                        </p>
                                    </div>
                                    <div class="entry--more">
                                        <a href="hackathon_details.php?id= <?php echo $hackathons["id"]; ?>"><i class="fa fa-plus"></i>Read More</a>
                                    </div>
                                </div>
                                <!-- .entry-content end -->
                            </div>
                            <!-- .blog-entry end -->
                        </div>
                        <!-- .col-lg-4 end -->
                    <?php
                        }
                    ?>
                    
                    

                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lh-12 clearfix text--center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-lg-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #blog end -->








        <!-- Footer #1
	============================================= -->
	<?php
		include("partials/footer.php")
	?>



        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div><!-- #wrapper end -->

    <!--Modal: modalPush-->
    <div class="modal fade " id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content contact-box text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <h3>Want to Build Something?</h3>
                </div>

                <!--Body-->
                <form class="mb-0">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="contact-name" id="contact-name"
                                placeholder="Name" required="">
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <input type="email" class="form-control" name="contact-email" id="contact-email"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <textarea class="form-control" name="contact-message" id="contact-message" rows="2"
                                placeholder="What do you want to build?"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="contact-result"></div>
                        </div>
                    </div>
                </form>
                <!--Footer-->
                <div class="modal-footer flex-center">
                    <a href="" id="modalbtn" class="btn--primary  btn--rounded waves-effect"
                        data-dismiss="modal">Cancel</a>
                    <a id="modalbtn" class=" btn--primary  btn--rounded" href="">Send Message</a>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: modalPush-->


    <!-- Footer Scripts
============================================= -->
    <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever')
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
    </script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <!-- RS5.0 Core JS Files -->
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <!-- RS Configration JS Files -->
    <script src="assets/js/rsconfig.js"></script>
</body>

</html>