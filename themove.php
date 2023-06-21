<?php 

include("navbar.php");

 ?>

 <style type="text/css">
    .myhome{
    background-image: url(img/pexels-anna-pou-8132528.jpg);
    background-size: cover;
    background-position: center;
    min-width: 100%;
    min-height: 100vh;
    max-width: 100%;
    max-height:100%;
    }
    .para{
        text-align: center;
    }
    .mycount{
        justify-content: center;
        justify-content: space-between;
    }
    .mycount ul li{
        list-style-type: none;
    }
    .mybtn{
        text-align: center;
    }
    .btn2{
        display: flex;
    }

 </style>
<div class="container text-light p-5 myhome">
    <h1 style="font-size: 50px; font-weight: bold; margin-top: 50px;">Great Music & <br> Hits from <br> Worldwide</h1>

    <div class="btn2">
        <div class="buttons mb-5 mt-5">
            <button><a href="music.php" style="text-decoration: none; color: white;">Playlist</a></button>
        </div>
        <div class="buttons mb-5 m-5">
            <button><a href="music.php" style="text-decoration: none; color: white;">Genre</a></button>
        </div>
    </div>
</div>
<?php 

include("footer.php");

 ?>