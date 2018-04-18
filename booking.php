<?php
include_once 'config/koneksi.php';
?>
<section id="booking" class="sections">
    <div class="container text-center">

        <div class="heading-content">

<!--Pilih Tanggal-->            
<h3>Booking</h3>
<div class="booking">
<?php
	$sql = "SELECT * FROM m_kendaraan WHERE StatusAktif='Y'";
	//echo $sqlEdit;
	$results=mysql_query($sql);
	while($rows=mysql_fetch_object($results)){
		$no=1;
?>

<div class="gallery">
  
    <div class="con"><img src="assets/images/mobil/<?=$rows->Photo;?>" class="image" alt="Avanza" width="300" height="200">
	<div class="middle">
    <a href="#detailmobil" class="text">Detail</a>
  	</div></div>
  <div class="desc"><?=$rows->Jenis;?></div>
  <button type="button" onClick="document.getElementById('<?=$rows->Jenis;?>').style.display='block'" >Booking</button>
  <script>
  var x = document.getElementById('tes').value;
//alert(x);
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	//alert(modal);
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
</div>
<?php
	}
?> 

</div> <!-- booking -->
</div> <!-- content -->     
    </div> <!-- /container -->
</section>
