<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<body>
<?php include('navbar.php'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php include('Device_sidebar.php'); ?>

        <div class="span9" id="content">
            <div class="row-fluid">
                <a href="add_Device.php" class="btn btn-info" id="add" data-placement="right"
                   title="klik untuk menambah barang"><i class="icon-plus-sign icon-large"></i> Tambah Barang</a>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#add').tooltip('show');
                        $('#add').tooltip('hide');
                    });
                </script>
                <!-- block -->
                <div id="" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Edit Device</div>
                        <div class="muted pull-right"><a id="return" data-placement="left" title="klik    untuk kembali"
                                                         href="device_stocks.php"><i
                                        class="icon-arrow-left icon-large"></i> Back</a></div>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#return').tooltip('show');
                                $('#return').tooltip('hide');
                            });
                        </script>
                    </div>
                    <div class="block-content collapse in">

                        <?php
                        $query = mysql_query("select * from stdevice 
									LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
									where id = '$get_id'") or die(mysql_error());
                        $row = mysql_fetch_array($query);
                        ?>

                        <form class="form-horizontal" method="post">

                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Nama Barang</label>
                                <div class="controls">
                                    <select id="qtype" name="dev_id" required>

                                        <option value="<?php echo $row['dev_id']; ?>"><?php echo $row['dev_name']; ?></option>
                                        <?php
                                        $device_query = mysql_query("select * from device_name") or die(mysql_error());
                                        while ($query_device_row = mysql_fetch_array($device_query)) {
                                            $dev_name = $row['dev_name'];
                                            ?>
                                            <option value="<?php echo $query_device_row['dev_id']; ?>"><?php echo $query_device_row['dev_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Kode Barang</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['dev_serial']; ?>"
                                           name="dev_serial" id="inputPassword"
                                           placeholder="kode" >
                                </div>
                            </div>

                            <!--Register-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Register</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['register'];?>" name="register" id="inputPassword"
                                           placeholder="Register" >
                                </div>
                            </div>
                            <!--Device name-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Nama Barang</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['dev_brand'];?>" name="dev_brand" id="inputPassword"
                                           placeholder="Nama Barang" >
                                </div>
                            </div>
                            <!--Device type-->

                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Merk/Type</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['dev_model'];?>" name="dev_model" id="inputPassword"
                                           placeholder="Type" >
                                </div>
                            </div>
                            <!--No(Sertifikat,Manufaktur,Chasis,Mechine-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">No (Sertifikat/Pabrik<br>Chesis/Mesin)</label>

                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['no_sertificat'];?>" name="no_sertificat" id="inputPassword"
                                           placeholder="No Sertifikat/Pabrik/Chesis/Mesin" >
                                </div>
                            </div>
                            <!--Material-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Bahan</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['material'];?>" name="material" id="inputPassword"
                                           placeholder="Bahan" >
                                </div>
                            </div>
                            <!--get device-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Asal/Perolehan Barang</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['get_device'];?>" name="get_device" id="inputPassword"
                                           placeholder="Asal/Perolehan Barang" >
                                </div>
                            </div>
                            <!--Get year-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Tahun Perolehan</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['get_year'];?>" name="get_year" id="inputPassword"
                                           placeholder="Tahun Perolehan" >
                                </div>
                            </div>
                            <!--dev size-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Ukuran
                                    Barang/<br>Konstruksi(P,S,D)</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['dev_size'];?>" name="dev_size" id="inputPassword"
                                           placeholder="P,S,D" >
                                </div>
                            </div>
                            <!--Unit-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Satuan</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['unit'];?>" name="unit" id="inputPassword"
                                           placeholder="satuan" >
                                </div>
                            </div>
                            <!--dev_condition-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Keadaan Barang<br>(B/R/RB)</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['dev_condition'];?>" name="dev_condition" id="inputPassword"
                                           placeholder="B/R/RB" >
                                </div>
                            </div>
                            <!--dev stocks-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Jumlah Barang</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['dev_stocks'];?>" name="dev_stocks" id="inputPassword"
                                           placeholder="Jumlah" >
                                </div>
                            </div>
                            <!--dev price-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Total harga</label>
                                <div class="controls">
                                    <input type="text" class="span8" value="<?php echo $row['dev_price'];?>" name="dev_price" id="inputPassword"
                                           placeholder="Total harga" >
                                </div>
                            </div>
                            <!--dev status-->
                            <div id="hide">
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword" placeholder="Device Status">Status
                                        Barang</label>
                                    <div class="controls">
                                        <select value="" name="dev_status" >
                                            <option><?php echo $row['dev_status']; ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--dev desc-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Description</label>
                                <div class="controls">
                                    <textarea name="dev_desc" id="ckeditor_full" ><?php echo $row['dev_desc']; ?></textarea>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="controls">
                                    <button id="update" data-placement="right" title="klik untuk merubah" name="update"
                                            type="submit" class="btn btn-info"><i class="icon-save icon-large"></i>
                                        Update
                                    </button>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#save').tooltip('show');
                                    $('#save').tooltip('hide');
                                });
                            </script>
                        </form>

                        <?php
                        if (isset($_POST['update'])) {
                            $dev_id = $_POST['dev_id'];
                            $dev_serial = $_POST['dev_serial'];
                            $register = $_POST['register'];
                            $dev_brand = $_POST['dev_brand'];
                            $dev_model = $_POST['dev_model'];
                            $sertifikat = $_POST['no_sertificat'];
                            $material = $_POST['material'];
                            $get_device = $_POST['get_device'];
                            $get_year = $_POST['get_year'];
                            $dev_size = $_POST['dev_size'];
                            $unit = $_POST['unit'];
                            $dev_condition = $_POST['dev_condition'];
                            $dev_stocks = $_POST['dev_stocks'];
                            $dev_price = $_POST['dev_price'];
                            $dev_desc = $_POST['dev_desc'];
                            $dev_status = $_POST['dev_status'];


                            mysql_query("update stdevice set dev_id = '$dev_id' ,
																		dev_serial = '$dev_serial',
																		register  = '$register',
																		dev_brand = '$dev_brand',
																		dev_model = '$dev_model',
																		no_sertificat = '$sertifikat',
																		material = '$material',
																		get_device = '$get_device',
																		get_year = '$get_year',
																		dev_size = '$dev_size',
																		unit = '$unit',
																		dev_condition = '$dev_condition',
																		dev_stocks = '$dev_stocks',
																		dev_price = '$dev_price',
																		dev_desc = '$dev_desc',
																		dev_status = '$dev_status'
																		where id = '$get_id' ") or die(mysql_error());

                            mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit device info $dev_name')") or die(mysql_error());
                            ?>
                            <script>
                                window.location = "device_stocks.php";
                                $.jGrowl("Barang berhasil diubah", {header: 'Update barang'});
                            </script>
                            <?php
                        }


                        ?>


                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function () {
            jQuery("#opt11").hide();
            jQuery("#opt12").hide();
            jQuery("#opt13").hide();

            jQuery("#qtype").change(function () {
                var x = jQuery(this).val();
                if (x == '1') {
                    jQuery("#opt11").show();
                    jQuery("#opt12").hide();
                    jQuery("#opt13").hide();
                } else if (x == '2') {
                    jQuery("#opt11").hide();
                    jQuery("#opt12").show();
                    jQuery("#opt13").hide();
                }
            });

        });
    </script>
    <?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>

</html>