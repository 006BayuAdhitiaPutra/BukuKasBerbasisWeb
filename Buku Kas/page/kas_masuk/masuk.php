<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" class="glyphicon glyphicon-usd" style="background-color:#14C38E; color:black">
                            Kas masuk
                        </div>
                        <div class="panel-body">
                          <hr>
                            <di/v class="table-responsive">
                                <table class="table table-dark" id="dataTables-example" style="background:#B7E5DD">
                                    <thead>
                                        <tr>
                                          <th  style="text-align: center;">Nomor</th>
                                            <th  style="text-align: center;">Kode Nota</th>
                                            <th  style="text-align: center;">Tanggal</th>
                                            <th  style="text-align: center;">Keterangan</th>
                                            <th  style="text-align: center;">Jumlah</th>
                                            <th  style="text-align: center;"> Edit/Hapus data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $no=1;
                                    $total=0;
                                   $sql=$koneksi ->query("select*from kas where jenis = 'masuk'");
                                   
                                    while($data=$sql->fetch_assoc())
                                    {
                                   ?>
                                   
                                        <tr class="odd gradeX">
                                                  <td style="text-align: center;"><?php echo $no++ ?></td>
                                            <td style="text-align: center;"><?php echo $data['kode']; ?></td>
                                            <td style="text-align: center;"><?php echo date('d, F, Y',strtotime($data['tanggal']));?></td>
                                            <td style="text-align: center;"><?php echo $data['keterangan']; ?></td>
                                            <td id="jumlah_satuan" style="text-align: center;"><?php echo number_format( $data['jumlah']).",-"; ?></td>
                                            <td style="text-align: center;"><a id="edit_data" data-toggle="modal" data-target="#edit"data-id="<?php echo$data['kode'] ?> "data-ket="<?php echo$data['keterangan'] ?>"data-tgl="<?php echo $data['tanggal']  ?>"data-jml="<?php echo $data['jumlah'] ?>" class="btn btn-info" /><i class="fa fa-edit"></i> Edit</a> <a onclick="return confrim('Yakin hapus data ini?')"href="?page=masuk&aksi=hapus&id=<?php echo$data['kode'];  ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                                            </td>
                                        
                                        </tr>
                                        <?php
                                        $total;
                                  $total=$total+$data['jumlah'];  
                                    }
                                    ?>
                                    </tbody>
                                  <td style="background-color: gray;" >Jumlah Pendapatan</td>
                                  <td style="background-color: gray;"></td>
                                  <td style="background-color: gray;"></td>
                                  <td style="background-color: gray;"></td>
                                  <td style="background-color: gray;"></td>
                                  <td style="text-align: right; background-color: gray;"><?php echo"Rp.".number_format( $total).",-";?></td>
                                </table>
                            </div>
                                                
                       
                        <div class="panel-body">
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
                             Tambah data
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Masukan Kas masuk</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" name="kode" placeholder="Masukan kode nota" />
                                        </div>
                                         <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="2" name="ket" placeholder="Masukan keterangan"></textarea>
                                        </div>
                                          <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tgl" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah" placeholder="Masukan jumlah transaksi di nota" />
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <input type="submit" name="simpan"class="btn btn-primary"value="Simpan">
                                           </div>
                                         </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                                  <?php 
                                  if(isset($_POST['simpan']))
                                  {
                                    $kode=$_POST['kode'];
                                     $ket=$_POST['ket'];
                                      $tgl=$_POST['tgl'];
                                       $jumlah=$_POST['jumlah'];
                                              if(empty($kode)||empty($ket)||empty($tgl)||empty($jumlah))
                                       {
                                        ?>
                                        <script type="text/javascript">
                                          alert("Masukan data secara lengkap")
                                          window.location.href="?page=masuk";
                                        </script>
                                        <?php
                                       }
                                       else {
                                       $sql=$koneksi->query("insert into kas(kode,keterangan,tanggal,jumlah,jenis,keluar)values('$kode','$ket','$tgl','$jumlah','masuk','0')");
                                     }
                                       if($sql)
                                       {
                                        ?>
                                        <script type="text/javascript">
                                          alert("Data berhasil disimpan")
                                          window.location.href="?page=masuk";
                                        </script>
                                        <?php
                                       }
                                     } 
                                  ?>
                                   <!-- -->
                                  <!-- Fom Edit Data-->
                                   
                        <div class="panel-body">
                         
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Kas masuk</h4>
                                        </div>
                                        <div class="modal-body" id="modal_edit">
                                            <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" name="kode" placeholder="Masukan kode nota" id="kode" readonly />
                                        </div>
                                         <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="2" name="ket" placeholder="Masukan keterangan" id="ket"></textarea>
                                        </div>
                                          <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tgl" id="tgl" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah" placeholder="Masukan jumlah transaksi di nota" id="jml" />
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <input type="submit" name="edit"class="btn btn-primary" value="Simpan perubahan">
                                           </div>
                                         </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <script src="assets/js/jquery-1.10.2.js"></script>
                                <script type="text/javascript">
                                  $(document).on("click","#edit_data", function()
                                  {
                                    var kode=$(this).data('id');
                                     var ket=$(this).data('ket');
                                      var tgl=$(this).data('tgl');
                                       var jml=$(this).data('jml');
                                       $("#modal_edit  #kode").val(kode);
                                       $("#modal_edit  #ket").val(ket);
                                         $("#modal_edit  #tgl").val(tgl);
                                           $("#modal_edit  #jml").val(jml);
                                  })
                                </script>
                                <?php 
                                 if(isset($_POST['edit']))
                                  {
                                  $kode=$_POST['kode'];
                                     $ket=$_POST['ket'];
                                      $tgl=$_POST['tgl'];
                                       $jumlah=$_POST['jumlah'];
                                      
                                       
                                         $sql=$koneksi->query("update kas set keterangan='$ket',tanggal='$tgl',jumlah='$jumlah'where kode='$kode'");
                                       if($sql)
                                       {
                                        ?>
                                        <script type="text/javascript">
                                          alert("Data berhasil diubah")
                                          window.location.href="?page=masuk";
                                        </script>
                                        <?php
                                       }
                                      }
                                  ?>
                                  <!-- End Form Edit Data -->
                      
                                </div> 

                                  
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
