<html>
<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 14 (filtered)">
    <style>
        <!--
        /* Font Definitions */
        @font-face {
            font-family: Calibri;
            panose-1: 2 15 5 2 2 2 4 3 2 4;
        }

        @font-face {
            font-family: Tahoma;
            panose-1: 2 11 6 4 3 5 4 4 2 4;
        }

        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal {
            margin-top: 0in;
            margin-right: 0in;
            margin-bottom: 8.0pt;
            margin-left: 0in;
            line-height: 107%;
            font-size: 11.0pt;
            font-family: "Calibri", "sans-serif";
        }

        p.MsoAcetate, li.MsoAcetate, div.MsoAcetate {
            mso-style-link: "Balloon Text Char";
            margin: 0in;
            margin-bottom: .0001pt;
            font-size: 8.0pt;
            font-family: "Tahoma", "sans-serif";
        }

        span.BalloonTextChar {
            mso-style-name: "Balloon Text Char";
            mso-style-link: "Balloon Text";
            font-family: "Tahoma", "sans-serif";
        }

        .MsoChpDefault {
            font-family: "Calibri", "sans-serif";
        }

        .MsoPapDefault {
            margin-bottom: 8.0pt;
            line-height: 107%;
        }

        @page WordSection1 {
            size: 13.0in 8.5in;
            margin: 48.25pt .5in .5in .75in;
        }

        div.WordSection1 {
            page: WordSection1;
        }

        -->
    </style>
    <?php include('print_header.php'); ?>
    <?php include('session.php'); ?>
</head>
<body lang=EN-US>

<div class="empty">
    <?php include('navbar.php'); ?>
    <div class="container">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon-remove"></i><strong> Damage/Rusak Device Print Report</strong>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row-fluid">
        <div class="block">
            <div class=WordSection1>

                <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'><img width=356 height=130 id="Picture 1"
                                            src="print-list-inventory_files/image001.png"></span></b></p>
                <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'>LAPORAN BARANG RUSAK</span></b></p>

                <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
font-family:"Times New Roman","serif"'></span></b></p>

                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

                <div class="container">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="pull-left">
                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Daftar stok barang rusak:<o:p></o:p></span></p>

                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>DATE: <?php
                                        $date = new DateTime();
                                        echo $date->format('l, F jS, Y');
                                        ?>
                                        <o:p></o:p></span></p>

                                <div class="pull-right">
                                    <div class="empty">
                                        <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
		   <a href="#" onclick="window.print()" class="btn btn-info" id="print" data-placement="top"
              title="Click to Print"><i class="icon-print icon-large"></i> Print List</a></p>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('#print').tooltip('show');
                                                $('#print').tooltip('hide');
                                            });
                                        </script>
                                        <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
            normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
			<a id="return" data-placement="top" class="btn btn-success" title="klik untuk kembali" href="damage.php"><i
                        class="icon-arrow-left"></i> Back</a></p>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('#return').tooltip('show');
                                                $('#return').tooltip('hide');
                                            });
                                        </script>
                                    </div>
                                </div>

                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>


                                <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                                       style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                                    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
                                        <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1;
  mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>KODE BARANG<o:p></o:p></span></b>
                                            </p>
                                        </td>
                                        <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>JENIS BARANG<o:p></o:p></span></b>
                                            </p>
                                        </td>
                                        <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>MERK/Type<o:p></o:p></span></b>
                                            </p>
                                        </td>
                                        <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>NAMA BARANG<o:p></o:p></span></b>
                                            </p>
                                        </td>
                                        <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>KETERANGAN<o:p></o:p></span></b>
                                            </p>
                                        </td>
                                        <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>STATUS<o:p></o:p></span></b>
                                            </p>
                                        </td>
                                    </tr><?php
                                    $device_query = mysql_query("select * from stdevice			
		                     LEFT JOIN location_details ON stdevice.id = location_details.id		
		                     LEFT JOIN stlocation ON location_details.stdev_id = stlocation.stdev_id
							 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
							 where dev_status = 'Damage/Rusak' ORDER BY location_details.ld_id DESC") or die(mysql_error());
                                    while ($row = mysql_fetch_array($device_query)){
                                    $id = $row['id'];
                                    $stdev_id = $row['stdev_id'];
                                    $dev_status = $row['dev_status'];
                                    ?>
                                    <tr style='mso-yfti-irow:1'>
                                        <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_serial']; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <td width=188 valign=top style='width:140.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_name']; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <td width=188 valign=top style='width:140.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_model']; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <td width=188 valign=top style='width:140.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_brand']; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <td width=188 valign=top style='width:140.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_desc']; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <td width=188 valign=top style='width:140.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_status']; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <?php } ?>
                                        <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
                                    </tr>
                                    <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
                                    </tr>
                                </table>


                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

                                <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                                       style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                                    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
                                        <td width=1127 colspan=8 valign=top style='width:845.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
                                                            style='font-size:14.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>RECAPITULATION</span></b><b
                                                        style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;mso-bidi-font-size:
  11.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></b></p>
                                        </td>
                                    </tr>
                                    <tr style='mso-yfti-irow:1'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></b></p>
                                        </td>
                                        <td width=174 valign=top style='width:130.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>TYPE<o:p></o:p></span></b></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>TOTAL<o:p></o:p></span></b></p>
                                        </td>
                                        <td width=144 valign=top style='width:107.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></b></p>
                                        </td>
                                        <td width=141 valign=top style='width:105.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></b></p>
                                        </td>
                                        <td width=171 valign=top style='width:128.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>STATUS<o:p></o:p></span></b></p>
                                        </td>
                                        <td width=192 valign=top style='width:2.0in;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>TOTAL<o:p></o:p></span></b></p>
                                        </td>
                                        <td width=60 valign=top style='width:44.75pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></b></p>
                                        </td>
                                    </tr>
                                    <tr style='mso-yfti-irow:2'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <?php
                                        $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Tanah' 
			   ORDER BY stdevice.id DESC");
                                        $count = mysql_num_rows($count_item);
                                        ?>
                                        <td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Tanah<o:p></o:p></span></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <td width=144 valign=top style='width:107.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <td width=141 valign=top style='width:105.7pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>

                                        <?php
                                        $count_item = mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_status = 'Damage/Rusak' OR dev_status = 'Damage/Rusak' ORDER BY stdevice.id DESC ");
                                        $count = mysql_num_rows($count_item);
                                        ?>
                                        <td width=171 valign=top style='width:128.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Rusak<o:p></o:p></span></p>
                                        </td>
                                        <td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <td width=60 valign=top style='width:44.75pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                    </tr>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			      dev_status = 'Damage/Rusak'    and dev_name = 'Alat Berat'
			      ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>

                                    <tr style='mso-yfti-irow:3'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Alat Berat<o:p></o:p></span></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                        <td width=144 valign=top style='width:107.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>

                                    </tr>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Angkutan'
			   ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Alat Angkutan<o:p></o:p></span></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                    </tr>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Bengkel dan Alat Ukur' 
			    ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Alat Bengkel dan Alat Ukur<o:p></o:p></span></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                    </tr>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Kantor dan Rumah Tangga'
			   ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Alat Kantor dan Rumah Tangga<o:p></o:p></span></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                    </tr>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Alat Studio dan Komunikasi'
			   ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Alat Studio dan Komunikasi<o:p></o:p></span></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                    </tr>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage/Rusak' and dev_name = 'Gedung dan Bangunan' 
			   ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Gedung dan Bangunan<o:p></o:p></span></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                    </tr>

                                    <?php
                                    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			   dev_status = 'Damage/Rusak'    and dev_name = 'INSTALASI'
			    ORDER BY stdevice.id DESC");
                                    $count = mysql_num_rows($count_item);
                                    ?>
                                    <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
                                        <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                                        </td>
                                        <td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>INSTALASI<o:p></o:p></span></p>
                                        </td>
                                        <td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><?php echo $count; ?>
                                                    <o:p></o:p></span></p>
                                        </td>
                                    </tr>

                                </table>

                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

                                <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
                                       style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
                                    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:44.85pt'>
                                    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:44.85pt'>
                                        <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;
  height:44.85pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Di cetak oleh:<o:p></o:p></span></p>
                                        </td>
                                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:44.85pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Diterima oleh:<o:p></o:p></span></p>
                                        </td>
                                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:44.85pt'>
                                            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Diperiksa oleh:<o:p></o:p></span></p>
                                        </td>
                                    </tr>
                                    </tr>

                                    <?php $query = mysql_query("select * from admin where admin_id = '$session_id'") or die(mysql_error());
                                    $row = mysql_fetch_array($query);
                                    ?>
                                    <tr style='mso-yfti-irow:1;height:17.85pt'>
                                        <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
                                            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
                                                                style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><?php echo $row['firstname'] . " " . $row['lastname']; ?>
                                                            <o:p></o:p></span></u></b></p>
                                        </td>
                                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
                                            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
                                                                style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>TAYYIBAH A. GHANI<o:p></o:p></span></u></b>
                                            </p>
                                        </td>
                                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
                                            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
                                                                style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Drs. YAYAK NURWAHYUDI, M.si<o:p></o:p></span></u></b>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
                                        <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Staff<o:p></o:p></span></p>
                                        </td>
                                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Pengatur muda Tk 1<o:p></o:p></span></p>
                                        </td>
                                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Pembina Utama Muda<o:p></o:p></span></p>
                                        </td>
                                    </tr>
                                </table>

                                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<?php include('script.php'); ?>
<div class="empty">
</div>
</html>