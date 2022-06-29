                   <?php 
                   $kas_tersedia=0;
                   $total_keluar=0;
                   $total_masuk=0;
                   $sql=$koneksi->query('select*from kas');
                  while($data=$sql-> fetch_assoc())
                  {
                  	$keluar=$data['keluar'];
                  	$jumlah=$data['jumlah'];

                  	$total_masuk+=$jumlah;
                  	$total_keluar+=$keluar;

                  	

                  }
                  $kas_tersedia=$total_masuk-$total_keluar;
                    ?>
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                       <marquee direction="right"width="75%" scrollamount="8"><p style="color: black"margin="10px"scrollamount="20"> <h2>Jumlah Kas keluar masuk Kenanga Laundry</h2></marquee>
                    </div>
                </div>              
                  <hr />
                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="glyphicon glyphicon-floppy-open"></i>
                </span>

                <div class="text-box" >

                    <p class="main-text"><?php echo $total_masuk; ?></p>
                    <p class="text-muted">Jumlah Kas Masuk</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="glyphicon glyphicon-floppy-save"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $total_keluar ?></p>
                    <p class="text-muted"><?php echo "Total Kas Keluar"; ?></p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="glyphicon glyphicon-usd"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $kas_tersedia; ?></p>
                    <p class="text-muted">Kas Tersedia</p>
                </div>
             </div>
		     </div>
                   