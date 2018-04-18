<?php
session_start();
if($_SESSION["pelanggan"] !=""){
$display = "style='display:none'";
$show="";
}else{
$display = "";
$show = "style='display:none'";
}

?>
  <!--  <div class='preloader'><div class='loaded'>&nbsp;</div></div> -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#aboutus">About Us</a></li>
                        <li><a href="#booking">Booking</a></li>
                        <li><a href="#testimonial">Testimoni</a></li>
                        <li><a href="#contact">Contact Us</a></li>


<li <?=$display;?>><a href="#login"><button class="btn btn-login btn-lg" onclick="document.getElementById('id01').style.display='block'">Sign in</button></a>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function signup() {
	document.getElementById('id01').style.display='none';
	document.getElementById('id02').style.display='block';
}
</script>

                        
                        </li>

<li <?=$display;?>><a href="#register"><button class="btn btn-login btn-lg" onclick="document.getElementById('id02').style.display='block'">Sign up</button></a>
                        <script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function signin() {
	document.getElementById('id02').style.display='none';
	document.getElementById('id01').style.display='block';
}
</script>
                        </li>
                        <li <?=$show;?>><a href="#" onclick="document.getElementById('profil').style.display='block'"><strong style="color:#4bcaff"><i class="fa fa-user"></i> <?php echo $_SESSION["nama"];?></strong></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
