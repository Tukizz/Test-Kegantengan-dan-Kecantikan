<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Test Ganteng Remaster</title>

	
	<link rel="stylesheet" href="css/icon.css">
	<link rel="stylesheet" href="css/materialize.min.css">
	

	
</head>
<body>

<br>

<!--PHP-->
<?php

if(isset($_POST['ok'])){
$a = rand(50,99);
$nama = $_POST["nama"];
$jk = $_POST["jk"];
?>

<div class="container">
  <div class="row">
        <div class="col s12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
            <div class="card blue-grey">
              <span class="card-title"><h1>Hai <?php echo $nama;?></h1></span>

<h3>Tingkat 

<!--SELECT JENIS KELAMIN-->
<?php
    if($jk == "l"){ ?>
      ketampanan anda adalah
<?php } 
    else if($jk == "p"){ ?>
      kecantikan anda adalah
<?php } 
    else if($jk =="g"){?>
      kamu itu... </h3>
      <h4>Aku tidak tau, apa mungkin kamu makhluk asing? <br>
       tapi aku bisa menilai kok.... kamu itu</h4>
<?php } ?><h3><b>
<?php echo $a; ?>/100%</b></h3>


            </div>
            </div>
            <div class="card-action">
            <a href=""><button class="btn waves-effect waves-light btn-large">OK
               <i class="material-icons right">send</i>
            </button></a>
            </div>
          </div>
        </div>
      </div>
</div>
<!--END TAMPIL DAN REPEAT KE HALAMAN INDEX-->
<?php } else {
?>


<div class="container">
  <h1>Test Kegantengan/Kecantikan</h1>
  <hr>
  <br>
</div>
      <div class="container">
        <div class="col s12">
          <div class="card blue-grey darken-1 z-depth-4">
<br><br>
	<div class="container">
		<div class="card z-depth-4">
            <div class="row">
    			<form class="col s12" method="post" id="tambah" name="tambah" action="">
					<div class="container">
          <br> <br>
						<div class="input-field">
          					<i class="material-icons prefix">account_circle</i>
          					<input id="icon_prefix" type="text" name="nama" id="nama" class="validate" required >
          					<label for="icon_prefix">Nama</label>
        				</div>

				
						<div class="input-field ">
							<i class="material-icons prefix">assignment_ind</i>
    						<select class="icons" name="jk" id="jk">
      							<option disabled selected selected="selected" required>Jenis Kelamin</option>
      							<option value="l" data-icon="img/male.jpg" class="left circle">Laki-laki</option>
      							<option value="p" data-icon="img/female.jpg" class="left circle">Perempuan</option>
      							<option value="g" data-icon="img/unknown.jpg" class="left circle">Ganda</option>
    						</select>
  						</div>
              <br><br>
  					</div>

    			
  			</div>
		</div>  
	</div>			
            <div class="card-action">
            <button class="btn waves-effect waves-light btn-large" type="submit" name="ok">OK
               <i class="material-icons right">send</i>
            </button>
            </div>

    
            </form>
          </div>
        </div>
      </div>





  	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
  <script type="text/javascript">
		
		$(document).ready(function() {
    $('select').material_select();
    $('.modal').modal();
  });  	

		

  </script>


	
</body>
</html><?php } ?> 
