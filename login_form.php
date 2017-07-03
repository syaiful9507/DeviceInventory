
<center><img width="400px" height="200px" src="admin/images/sclogo.png"></center>
<center><p style="font-size: x-large"><b>Inventori Barang</p></center>
<i class="fa fa-user-circle" aria-hidden="true"></i>
<form id="login_form1" class="form-signin" method="post" >
    <h3 class="form-signin-heading">
        <i class="icon-lock"></i> login
    </h3>
    <input type="text" class="input-block-level" id="username" name="username" placeholder="Username" required>
    <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>

    <button data-placement="right" title="klik disini untuk Sign In" id="signin" name="login" class="btn btn-info"
            type="submit"><i class="icon-signin icon-large"></i> Sign in
    </button>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#signin').tooltip('show');
            $('#signin').tooltip('hide');
        });
    </script>
</form>
<script>
    jQuery(document).ready(function () {
        jQuery("#login_form1").submit(function (e) {
            e.preventDefault();
            var formData = jQuery(this).serialize();
            $.ajax({
                type: "POST",
                url: "login.php",
                data: formData,
                success: function (html) {
                    if (html == 'true_admin') {
                        $.jGrowl("Loading File Please Wait......", {sticky: true});
                        $.jGrowl("Selamat Datang di Teknologi Inventory Barang (T.I.B)", {header: 'Akses di ijinkan'});
                        var delay = 1000;
                        setTimeout(function () {
                            window.location = 'admin/dashboard.php'
                        }, delay);
                    } else if (html == 'true') {
                        $.jGrowl("Selamat Datang di Teknologi Inventory Barang (I.B)", {header: 'Akses di ijinkan'});
                        var delay = 1000;
                        setTimeout(function () {
                            window.location = 'technical Staff/dashboard_client.php'
                        }, delay);
                    } else {
                        $.jGrowl("Mohon cek password dan username ", {header: 'Login gagal'});
                    }
                }
            });
            return false;
        });
    });
</script>
			