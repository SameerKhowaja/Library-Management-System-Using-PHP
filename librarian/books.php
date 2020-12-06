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
                        <li class="active"><a href="books.php"><i class="icon-book icon-large"></i>&nbsp;Books</a></li>
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
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
                    </div>
                    <!--  -->
                    <!-- <ul class="nav nav-pills">
                        <li class="active"><a href="books.php">All</a></li>
                        <li><a href="new_books.php">New Books</a></li>
                        <li><a href="old_books.php">Old Books</a></li>
                        <li><a href="lost.php">Lost Books</a></li>
                        <li><a href="damage.php">Damage Books</a></li>
                        <li><a href="sub_rep.php">Subject for Replacement</a></li>
                    </ul> -->
                    <!--  -->
                    <center class="title">
                        <h1>Books List</h1>
                    </center>
                    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                        <div class="pull-right">
                            <a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
                        </div>
                        <p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Books</a></p>

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
                                <th class="action">Action</th>
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
                                <!-- end script -->
                                <td class="action">
                                    <a rel="tooltip" title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                    <div id="delete_book<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you want to Delete this Data?</div>

                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete_books.php<?php echo '?id='.$id; ?>">Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                        </div>
                                    </div>


                                    <a rel="tooltip" title="Edit" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>

                                </td>

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