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
    <link rel="stylesheet" type="text/css" media="print" href="css/print.css" />

    <!-- js -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.hoverdir.js"></script>

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

    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script>
    <script type='text/javascript' src='scripts/diapo.js'></script>


    <!--sa calendar-->
    <script type="text/javascript" src="js/datepicker.js"></script>
    <link href="css/datepicker.css" rel="stylesheet" type="text/css" />

</head>
<?php include('librarian/dbcon.php'); ?>

<body>
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
                            <a rel="tooltip" data-placement="bottom" title="View Books" id="book" href="view_book.php"><i class="icon-book icon-large"></i>&nbsp;View Books</a>
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
	<img class="stilogo" src="images/title_img.jpg">
	</div>

    <div class="container">
        <div class="margin-top">
            <div class="row">
                <div class="span12">
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
                    </div>
                    <center class="title">
                        <h1>Books List</h1>
                    </center>
                    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>Acc No.</th>
                                <th>Book Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th class="action">copies</th>
                                <th>Book Pub</th>
                                <th>Publisher Name</th>
                                <th>ISBN</th>
                                <th>Copyright Year</th>
                                <th>Date Added</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
								  $user_query=mysqli_query($conn,"select * from book where status != 'Archive'")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];
									$book_copies = $row['book_copies'];
									
									$borrow_details = mysqli_query($conn,"select * from borrowdetails where book_id = '$id' and borrow_status = 'pending'");
									$row11 = mysqli_fetch_array($borrow_details);
									$count = mysqli_num_rows($borrow_details);
									
									$total =  $book_copies  -  $count; 
									/* $t4otal =  $book_copies  - $borrow_details;
									
									echo $total; */
											$cat_query = mysqli_query($conn,"select * from category where category_id = '$cat_id'")or die(mysqli_error());
											$cat_row = mysqli_fetch_array($cat_query);
									?>
                            <tr class="del<?php echo $id ?>">
                                <td>
                                    <?php echo $row['book_id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['book_title']; ?>
                                </td>
                                <td>
                                    <?php echo $cat_row ['classname']; ?> </td>
                                <td>
                                    <?php echo $row['author']; ?> </td>
                                <td class="action">
                                    <?php echo /* $row['book_copies']; */   $total;   ?> </td>
                                <td>
                                    <?php echo $row['book_pub']; ?>
                                </td>
                                <td>
                                    <?php echo $row['publisher_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['isbn']; ?>
                                </td>
                                <td>
                                    <?php echo $row['copyright_year']; ?>
                                </td>
                                <td>
                                    <?php echo $row['date_added']; ?>
                                </td>
                                <td>
                                    <?php echo $row['status']; ?>
                                </td>
                                <!-- script -->
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#e<?php echo $id; ?>').tooltip('show')
                                        $('#e<?php echo $id; ?>').tooltip('hide')
                                    });
                                </script>
                                <!-- end script -->
                                <!-- script -->
                                <script type="text/javascript">
                                    $(document).ready(function() {

                                        $('#<?php echo $id; ?>').tooltip('show')
                                        $('#<?php echo $id; ?>').tooltip('hide')
                                    });
                                </script>
                                <!-- end script -->
                                <!-- script -->
                                <script type="text/javascript">
                                    $(document).ready(function() {

                                        $('#v<?php echo $id; ?>').tooltip('show')
                                        $('#v<?php echo $id; ?>').tooltip('hide')
                                    });
                                </script>
                                
                            </tr>
                            <?php  }  ?>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

</body>

</html>