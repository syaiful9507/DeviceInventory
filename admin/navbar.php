<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand" href="#">Admin Panel</span>
            </div>
            <!--.nav-collapse -->
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <?php $query = mysql_query("select * from admin where admin_id = '$session_id'") or die(mysql_error());
                    $row = mysql_fetch_array($query);
                    ?>
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img id="avatar1"
                                                                                                      class="img-circle"
                                                                                                      src="<?php echo $row['adminthumbnails']; ?>">&nbsp;<?php echo $row['firstname'] . " " . $row['lastname']; ?>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="change_password_admin.php"><i class="icon-cog"></i>&nbsp;Ubah
                                    Password</a>
                                <a tabindex="-1" href="#myModal3" data-toggle="modal"><i class="icon-picture"></i>&nbsp;Ubah
                                    Gambar</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<?php include('admin_change_picture.php'); ?>