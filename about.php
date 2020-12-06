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
                        <li class=""><a rel="tooltip" data-placement="bottom" title="Home" id="home" href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a> </li>
                        <li class="divider-vertical"></li>
                        <li class="">
                            <a rel="tooltip" data-placement="bottom" title="Click Here to About" id="login" href="about.php"><i class="icon-info-sign icon-large"></i>&nbsp;About US</a>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="">
                            <a rel="tooltip" data-placement="bottom" title="Click Here to About" id="login" href="librarian/index.php"><i class="icon-user icon-large"></i>&nbsp;Admin Login</a>
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
	<img class="stilogo" src="LMS/title_img.jpg">
	</div>
	</div>

		<div class="alert alert-info"><Strong>Welcome to Library Management System</strong>&nbsp;
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

                <div class="text_content">

                    <table width="450" style="margin: 0pt auto;">

                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center;">
                                    <h3>LIBRARY HOURS</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">Monday to Thursday</td>
                                <td style="text-align: center;">8:00 a.m. to 7:00 p.m.</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Friday and Saturday</td>
                                <td style="text-align: center;">10:00 a.m. to 6:00 p.m.</td>
                            </tr>
                        </tbody>

                        <br>
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align: center;">
                                    <h3>LIBRARY HEAD OF STAFF</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" style="text-align: center;">Sameer Khowaja (Head)</td>
                            </tr>
                        </tbody>
                    </table>

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