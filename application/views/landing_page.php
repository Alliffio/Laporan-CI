<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Laporan Pengaduan</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css')?>">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <style type="text/css">
		* {
		    font-family: 'Nunito', sans-serif;
		}

		body, html{
		    height: 100%;
		}

    </style>

    
</head>

 <body style="overflow-x: hidden;">
    
      
      <div class="text">
        <h1 style="font-size: 100px; position: absolute; margin-left: 420px; margin-top: 200px; color: white; text-shadow: 7px 7px #929292">WELCOME</h1>
        
        <h4 style="font-size: 40px; position: absolute; margin-left: 420px; margin-top: 360px; color: white;"><i>Lapor dan Adukan Sekarang</i></h4>
      </div>
      
      <a href="<?php echo site_url('dashboard/login')?>" style="position: absolute; margin-left: 600px; margin-top: 460px;" class="d-none d-sm-inline-block btn btn-lg btn-outline-danger shadow-sm"><i class="fas fa-file fa-sm text-50"></i> Get Started >></a>
      
      
      <img src="<?php echo site_url('assets/img/bg-masthead2.jpg')?>" style="width: 100%;">
      <div class="footer" style="text-align: center; margin-top: 2%;">
        <p>Copyright. Aliffio @ 2020</p>
    </div>
      
</body>
</html>