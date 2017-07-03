<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<body id="home">
<?php include('navbar_client.php'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php include('Device_sidebar.php'); ?>

        <div class="span9" id="content">
            <div class="row-fluid">

                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Tambah barang</div>
                        <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return"
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
                        <div class="alert alert-success"><i class="icon-info-sign"></i> Isilah detail data dibawah ini
                        </div>
                        <form class="form-horizontal" method="post">

                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Jenis Barang</label>
                                <div class="controls">
                                    <select name="dev_id" class="chzn-select" required/>
                                    <option></option>
                                    <?php $device_name = mysql_query("select * from device_name") or die(mysql_error());
                                    while ($row = mysql_fetch_array($device_name)) {
                                        ?>
                                        <option value="<?php echo $row['dev_id']; ?>&nbspName&nbsp<?php echo $row['dev_name']; ?>"><?php echo $row['dev_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Kode Barang</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="dev_serial" id="inputPassword"
                                           placeholder="kode" required>
                                </div>
                            </div>

                            <!--Register-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Register</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="register" id="inputPassword"
                                           placeholder="Register" required>
                                </div>
                            </div>
                            <!--Device name-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Nama Barang</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="dev_brand" id="inputPassword"
                                           placeholder="Nama Barang" required>
                                </div>
                            </div>
                            <!--Device type-->

                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Merk/Type</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="dev_model" id="inputPassword"
                                           placeholder="Type" required>
                                </div>
                            </div>
                            <!--No(Sertifikat,Manufaktur,Chasis,Mechine-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">No (Sertifikat/Pabrik<br>Chesis/Mesin)</label>

                                <div class="controls">
                                    <input type="text" class="span8" name="no_sertificat" id="inputPassword"
                                           placeholder="No Sertifikat/Pabrik/Chesis/Mesin" required>
                                </div>
                            </div>
                            <!--Material-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Bahan</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="material" id="inputPassword"
                                           placeholder="Bahan" required>
                                </div>
                            </div>
                            <!--get device-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Asal/Perolehan Barang</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="get_device" id="inputPassword"
                                           placeholder="Asal/Perolehan Barang" required>
                                </div>
                            </div>
                            <!--Get year-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Tahun Perolehan</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="get_year" id="inputPassword"
                                           placeholder="Tahun Perolehan" required>
                                </div>
                            </div>
                            <!--dev size-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Ukuran
                                    Barang/<br>Konstruksi(P,S,D)</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="dev_size" id="inputPassword"
                                           placeholder="P,S,D" required>
                                </div>
                            </div>
                            <!--Unit-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Satuan</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="unit" id="inputPassword"
                                           placeholder="satuan" required>
                                </div>
                            </div>
                            <!--dev_condition-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Keadaan Barang<br>(B/R/RB)</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="dev_condition" id="inputPassword"
                                           placeholder="B/R/RB" required>
                                </div>
                            </div>
                            <!--dev stocks-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Jumlah Barang</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="dev_stocks" id="inputPassword"
                                           placeholder="Jumlah" required>
                                </div>
                            </div>
                            <!--dev price-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Total harga</label>
                                <div class="controls">
                                    <input type="text" class="span8" name="dev_price" id="inputPassword"
                                           placeholder="Total harga" required>
                                </div>
                            </div>
                            <!--dev status-->
                            <div id="hide">
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword" placeholder="Device Status">Status
                                        Barang</label>
                                    <div class="controls">
                                        <select name="dev_status" required>
                                            <option>New</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--dev desc-->
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Description</label>
                                <div class="controls">
                                    <textarea name="dev_desc" id="ckeditor_full"></textarea>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="controls">
                                    <button name="save" id="save" name="singlebutton" data-placement="right"
                                            title="Click here to Save your new data." class="btn btn-primary"><i
                                                class="icon-save"></i> Save
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
                        if (isset($_POST['save'])) {
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


                            //$query = mysql_query("select * from stdevice where dev_serial = '$dev_serial' ") or die(mysql_error());
                            //$count = mysql_num_rows($query);

                            /*if ($count > 0) { ?>
                                <script>
                                    alert('Device Code already Exist');
                                    window.location = "device_stocks.php";
                                </script>
                            <?php
                            }else{*/
                            mysql_query("insert into stdevice (dev_id,dev_serial,register,dev_brand,dev_model,no_sertificat,material,get_device,get_year,dev_size,unit,dev_condition,dev_stocks,dev_price,dev_desc,dev_status) values('$dev_id','$dev_serial','$register','$dev_brand','$dev_model','$sertifikat','$material','$get_device','$get_year','$dev_size','$unit','$dev_condition','$dev_stocks','$dev_price','$dev_desc','$dev_status')") or die(mysql_error());
                            mysql_query("insert into notification (fullname,notification,date_of_notification,link) value('$client_fullname','Menambahkankan barang dengan id $dev_id, kode barang: $dev_serial',NOW(),'device_stocks.php')") or die(mysql_error());
                            ?>
                                <script>
                                    window.location = "device_stocks.php";
                                    $.jGrowl("Barang sukses ditambahkan", {header: 'Device add'});
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
    <?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>

</html>