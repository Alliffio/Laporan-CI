<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    overflow: hidden;
    position: relative;
    width: 1000px;
    height: 580px;
    background: #fff;
    border-radius: 10px;
}

.form{
    position: relative;
    width: 640px;
    height: 100%;
    padding: 50px 30px;
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
    overflow: hidden;
    z-index: 2;
    position: absolute;
    left: 0;
    padding-top: 230px;
    padding-left: 75px;
    color: white;
    font-weight: bold;
    text-align: center;

}

h2{
    width: 100%;
    font-size: 30px;
    text-align: center;

}

label{
    display: block;
    width: 260px;
    margin: 25px auto;
    margin-top: 46px;
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

button{
    display: block;
    margin: 0 auto;
    width: 260px;
    height: 36px;
    color: #fff;
    cursor: pointer;
}

.btn{
    margin-top: 40px;
    margin-bottom: 30px;
    margin-left: 160px;
    text-transform: uppercase;
    font-weight: 600;
    border-radius: 30px;
}

.forgot{
    margin-top: 15px;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    color: rgb(66, 66, 66);
    cursor: pointer;
    font-style: italic;
}

.forgot:hover{
    color: red;
}

.sign-up{
    margin-top: 15px;
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
    <title>Test</title>
</head>
<body>
<div class="cont">
<form action="<?php echo site_url('dashboard/login_action') ?>" method="post">
    <div class="sub-cont">
        <div class="text">
            <h1>LAPORAN</h1>
            <h1>PENGADUAN</h1>
        </div>
    </div>

    <div class="form">
           <h2>LOG IN</h2>
           <label>
              <span>Username</span>
              <input type="username" name="username">
           </label>
           <label>
              <span>Password</span>
              <input type="password" name="password">
           </label>
           <button type="submit" class="btn btn-secondary">Login</button>
           <br>
           <a class="sign-up" href="<?php echo site_url('dashboard/signup')?>">Dont have an account? Sign up here!</a>
        </div>
        </form>
    </div>
</body>
</html>