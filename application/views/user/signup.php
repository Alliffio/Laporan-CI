<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <style type="text/css"> 
        *{
    font-family: 'Gotham';
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: -webkit-linear-gradient(left, rgb(138, 137, 137), rgb(87, 87, 87));
}

.cont{
    position: relative;
    width: 1000px;
    height: 600px;
    background: #fff;
    border-radius: 10px;
}

.form{
    position: relative;
    width: 640px;
    height: 100%;
    padding: 30px 30px;
    margin-left: 400px;
}

.sub-cont{
    overflow: hidden;
    position: absolute;
    left: 0px;
    top: 0;
    width: 400px;
    height: 600px;
    padding-left: 260px;
    background: -webkit-linear-gradient(left, rgb(39, 39, 39), rgb(65, 65, 65));
}

.text{
    z-index: 2;
    position: absolute;
    left: 0;
    padding-top: 250px;
    padding-left: 130px;
    color: white;
    font-weight: bolder;
    text-align: center;

}

label{
    display: block;
    width: 260px;
    margin: 25px auto;
    margin-top: -2px;
    text-align: center;
}

label span{
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;

}

input{
    display: block;
    width: 100%;
    margin-top: 5px;
    font-size: 16px;
    padding-bottom: 10px;
    border: 0;
    outline: 0;
    border-bottom: 1px solid #000;
    text-align: center;
}

.btn{
    margin-top: 10px;
    margin-bottom: 30px;
    margin-left: 160px;
    text-transform: uppercase;
    font-weight: 600;
    border-radius: 20px;
}

.btn-success{
    border-radius: 4px;
    border: none;
    transition: .6s;
    overlow: hidden;
    width: 70px;
}
.btn-success:focus{
    outline: none;
}

.btn-success:before{
    content: '';
    display: block;
}

.btn-danger{
    border-radius: 4px;
    border: none;
    transition: .6s;
    overlow: hidden;
    width: 90px;
}

.pdf{
    border-radius: 4px;
    border: none;
    transition: .6s;
    overlow: hidden;
    width: 110px;
}

.excel{
    border-radius: 4px;
    border: none;
    transition: .6s;
    overlow: hidden;
    width: 120px;
}

.sign-up{
    margin-top: 1px;
    margin-left: 150px;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    color: rgb(66, 66, 66);
    cursor: pointer;
}

.sign-up:hover{
    color: dodgerblue;
    text-decoration: underline;
}
    </style>
</head>
<body>
<div class="cont">
    <form action="<?php echo site_url('dashboard/simpan_data');?>" method="post" enctype="multipart/form-data">
    <div class="sub-cont">
        <div class="text">
            <h1>SIGN UP</h1>
        </div>
    </div>

    <div class="form">
           <label>
              <span>Nama</span>
              <input type="text" name="name">
           </label>
           <label>
              <span>NIK</span>
              <input type="text" name="niik">
           </label>
           <label>
              <span>Username</span>
              <input type="text" name="usernam">
           </label>
           <label>
              <span>Password</span>
              <input type="password" name="passwod">
           </label>
           <label>
              <span>No Telepon</span>
              <input type="text" name="telepon">
           </label>
           <button type="submit" class="btn btn-secondary" href="<?php echo site_url('dashboard/login')?>">Sign up</button>
           <p><a class="sign-up" href="<?php echo site_url('dashboard/login')?>">Already have an account? Sign in here!</a></p>
        </div>
        </form>
    </div>
</body>
</html>