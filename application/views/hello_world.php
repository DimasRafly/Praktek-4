 <html>
<head>
    <meta charset="utf-8">
    <title>My First CI App</title>
    <style>
    body {
        background-image: url("<?=base_url()?>asset/bg.jpg");
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        font-family: cursive;
        margin-left: 200px;
        margin-right: 200px;
    }
    img {
        border: 3px solid red;
        width: 120px;
        height: 170px;
        position: relative;
    }

    #container{
        text-align: center;
    }

    h1,h3 {
        color: white;
    }

    p {
        color: white;
    }
    </style>
</head>
<body>
    
<div id="container">
    <!-- <marquee behavior="" direction="right" speed ><h1>Hello World</h1></marquee>

    <div id="body">
        <p>Selamat kamu sudah bisa menggunakan konsep Controller dan View pada CI.</p>
    </div> -->
    <marquee behavior="" direction="right" speed ><H1>Biodata</H1></marquee>
    <p>
    <img src="<?=base_url()?>asset/dimas.jpg"><br><br>
    Name    : Dimas Rafly<br>
    Born    : Tulungagung| March, 17th 2001<br>
    Class   : XI RPL 2<br>
    Number  : 13
    </p>
    <br><h3><b>Short Intro</b></h3>
    <p>My name is Dimas Rafly, Owner of IndoBike.id I was born on March, 17th 2001 at Tulungagung. I have a lil bro since 2007. My Family are a good people, my house far from city so I can feel peace here. Far from polution near from nature. I love bike and technology. I have an idea that make a bike while combine with nature. So great! </p>
</div>
</body>
</html>