 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil admin</title>
    <style>
        body{
            margin:51pxpx;
            font-family:'Century Gothic',sans-serif;
            background-color:#ededed;
            text-align:center;
        }
        .click {
            font-size: 20px;
            text-decoration: none;
            color: black;
            padding: 5PX;
            border: 1px solid transparent;
            font-family: tomato;
        }
        .judul{
            margin-bottom:51px;
            font-size:larger;
            margin-top:35px;
        }
        img{
            width: 300px;
            height: 200px;
        }
        .bike{
            font-size: 35px;
            text-decoration: none;
            color: black;
            padding: 5PX;
            border: 1px solid transparent;
            font-family: tomato;
            transition: 0.6s ease;
        }
        .bike:hover{
            background-color: rgba(0,0,0,0.5);
            color: black;
            border: 2px solid black;
            border-radius: 10px;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <p class="judul" style="background-color: rgba(0,0,0,0.4); width: 300px; margin-left: 5.5in; border-radius: 10px; padding-top: 5px; padding-bottom: 5px;">indobike.id's Bike Collection</p>
    <p class="line" style="background-color: rgba(0,0,0,0.2);">-</p>
<br>
    <img src="<?=base_url()?>asset/gt.png" alt="">
    <p> <a class="bike" href="https://www.gtbicycles.com/"> GT </a> </p>

    <img src="<?=base_url()?>asset/felt.png" alt="">
    <p> <a class="bike" href="https://feltbicycles.com/"> Felt </a> </p>

    <img src="<?=base_url()?>asset/trek.png" alt="">
    <p> <a class="bike" href="https://feltbicycles.com/"> Trek </a></p>

    <img src="<?=base_url()?>asset/yeti.png" alt="">
    <p> <a class="bike" href="https://www.yeticycles.com/"> Yeti </a> </p>
    <p class="line" style="background-color: rgba(0,0,0,0.2);">-</p>
    <a class="click" href="http://localhost/CI/index.php/welcome/profil"> Founder's Profile | </a>
    <a class="click" href="http://localhost/CI/index.php/welcome/gallery"> indobike.id's Gallery  | </a>
    <a class="click" href="http://localhost/CI/index.php/welcome/event">Latest Event! </a>
</body>
</html>