<!DOCTYPE html>
<html>

<head>
    <title>Library Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="../css/docs.css" rel="stylesheet" media="screen">
    <link href="../css/diapo.css" rel="stylesheet" media="screen">
    <link href="../css/font-awesome.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="print" href="../css/print.css" />

    <!-- js -->
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.hoverdir.js"></script>

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

    <script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>
    <script type='text/javascript' src='../scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='../scripts/jquery.hoverIntent.minified.js'></script>
    <script type='text/javascript' src='../scripts/diapo.js'></script>


    <!--sa calendar-->
    <script type="text/javascript" src="../js/datepicker.js"></script>
    <link href="../css/datepicker.css" rel="stylesheet" type="text/css" />

</head>
<?php include('dbcon.php'); ?>

<body>

    <?php include('session.php'); ?>

    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse collapse">
                    <!-- .nav, .navbar-search, .navbar-form, etc -->
                    <ul class="nav">
                        <li><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
                        <li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Users</a></li>
                        <li>
                            <a href="borrow.php" data-toggle="dropdown"><i class="icon-file icon-large"></i> Transaction</a>
                            <ul class="dropdown-menu">
                                <li><a href="borrow.php"><i class="icon-pencil icon-large"></i>&nbsp;Borrow</a></li>
                                <li><a href="return.php"><i class="icon-cog icon-large"></i>&nbsp;View Returned Books</a></li>
                                <li><a href="view_borrow.php"><i class="icon-reorder icon-large"></i>&nbsp;View Borrowed Books</a></li>
                            </ul>
                        </li>
                        <li><a href="books.php"><i class="icon-book icon-large"></i>&nbsp;Books</a></li>
                        <li><a href="member.php"><i class="icon-group icon-large"></i>&nbsp;Member</a></li>
                        <li><a href="archive.php"><i class="icon-list-alt icon-large"></i>&nbsp;Deleted Books</a></li>
                        <li><a href="#myModal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Advance Search</a></li>
                        <!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->

                        <li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                    </ul>
                    <div class="pull-right">
                        <div class="admin">Welcome: Librarian</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header"></div>
        <div class="modal-body">
            <form class="form-horizontal" method="post" action="advance_search.php">
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Title</label>
                    <div class="controls">
                        <input type="text" name="title" id="inputEmail" placeholder="Title">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Author</label>
                    <div class="controls">
                        <input type="text" name="author" id="inputPassword" placeholder="Author">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>



    <div class="container">
        <div class="margin-top">
            <div class="row">
                <div class="span12">
                    <div class="alert alert-info"><strong>Borrowed Books</strong></div>
                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                        <div class="pull-right">
                            <a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
                        </div>
                        <thead>
                            <tr>
                                <th>Book title</th>
                                <th>Borrower</th>
                                <th>Year Level</th>
                                <th>Date Borrow</th>
                                <th>Due Date</th>
                                <th>Date Returned</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php  $user_query=mysqli_query($conn,"select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id 
								where borrowdetails.borrow_status = 'returned'ORDER BY borrow.borrow_id DESC
								  ")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];
				
									?>
                            <tr class="del<?php echo $id ?>">


                                <td>
                                    <?php echo $row['book_title']; ?>
                                </td>
                                <td>
                                    <?php echo $row['firstname']." ".$row['lastname']; ?>
                                </td>
                                <td>
                                    <?php echo $row['year_level']; ?>
                                </td>
                                <td>
                                    <?php echo $row['date_borrow']; ?>
                                </td>
                                <td>
                                    <?php echo $row['due_date']; ?> </td>
                                <td>
                                    <?php echo $row['date_return']; ?> </td>
                                <td></td>

                            </tr>
                            <?php  }  ?>
                        </tbody>
                    </table>


                </div>

                <script>
                    $(".uniform_on").change(function() {
                        var max = 3;
                        if ($(".uniform_on:checked").length == max) {

                            $(".uniform_on").attr('disabled', 'disabled');
                            alert('3 Books are allowed per borrow');
                            $(".uniform_on:checked").removeAttr('disabled');

                        } else {

                            $(".uniform_on").removeAttr('disabled');
                        }
                    })
                </script>
            </div>
        </div>
    </div>

</body>

</html>