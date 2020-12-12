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
                        <li class="active"><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Users</a></li>
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

                        <li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                    </ul>
                    <div class="pull-right">
                        <div class="admin">Welcome: <?php echo $_SESSION['username_admin'] ?></div>
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
                <div class="span2">
                    <ul class="nav nav-tabs nav-stacked">
                        <li>
                            <a href="#add_user" data-toggle="modal"><i class="icon-plus icon-large"></i>&nbsp;<strong>Add User</strong></a>
                        </li>
                    </ul>


                    <!-- Modal add user -->
                    <div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-body">
                            <div class="alert alert-info"><strong>Add User</strong></div>
                            <form class="form-horizontal" method="post">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" name="password" id="inputPassword" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Firstname</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="firstname" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Lastname</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="lastname" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                        </div>
                    </div>

                    <?php
	if (isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	mysqli_query($conn,"insert into users (username,password,firstname,lastname) values('$username','$password','$firstname','$lastname')")or die(mysqli_error());
	}
	?>

                </div>
                <div class="span10">



                    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $user_query=mysqli_query($conn,"select * from users")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
                                    $id=$row['user_id']; 
                            ?>
                            <tr class="del<?php echo $id ?>">
                                <td>
                                    <?php echo $row['username']; ?>
                                </td>
                                <td>
                                    <?php echo $row['password']; ?>
                                </td>
                                <td>
                                    <?php echo $row['firstname']; ?>
                                </td>
                                <td>
                                    <?php echo $row['lastname']; ?>
                                </td>
                                <td width="100">
                                    <a rel="tooltip" title="Delete" id="<?php echo $id; ?>" href="#delete_user<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                    <div id="delete_user<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure yuo want to Delete this Data?</div>

                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete_user.php<?php echo '?id='.$id; ?>"><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                        </div>
                                    </div>


                                    <a rel="tooltip" title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    <div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-body">
                                            <div class="alert alert-info"><strong>Edit User</strong></div>
                                            <form class="form-horizontal" method="post">
                                                <div class="control-group">
                                                    <label class="control-label" for="inputEmail">Username</label>
                                                    <div class="controls">
                                                        <input type="hidden" id="inputEmail" name="id" value="<?php echo $row['user_id']; ?>" required>
                                                        <input type="text" id="inputEmail" name="username" value="<?php echo $row['username']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword">Password</label>
                                                    <div class="controls">
                                                        <input type="text" name="password" id="inputPassword" value="<?php echo $row['password']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputEmail">Firstname</label>
                                                    <div class="controls">

                                                        <input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputEmail">Lastname</label>
                                                    <div class="controls">

                                                        <input type="text" id="inputEmail" name="lastname" value="<?php echo $row['lastname']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                        </div>
                                    </div>

                                    <?php
	if (isset($_POST['edit'])){
	
	$user_id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	mysqli_query($conn,"update users set username='$username', password='$password' , firstname = '$firstname' , lastname = '$lastname'  where user_id='$user_id'")or die(mysqli_error()); ?>
                                        <script>
                                            window.location = "users.php";
                                        </script>
                                        <?php
	}
	?>
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
                                <!-- Modal edit user -->

                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                    <script type="text/javascript">
                        /*         $(document).ready( function() {
                                                            $('.btn-danger').click( function() {
                                                                var id = $(this).attr("id");
                                                                if(confirm("Are you sure you want to delete this Data?")){
                                                                    $.ajax({
                                                                        type: "POST",
                                                                        url: "delete_user.php",
                                                                        data: ({id: id}),
                                                                        cache: false,
                                                                        success: function(html){
                                                                        $(".del"+id).fadeOut('slow'); 
                                                                        } 
                                                                    }); 
                                                                }else{
                                                                    return false;}
                                                            });				
                                                        }); */
                    </script>


                </div>
            </div>
        </div>
    </div>

</body>

</html>