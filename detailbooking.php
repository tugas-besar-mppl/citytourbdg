<?php
include_once 'config/koneksi.php';
	$sqldetail = "SELECT * FROM m_kendaraan WHERE StatusAktif='Y'";
	//echo $sqlEdit;
	$resultd=mysql_query($sqldetail);
	while($rowd=mysql_fetch_object($resultd)){
		$no=1;
?>
<div id="<?=$rowd->Jenis;?>" class="modal" style="overflow: hidden;">
 
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
<h3>Detail Booking</h3>
    </div>

    <div class="containerx" align="center">
    <button type="button" class="close-button" title="Close" onClick="document.getElementById('<?=$rowd->Jenis;?>').style.display='none'">X</button>

      <h5>Pilih Tanggal</h5>
  <label>Mulai</label>
  <input type="date" name="mulai">
  <label>Sampai</label>
  <input type="date" name="sampai">
<br/><br/>
<!--Tujuan wisata-->
<h5>Tujuan Wisata</h5>
<div style="display:inline-block; text-align:left;">

<label class="box"> Tangkuban Perahu
<span class="tooltiptext">
<div class="con"><img src="assets/images/wisata/Tangkuban.jpg" class="image" alt="Tangkuban Perahu" >
<div class="wisata"><p class="imgtext">Tangkuban Parahu atau Gunung Tangkuban Perahu adalah salah satu gunung yang terletak di Provinsi Jawa Barat, Indonesia. <br/>
Ketinggian: 2.084 m <br/>
Ketinggian relatif: 707 m <br/>
</div></div></span>
  <input type="checkbox" name="tujuan" value="Tangkuban Perahu">
  <span class="checkmark"></span>
</label>


<label class="box"> Floating Market
<span class="tooltiptext">
<div class="con"><img src="assets/images/wisata/floating.jpg" class="image" alt="Floating Market" >
<div class="wisata"><p class="imgtext">Tempat wisata baru di Bandung. Floating market Bandung satu2nya pasar terapung di Bandung cocok untuk semua usia
</div></div></span>
  <input type="checkbox" name="tujuan" value="Floating Market">
  <span class="checkmark"></span>
</label>
<label class="box"> Farm House
<span class="tooltiptext">
<div class="con"><img src="assets/images/wisata/farm.jpg" class="image" alt="Farm House" >
<div class="wisata"><p class="imgtext">Farm House Susu Lembang Taman hiburan dengan bangunan bergaya Eropa, kostum tradisional Belanda yang disewakan, & restoran modern.<br/>
Alamat: Jl. Raya Lembang No.108, Kabupaten Bandung Barat
</div></div></span>
  <input type="checkbox" name="tujuan" value="Farm House">
  <span class="checkmark"></span>
</label>
<label class="box"> Kawah Putih
<span class="tooltiptext">
<div class="con"><img src="assets/images/wisata/kawah.jpg" class="image" alt="Kawah Putih" >
<div class="wisata"><p class="imgtext">Kawah Putih adalah sebuah tempat wisata di Jawa Barat yang terletak di kawasan Ciwidey. Kawah putih merupakan sebuah danau yang terbentuk dari letusan Gunung Patuha.<br/>
Ketinggian permukaan: 2.430 m
</div></div></span>
  <input type="checkbox" name="tujuan" value="Kawah Putih">
  <span class="checkmark"></span>
</label>
<div class="containerx">
  <input type="submit" class="btn btn-login btn-lg" value="BOOKING NOW"> 
  <button type="button" onClick="document.getElementById('<?=$rowd->Jenis;?>').style.display='none'" class="cancelbtn">Cancel</button>
</div>
	 </div>   
    </div>
  </form>
</div>
<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<?php
	}
?> 