<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url() . 'c_index/' ?>">Hospitalization</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url() . 'c_index/home' ?>">Home</a></li>
        <li class="dropdown">
          <a href="<?php echo base_url() . 'c_index/gethospital' ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">List of Hospital <span class="caret"></span></a>
          <ul class="dropdown-menu multi-level">
            <li><a href="#"><i><b>Siloam</b></i></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url() . 'c_doctor_siloam/siloam_jambi/' ?>">Jambi</a></li>
            <li><a href="<?php echo base_url() . 'c_doctor_siloam/siloam_cikarang/' ?>">Cikarang</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i><b>RS Mitra Keluarga</b></i></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_cikarang/' ?>">Cikarang</a></li>
            <li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi/' ?>">Bekasi</a></li>
            <li><a href="<?php echo base_url() . 'c_doctor_mitra/mitra_bekasi_timur/' ?>">Bekasi Timur</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i><b>RS Harapan Keluarga</b></i></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i><b>RS Hosana Medika</b></i></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i><b>RS Annisa</b></i></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url() . 'c_index/gethospital' ?>"><b>Lists</b></a></li>
          </ul>
        </li>
        <!-- <li><a href="<?php echo base_url() . 'c_index/gethospital' ?>">List of Hospital</a></li> -->
        <li><a href="<?php echo base_url() . 'c_index/search_doctor' ?>">Search Your Doctor</a></li>
        <li><a href="<?php echo base_url() . 'c_index/search_symptom' ?>">Symptom</a></li>
        <li><a href="<?php echo base_url() . 'c_index/about' ?>">About</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>