<?php 
$hari_ini=date('d-m-Y'); 
$cari=$_GET['cari'];
if(isset($_GET['tolong_cari']))
{
    $sql=$koneksi->query("select*from kas where tanggal like '$");
    while ($data=$sql->fetch_assoc()) 
    { 
        ?>
    <tr class="odd gradeX">
<td style="text-align: center;"><?php echo $no++ ?></td>
<td style="text-align: center;"><?php echo $data['kode']; ?></td>
<td style="text-align: center;"><?php echo $data['tanggal']; ?></td>
<td style="text-align: center;"><?php echo $data['keterangan']; ?></td>
<td style="text-align: center;"><?php echo $data['jumlah']; ?></td>
<td style="text-align: center;"><?php echo $data['keluar']; ?></td>                                                                                   
</tr>
   <?php 
    }

}

    ?>


<div class="row">
                <div class="col-md-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading" class="glyphicon glyphicon-usd" style="background-color:#14C38E; color:black">
                             Kas Masuk
                        </div>
                        <div class="panel-body">
                            <div>
                               
                            </div>
                            <div class="table-responsive">
                                <table class="table table-dark" id="dataTables-example" style="background:#B7E5DD">
                                 <input type="input" name="cari">
                                <input type="button" class="btn btn-succes" value="Cari" name="tolong_cari">
                                    <thead>
                                        <tr>
                                        	<th style="text-align: center;">Nomor</th>
                                            <th style="text-align: center;">Kode Nota</th>
                                            <th style="text-align: center;">Tanggal</th>
                                            <th style="text-align: center;">Keterangan</th>
                                            <th style="text-align: center;">Kas Masuk</th>
                                            <th style="text-align: center;">Kas Keluar</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php  
                                    $no =1;
                                   $sql=$koneksi ->query("select*from kas");
                                   
                                   	while($data=$sql->fetch_assoc())
                                   	{
                                   ?>
                                   
                                        <tr class="odd gradeX">
                                            <td style="text-align: center;"><?php echo $no++ ?></td>
                                            <td style="text-align: center;"><?php echo $data['kode']; ?></td>
                                            <td style="text-align: center;"><?php echo $data['tanggal']; ?></td>
                                            <td style="text-align: center;"><?php echo $data['keterangan']; ?></td>
                                           	<td style="text-align: center;"><?php echo $data['jumlah']; ?></td>
                                            <td style="text-align: center;"><?php echo $data['keluar']; ?></td>
                                           
                                        
                                        
                                        </tr>
                                        
                                        <?php 
                                    }
                                    ?>
                                    </tbody>
                                    
                                </table>
                               <input type="button" name="Cetak" class="btn btn-success" value="Cetak pdf"> 
                                	<td>
                                	</td>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>