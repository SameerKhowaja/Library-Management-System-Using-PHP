 <!DOCTYPE html>
<html>

<head>
    <title>Library Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="css/docs.css" rel="stylesheet" media="screen">
    <link href="css/diapo.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css" />

    <!-- js -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>


    <script>
        jQuery(document).ready(function() {
            $(function() {
                $('.pix_diapo').diapo();
            });
        });
    </script>
    <noscript>
			<style>
				.da-thumbs li a div {
					top: 0px;
                    left: -100%;
					-webkit-transition: all 0.3s ease;
					-moz-transition: all 0.3s ease-in-out;
					-o-transition: all 0.3s ease-in-out;
					-ms-transition: all 0.3s ease-in-out;
					transition: all 0.3s ease-in-out;
				}
				.da-thumbs li a:hover div{
					left: 0px;
				}
			</style>
	</noscript>
</head>

<body>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#home').tooltip('show')
            $('#home').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#home1').tooltip('show')
            $('#home1').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#login').tooltip('show')
            $('#login').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#signup').tooltip('show')
            $('#signup').tooltip('hide')
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sort').tooltip('show')
            $('#sort').tooltip('hide')
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#select').tooltip('show')
            $('#select').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#select1').tooltip('show')
            $('#select1').tooltip('hide')
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#book').tooltip('show')
            $('#book').tooltip('hide')
        });
    </script>
    
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="divider-vertical"></li>
                        <li class="">
                            <a rel="tooltip" data-placement="bottom" title="Home" id="home" href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a> 
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="">
                            <a rel="tooltip" data-placement="bottom" title="About Us" id="login" href="about.php"><i class="icon-info-sign icon-large"></i>&nbsp;About US</a>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="">
                            <a rel="tooltip" data-placement="bottom" title="View Books" id="book" href="view_book.php"><i class="icon-book icon-large"></i>&nbsp;View Books</a>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="">
                            <a rel="tooltip" data-placement="bottom" title="Admin Login" id="login" href="librarian/index.php"><i class="icon-user icon-large"></i>&nbsp;Admin Login</a>
                        </li>

                        <li class="divider-vertical"></li>
                        <li class="signup"><span class="sg"></span></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="margin-top">
            <div class="row">
                <div class="span12">
                    <div class="header">
                        <div class="pull-left">
                            <img class="stilogo" src="images/title_img.jpg">
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <Strong>Welcome to Library Management System</strong>&nbsp;
                        <div class="pull-right">
                            <i class="icon-calendar icon-large"></i>
                            <?php
                            $Today = date('y:m:d');
                            $new = date('l, F d, Y', strtotime($Today));
                            echo $new;
                            ?>
                        </div>
                    </div>


                </div>

                <div class="span2">
                    <div class="life-side-bar">
                        <div class="hero-container">


                        </div>

                        <ul class="nav nav-tabs nav-stacked">
                            <li class="">
                                <a href="#"><i class="icon-phone icon-large"></i>&nbsp;Contact US</a>
                            </li>
                        </ul>
                        <strong>Address</strong>
                        <p>FB Area Block 14, Naseerabad bus stop, Karachi.</p>
                        <p>(+92) 333-2741250</p>
                        <p>sameerkhowaja@gmail.com</p>



                    </div>

                    <!-- vision student login -->
                    <div id="vision" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <div class="alert alert-info"><strong>Vision</strong></div>
                        </div>
                        <div class="modal-body">
                            <p>To be the center for Islamic reference information and knowledge at the global level and to strive to make the learning as a base for the establishment of Digital Library by providing an effective system of library management.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                        </div>
                    </div>


                    <!-- mission student login -->
                    <div id="mission" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <div class="alert alert-info"><strong>Mission & Objective</strong></div>
                        </div>
                        <div class="modal-body">
                            <p>
                                To collect, process and disseminate the latest information for the purpose of teaching, research, and learning as a base for the establishment of the Digital Library. To provide a collection of reference materials and research programs and additional
                                reading materials. Collecting, processing and disseminating the latest information for the purpose of teaching, research, and publications.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                        </div>
                    </div>
                </div>
                <div class="span10">

                    <div style="overflow:hidden; width:960px; margin:0 auto; padding:0 20px;">
                        <div class="pix_diapo">

                            <div data-thumb="images/img_play/1.jpg">
                                <img src="images/img_play/1.jpg">
                            </div>

                            <div data-thumb="images/img_play/2.jpg">
                                <img src="images/img_play/2.jpg">
                            </div>

                            <div data-thumb="images/img_play/3.jpg" data-time="7000">
                                <img src="images/img_play/3.jpg">
                            </div>

                            <div data-thumb="images/img_play/4.jpg">
                                <img src="images/img_play/4.jpg">

                            </div>
                            <div data-thumb="images/img_play/5.jpg">
                                <img src="images/img_play/5.jpg">

                            </div>
                            <div data-thumb="images/img_play/6.jpg">
                                <img src="images/img_play/6.jpg">

                            </div>
                            <div data-thumb="images/img_play/7.jpg">
                                <img src="images/img_play/7.jpg">
                            </div>

                            <div data-thumb="images/img_play/8.jpg">
                                <img src="images/img_play/8.jpg">
                            </div>

                            <div data-thumb="images/img_play/9.jpg">
                                <img src="images/img_play/9.jpg">
                            </div>
                            <div data-thumb="images/img_play/10.jpg">
                                <img src="images/img_play/10.jpg">
                            </div>

                        </div>
                        <!-- #pix_diapo -->

                    </div>


                    </section>
                </div>

                <div class="span2">
                    <h4></h4>

                </div>
                <div class="span10">

                    <ul id="da-thumbs" class="da-thumbs">
                        <li>
                            <a href="">
                                <img src="images/book1.jpg"  class="img-fluid" width="220px" height="180px"/>
                                <div><span>Image 1</span></div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/books2.jpg" class="img-fluid" width="220px" height="180px"/>
                                <div><span>Image 2</span></div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/book3.jpg" class="img-fluid" width="220px" height="180px"/>
                                <div><span>Image 3</span></div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/book4.jpg" class="img-fluid" width="220px" height="180px"/>
                                <div><span>Image 4</span></div>
                            </a>
                        </li>
                    </ul>

                    <div class="text_content">
                        <div class="abc">
                            <!-- text content -->
                            <h4>Vision</h4>
                            <p>
                                To be the center for Islamic reference information and knowledge at the global level and to strive to make the learning as a base for the establishment of Digital Library by providing an effective system of library management.
                            </p>
                            <hr>
                            <h4>Mission & Objectives</h4>
                            <p>
                                To collect, process and disseminate the latest information for the purpose of teaching, research, and learning as a base for the establishment of the Digital Library. To provide a collection of reference materials and research programs and additional
                                reading materials. Collecting, processing and disseminating the latest information for the purpose of teaching, research, and publications.
                            </p>
                            <hr>
                        </div>
                    </div>
                    <!-- end content -->


                </div>

            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="foot-margin">
                <p><a>Library Management System Since November 5, 2020</a></p>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        $(function() {
            $('#da-thumbs > li').hoverdir();
        });
    </script>

    <div id="logout" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-body">
            <div class="alert alert-danger">Are you sure you want to Logout</div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <a href="logout.php" class="btn btn-danger">Yes</a>
        </div>
    </div>

    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script>
    <script type='text/javascript' src='scripts/diapo.js'></script>
</body>

</html>