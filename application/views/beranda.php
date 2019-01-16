<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
    <style type="text/css">
    	.box{
    width: 450px;
    height: 600px;
    background: rgba(0, 0, 0, 0.4);
    padding: 40px;
    text-align: center;
    margin: auto;
    color: white;
    font-family: 'Century Gothic',sans-serif;
    }
    #logo{
    	float: left;
    	color: white;
    	padding: 0px 50px;

    }
    *{
    	margin: 0;
    	padding: 0;
    }
    ul{
    	position: fixed;
    	top: 0;
    	width: 100%;
    	font-size: 30px;
    	list-style-type: none;
    	height: 70px;
    	margin: 0;
    	padding: 0;
    	background-color: rgba(0,0,0,0.9);
    	opacity: 0.5;
    }
    li{
    	float: right;
    }
    li a{
    	display: block;
    	color: white;
    	text-align: center;
    	padding: 14px 6px;
    	text-decoration: none;
    }
    li a:hover{
    	background-color: #333;
    	height: auto;
    }
    </style>
</head>
<body style="background: linear-gradient(135deg, darkgreen 0%, white 100%);">
<header> 
<ul>
<span id="logo"> <img src="<?=base_url()?>asset/bicycle.png" style="width: 80px; height: 80px;"> </span>
  <li><a class="active" href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
  <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
  <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
  <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
  <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
</ul></header>
<h1 align="center" style="	color:lightgreen;
							text-align: left;
							font-size: 10.3mm;
							margin-top:197px;
							margin-left: 56px;
							font-family; sans-serif;">

Welcome <?= $nama_lengkap?> <br> 
Real <?= $jenis_kelamin?>

</h1>
<p style="font-size: 18px;margin-left: 56px;margin-top: 39px;">

Bike is for Real Man (Athlete I Mean)

</p>

<img style="width: 823px;
			margin-left: 518px;
			opacity: 0.9;
			margin-top: -312px;" src="<?=base_url()?>asset/bike1.png" alt="">
</body>
</html>