<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Library Management System</title>

    <link rel="stylesheet" href="../css/bootstrap4.4.1.min.css">
    <link rel="stylesheet" href="../css/login-style.css">

</head>

<body>
    <?php include('dbcon.php'); ?>

    <div class="container">
        <span href="#" class="button" id="toggle-login">Login</span>
        <div id="login">
            <div id="triangle"></div>
            <h1>User Authentication</h1>
            <div id="login">
            <div class="pull-right">
                <i class="icon-calendar icon-large"></i>
                <?php
                $Today = date('y:m:d');
                $new = date('l, F d, Y', strtotime($Today));
                echo "<center>".$new."</center>";
                ?>
            </div>
            </div>
            <form method="POST">
                <input type="text" name="login" value="" placeholder="Username" required>
                <input type="password" name="password" value="" placeholder="Password" required>
                <input type="submit" name="commit" value="Login">
                <br>

                <?php
                if (isset($_POST['commit'])){
                    session_start();
                    $username = $_POST['login'];
                    $password = $_POST['password'];
                    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                    
                    $result = mysqli_query($conn,$query)or die(mysqli_error());
                    $num_row = mysqli_num_rows($result);
                    $row=mysqli_fetch_array($result);

                    if( $num_row > 0 ) {
                        $_SESSION['id']=$row['user_id'];
                        $_SESSION['username_admin'] = $row['firstname']." ".$row['lastname'];
                        header('location: dashboard.php');
                    }
                    else{ ?>
                        <div class="alert alert-danger">Access Denied</div>
                        <?php
                }}
                ?>

            </form>
        </div>
    </div>
    

</body>

</html>