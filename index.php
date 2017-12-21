<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Test Ganteng</title>

	<link rel="stylesheet" href="css/icon.css">
	<link rel="stylesheet" href="css/materialize.min.css">
</head>
  <style>
      body{
        background: url("img/bgD.png") repeat;
      }
    /* label color */
     .input-field label {
       color: #ffffff;
     }
     /* label focus color */
     .input-field input[type=text]:focus + label{ 
       color: #ffffff !important;
     }
     /* label underline focus color */
     .input-field input[type=text]:focus {
       border-bottom: 1px solid #ffffff !important;
       box-shadow: 0 1px 0 0 #ffffff !important;
     }
     /* valid color */
     .input-field input[type=text].valid {
       border-bottom: 1px solid #ffffff !important;
       box-shadow: 0 1px 0 0 #ffffff !important;
     }
     /* invalid color */
     .input-field input[type=text].invalid {
       border-bottom: 1px solid #f44336 !important;
       box-shadow: 0 1px 0 0 #f44336 !important;
     }
     /* icon prefix focus color */
     .input-field .prefix.active {
       color: #ffffff !important;
     }
  </style>
<body>

<?php
  if(isset($_POST['ok'])){
    $a = rand(50,99);
    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
?>

  <div class="container">
    <div class="row center">
      <h1>Test Kegantengan/Kecantikan</h1>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <div class="card teal">
            <div class="card-content white-text">
              <?php if(empty($jk)){
                      echo strtoupper("<strong><h4>Cek Kembali Formnya</h4></strong>");
              }else{
              ?>
              <h4>Hai <?php echo strtoupper($nama);?></h4>
              <h5>Hitungan 
                  <!--SELECT JENIS KELAMIN-->
                  <?php
                      if($jk == "l"){ ?>
                        ketampanan anda adalah
                  <?php } 
                      else if($jk == "p"){ ?>
                        kecantikan anda adalah
                  <?php } 
                      else if($jk =="g"){?>
                        kamu itu... 
              
                      <h4>Aku tidak tau, apa mungkin kamu makhluk asing? <br>
                       tapi aku bisa menilai kok.... kamu itu</h4>
                  <?php } ?>
                <h3>
                  <b>
                    <?php echo $a; ?>/100%
                  </b>
                </h3>
              </h5>
              <?php }?>   
            </div>
            <div class="card-action">
              <a href="">
                <button class="btn waves-effect waves-light teal lighten-2">Back
                  <i class="material-icons right">send</i>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--END TAMPIL DAN REPEAT KE HALAMAN INDEX-->
  <?php } else { ?>

  <div class="container">
    <div class="row center">
      <h1>Test Kegantengan/Kecantikan</h1>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <div class="card teal">
            <div class="card-content container white-text">
               <!--  <span class="card-title">asdad</span> -->
              <div class="row">
                <form method="post">
                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" name="nama" class="validate" required>
                      <label for="icon_prefix white-text">Nama</label>
                    </div>    
                  </div>

                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">wc</i>
                      <select class="icons" name="jk" id="jk" required>
                        <option disabled selected selected="selected" required>Jenis Kelamin</option>
                        <option value="l" data-icon="img/male.jpg" class="left circle">Laki-laki</option>
                        <option value="p" data-icon="img/female.jpg" class="left circle">Perempuan</option>
                        <option value="g" data-icon="img/unknown.jpg" class="left circle">Ganda</option>
                      </select>
                    </div>
                  </div>

                  <div class="card-action">
                    <button class="btn waves-effect waves-light teal lighten-2" type="submit" name="ok">OK
                      <i class="material-icons right">send</i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>       
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script type="text/javascript">		
		$(document).ready(function() {
      $('select').material_select();
    });  	
  </script>
</body>
</html><?php } ?> 
