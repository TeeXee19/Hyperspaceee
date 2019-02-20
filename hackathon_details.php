<?php
    include_once("controllers/hackathonDetailController.php");

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
    <meta name="description" content="Consulting Business Consulting Finance Html5 Template">
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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

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

        <!-- Page Title #1
============================================= -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="assets/images/page-titles/3.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title  text-center">
                            <?php
                            while($hackathon = $heading->fetch_assoc()) {
                            ?>
                            <div class="title--heading">
                                <h1><?php echo $hackathon['name']  ?></h1>
                            </div>
                            <?php 
                            }
                            ?>
                            
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">hackathon</li>
                            </ol>
                        </div><!-- .title end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section><!-- #page-title end -->

        <!-- Blog Standard Right Sidebar
============================================= -->
        <section id="blog" class="blog blog-single blog-standard">
            <div class="container">
                <div class="row">
                   
                    
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <?php
                         while($hackathon = $details->fetch_assoc()) {
                        ?>
                        <!-- Blog Entry -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/uploads/ <?php echo $hackathon['image']  ?>" alt="featured image" />
                                </a>
                            </div>
                            <div class="entry--content clearfix">
                                <div class="entry--meta">
                                    <a href="#">Application Starts</a>
                                </div>
                                <div class="entry--date">
                                    <?php echo $hackathon['start_date']  ?>
                                </div>
                                ....
                                <div class="entry--meta">
                                    <a href="#">Application Ends</a>
                                </div>
                                <div class="entry--date">
                                    <?php echo strftime($hackathon['end_date']) ?>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#"><?php echo $hackathon['name']  ?></a></h4>
                                </div>
                                <div class="entry--bio">
                                    <p><?php echo $hackathon['description']  ?></p>
                                </div>
                                <div class="entry--share">
                                    <span class="share--title">Share:</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <!-- .entry-share end -->
                                <div class="entry--tags">
                                    <a href="#"><?php echo $hackathon['tags']  ?></a>
                                </div>
                                <!-- .entry-cat end -->
                            </div>
                        </div>
                        <!-- .blog-entry end -->
                        <?php
                        }
                        ?>

                        <div class="entry-prev-next clearfix">
                            <div class="entry-prev">
                                <div class="entry-prev-content">
                                    <img src="assets/images/blog/thumb/1.jpg" alt="title" />
                                    <div class="entry-desc">
                                        <p>previous</p>
                                        <a href="#">Are you losing underestimating your bills?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-next">
                                <div class="entry-next-content">
                                    <img src="assets/images/blog/thumb/2.jpg" alt="title" />
                                    <div class="entry-desc">
                                        <p>next</p>
                                        <a href="#">The hidden habits that cost you money?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .entry-prev-next end -->

                        <div class="entry-widget entry-bio clearfix">
                            <div class="entry-widget-content">
                                <img src="assets/images/team/thumb/1.jpg" alt="author" />
                                <div class="entry-bio-desc">
                                    <h4>Mahmoud Baghagho</h4>
                                    <p>Founded by Begha over many cups of tea at her kitchen table in 2009, our brand
                                        promise is simple: to provide powerful digital marketing solutions to small and
                                        medium businesses.</p>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- .entry-bio end -->

                       
                    </div><!-- .col-lg-8 end -->
                   
                    
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <!-- Search
============================================= -->
                        <div class="widget widget-search">
                            <div class="widget--title">
                                <h5>Search Bar</h5>
                            </div>
                            <div class="widget--content">
                                <form class="form-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type and hit enter ...">
                                        <span class="input-group-btn">
                                            <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>
                            </div>
                        </div>
                        <!-- .widget-search end -->
                        <!-- Categories
============================================= -->
                        <div class="widget widget-categories">
                            <div class="widget--title">
                                <h5>categories</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Strategy & Planning</a>
                                    </li>
                                    <li>
                                        <a href="#">Audit & Evaluation</a>
                                    </li>
                                    <li>
                                        <a href="#">Taxes & Efficiency</a>
                                    </li>
                                    <li>
                                        <a href="#">Estate Planning</a>
                                    </li>
                                    <li>
                                        <a href="#">Finance & Restructuring</a>
                                    </li>
                                    <li>
                                        <a href="#">Insurance</a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- .widget-categories end -->

                        <!-- Recent Posts
============================================= -->
                        <div class="widget widget-recent-posts">
                            <div class="widget--title">
                                <h5>recent posts</h5>
                            </div>
                            <div class="widget--content">
                                <div class="entry">
                                    <div class="entry--img">
                                        <a href="#"> <img src="assets/images/blog/thumb/1.jpg" alt="title">
                                            <div class="entry--overlay"></div>
                                        </a>
                                    </div>
                                    <div class="entry--desc">
                                        <div class="entry--meta">
                                            <a href="#">Consulting</a>
                                        </div>
                                        <div class="entry--date">
                                            Apr 10, 2018
                                        </div>
                                        <div class="entry--title">
                                            <a href="#">Are you losing underestimating your bills?</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .recent-entry end -->
                                <div class="entry">
                                    <div class="entry--img">
                                        <a href="#"> <img src="assets/images/blog/thumb/2.jpg" alt="title">
                                            <div class="entry--overlay"></div>
                                        </a>
                                    </div>
                                    <div class="entry--desc">
                                        <div class="entry--meta">
                                            <a href="#">Financial</a>
                                        </div>
                                        <div class="entry--date">
                                            Apr 9, 2018
                                        </div>
                                        <div class="entry--title">
                                            <a href="#">The hidden habits that cost you money?</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .recent-entry end -->
                                <div class="entry">
                                    <div class="entry--img">
                                        <a href="#"> <img src="assets/images/blog/thumb/3.jpg" alt="title">
                                            <div class="entry--overlay"></div>
                                        </a>
                                    </div>
                                    <div class="entry--desc">
                                        <div class="entry--meta">
                                            <a href="#">Investment</a>
                                        </div>
                                        <div class="entry--date">
                                            Apr 7, 2018
                                        </div>
                                        <div class="entry--title">
                                            <a href="#">Have you still got your paper tax disc?</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .recent-entry end -->
                            </div>
                        </div>
                        <!-- .widget-recent-posts end -->
                    </div><!-- .col-lg-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section><!-- #blog end -->

        <!-- Footer #1
============================================= -->
<?php
    include("partials/footer.php")
?>

        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div><!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>