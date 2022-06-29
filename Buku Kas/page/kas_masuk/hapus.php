<?php 
$id=$_GET['id'];
 $sql=$koneksi->query("delete from kas where kode='$id'");
 if($sql)
 {     
 	?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location.href="?page=masuk";
 </script>
 <?php
  }
 
 ?>