<?php 
error_reporting(0);

$koneksi = new mysqli("localhost","root","","kas_laundry");
$total_keluar=0;
$total_masuk=0;

?>  
<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body>
<h2 style="text-align: center;">Laundry Kenanga</h2>
<hr>

                                <table align="center" class="table table-dark" id="dataTables-example"border="1" cellpadding="1"cellspacing="1">
                                    <thead>
                                        <tr>
                                        	<th style="text-align: center;">Nomor</th>
                                            <th style="text-align: center;" >Kode Nota</th>
                                            <th style="text-align: center;">Tanggal</th>
                                            <th style="text-align: center;">Keterangan</th>
                                            <th style="text-align: center;">Kas Masuk</th>
                                            <th style="text-align: center;">Kas Keluar</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php  
                                    $no =1;
                                   $sql=$koneksi ->query("select*from kas where tanggal");
                                   
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
                                        $total_keluar+=$data['keluar'];
                                        $total_masuk+=$data['jumlah'];

                                    }
                                    $total_semua=$total_masuk-$total_keluar;
                                    ?>
                                    <td style="text-align: center;">Kas masuk</td>
                                    <td style="text-align: center;"><?php 	echo "Rp. ".$total_masuk; ?></td>
                                    <td>Kas keluar</td>
                                    <td style="text-align: center;"><?php echo "Rp ".$total_keluar; ?></td>
                                    
                                    </tbody>   
                             
                                </table>
                            </table>
                        </body>
                        </html>