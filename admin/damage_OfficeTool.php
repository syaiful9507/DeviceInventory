<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php include('damage_slidebar.php'); ?>

        <div class="span9" id="content">
            <div class="row-fluid">
                <h2 id="sc" align="center">
                    <image src="images/sclogo.png" width="45%" height="45%"/>
                </h2>
                <?php
                $count_item = mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_status = 'Damage/Rusak' and dev_name = 'Alat Kantor dan Rumah Tangga' 
				  ORDER BY stdevice.id DESC ");
                $count = mysql_num_rows($count_item);
                ?>
                <div id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"><i class="icon-remove-sign"></i> Damage/Rusak Alat Kantor dan Rumah Tangga
                        </div>
                        <div class="muted pull-right">
                            Total: <span class="badge badge-info"><?php echo $count; ?></span>
                        </div>
                    </div>

                    <h4 id="sc">Daftar Alat Kantor dan Rumah Tangga Rusak
                        <div align="right" id="sc">Date:
                            <?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                            ?></div>
                    </h4>

                    <div class="container-fluid">
                        <div class="row-fluid">
                            <br/>
                            <div class="pull-left">
                                <ul class="nav nav-pills">
                                    <li class="">
                                        <a href="damage.php">All</a>
                                    </li>


                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			      dev_status = 'Damage/Rusak'    and dev_name = 'Alat Berat' 
			      ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <li class="">
                                        <a href="damage_heavy_equipment.php">Alat Berat<span
                                                    class="label label-default"> <?php echo $count; ?></span></a></a>
                                    </li>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Angkutan'
			   ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <li class="">
                                        <a href="damage_transport_equipment.php">Alat Angkutan&nbsp;<span
                                                    class="label label-default"> <?php echo $count; ?></span></a>
                                    </li>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Bengkel dan Alat Ukur' 
			   ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <li class="">
                                        <a href="damage_WorkshopTool.php">Alat Bengkel dan Alat Ukur<span
                                                    class="label label-default"> <?php echo $count; ?></span></a>
                                    </li>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Kantor dan Rumah Tangga'
			      ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <li class="active">
                                        <a href="damage_OfficeTool.php">Alat Kantor dan Rumah Tangga<span
                                                    class="label label-default"> <?php echo $count; ?></span></a>
                                    </li>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Studio dan Komunikasi' 
			    ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <li class="">
                                        <a href="damage_StudioTool.php">Alat Studio dan Komunikasi&nbsp;<span
                                                    class="label label-default"> <?php echo $count; ?></span></a>
                                    </li>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Gedung dan Bangunan' 
			      ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <li class="">
                                        <a href="damage_Building.php">Gedung dan Bangunan<span
                                                    class="label label-default"> <?php echo $count; ?></span></a>
                                    </li>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			   dev_status = 'Damage/Rusak'    and dev_name = 'INSTALASI' 
			   	   ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <li class="">
                                        <a href="damage_Installation.php">INSTALASI<span
                                                    class="label label-default"> <?php echo $count; ?></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="block-content collapse in">
                        <div class="span12">
                            <form action="" method="post">
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                    <thead>
                                    <tr>
                                        <th class="empty"></th>
                                        <th>Jenis Barang</th>
                                        <th>Keterangan</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Merk/Type</th>
                                        <th>Status Barang</th>
                                        <th>Lokasi</th>
                                        <th class="empty"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-----------------------------------Content------------------------------------>
                                    <?php
                                    $device_query = mysql_query("select * from stdevice			
		       LEFT JOIN location_details ON stdevice.id = location_details.id		
		       LEFT JOIN stlocation ON location_details.stdev_id = stlocation.stdev_id
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Kantor dan Rumah Tangga' 
			   ORDER BY location_details.ld_id  DESC") or die(mysql_error());
                                    while ($row = mysql_fetch_array($device_query)) {
                                        $id = $row['id'];
                                        $stdev_id = $row['stdev_id'];
                                        $dev_status = $row['dev_status'];
                                        ?>

                                        <tr>
                                            <td class="empty">
                                                <i class="icon-remove-sign"></i>
                                            </td>
                                            <td><?php echo $row['dev_name']; ?></td>
                                            <td><?php echo $row['dev_desc']; ?></td>
                                            <td><?php echo $row['dev_serial']; ?></td>
                                            <td><?php echo $row['dev_brand']; ?></td>
                                            <td><?php echo $row['dev_model']; ?></td>
                                            <td><?php
                                                $device_query1 = mysql_query("select * from stdevice ") or die(mysql_error());
                                                $dev = mysql_fetch_assoc($device_query1);
                                                if ($row['dev_status'] == 'Damage/Rusak') {
                                                    echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>' . $row['dev_status'] . '</strong></div>';
                                                } else {
                                                    echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>' . $row['dev_status'] . '</strong></div>';
                                                };
                                                ?></td>

                                            <td><?php echo $row['stdev_location_name']; ?></td>

                                            <?php include('modal_damage.php'); ?>
                                            <?php include('toolttip_edit_delete.php'); ?>
                                            <?php if ($dev_status == 'Repaired') { ?>
                                                <td><a class="btn btn-success">Repaired</a></td>
                                            <?php } else if ($dev_status == 'Damage/Rusak') { ?>
                                                <td><a rel="tooltip" title="Repair" id="e<?php echo $id; ?>"
                                                       href="#repair<?php echo $id; ?>" data-toggle="modal"
                                                       class="btn btn-success">
                                                        <div class="hide">Damage/Rusak</div>
                                                        Repair</a></td>
                                            <?php } else { ?>
                                                <td></td>
                                            <?php } ?>

                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>
</html>