 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>profil.css">
    <style type="text/css">
    *{
    	margin: 0;
    	padding: 0;
    	background-image: url("<?=base_url()?>asset/nature.jpg");
    }
    .box{
    	width: 350px;
    	height: 400px;
    	padding: 40px;
    	background: rgba(0,0,0,0);
    	margin-top: 100%;
    	text-align: center;
    	margin: auto;
    	color: white;
    	font-family: 'Century Gothic',sans-serif;
    	border-radius: 20px;
    	background-color: transparent;	
    }
    #logo{
    	float: left;
    	color: white;
    	padding: 0px 50px;
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
    	background-color: rgba(0,0,0,0);
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
    	background-color: #111;
    	height: auto;
    }
    </style>
</head>
<body>
	<span id="logo"> <img class="pedah" src="<?=base_url()?>asset/bicycle.png" style="width: 80px; height: 80px;"> </span>
	<ul>
  		<li><a class="active" href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
  		<li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
  		<li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
  		<li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
  		<li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
	</ul>
    <br><br><br><br>
    <div class="box"> <br><br><br>
		<img src="<?=base_url()?>asset/1.jpg" alt="" style="width: 4cm; height: 4cm; border-radius: 50%;"><br><br>
		<h1>Dimas Rafly</h1>
		<h5>Full Stack Developer</h5> 
			<p>My Name is Dimas Rafly, my people call me Dimas. But because I live in Malang, my people call me with my reverse name, yes, Samid. U can contact me on the Contact page that I've provided</p>       
			<p>For inquires bussiness : dimasrafly17@gmail.com</p>
	</div>
</body>
</html>