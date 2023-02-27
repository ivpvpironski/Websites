<!------STYLE---->

<style>
    /*SHOWCASE*/
    .showcase .showcase-text
    {
        padding: 3rem;
    }

    .showcase .showcase-img
    {
        min-height: 30rem;
        background-size: cover;
    }

    /*POP-UPS*/

    .link{
        color: white;
        text-decoration: none;

    }

    .link:hover{
        color: white;
        text-decoration: none;

    }

    .pop{
        width: 80%;
        margin: auto;
        text-align: center;
        padding-top: 50px;
    }
    .pop-col{
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
    }
    .pop-col img{
        width: 100%;
        display: block;
    }
    .layer{
        background: transparent;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: 0.5s;
    }
    .layer:hover{
        background: rgb(81, 178, 187);
    }
    .layer h3{
        width: 100%;
        font-weight: 500;
        color: #fff;
        font-size: 26px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        position: absolute;
        opacity: 0;
        transition: 0.5s;
    }
    .layer:hover h3{
        bottom: 49%;
        opacity: 1;
    }

    /*BUTTONS*/
    .button {
        border-radius: 4px;
        background-color: white;
        border: none;
        color: #51b2bb;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #51b2bb;
    }

    .button1:hover {
        background-color: #51b2bb;
        color: white;
    }

    /*TEXT*/

    h1, h2{
        font-family: Helvetica;
    }

    h1{

    }

    h3, h4{
        font-family: "Times New Roman";

    }


</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Thomann</title>
</head>

<body>
<!-- Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<!---  HEADER --->
<div class="conteiner-fluid">
    <div class="row">
        <div class="col">
            <button  class="button button1" onclick="window.location.href='/18314/about.php'" style="float: right; ">About</button>
            <button class="button button1" onclick="window.location.href='/18314/shop.php'"  style="float: right">To the Site</button>
        </div>
    </div>
</div>

 <div class="row">
    <img src="images/logo.png" class="rounded mx-auto d-block" style="width: 320px; height: 320px; margin-top: -160px; margin-bottom: -90px">

    <h2 style="  text-align: center">Music is our passion</h2>
    <br><br><br>
 </div>

    <!--    Carousel  -->
  <div class="carousel slide mx-auto text-center" id="carouselExampleIndicators" data-bs-ride="true" style="width: 1200px; height: 600px; ">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style=" border: 2px solid rgb(81, 178, 187);">
        <div class="carousel-item active">
            <img src="images/flute_C.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/strings_C.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/thrompet_C.jpeg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
  </div>
<h4 style=" text-align:center; margin-top: -100px">Visit out website to see our full array of products</h4>

</div>
<br><br><br>

<!---- POP-UPS -->.

<section class="pop">
    <h2>Our Categories</h2><br><br>
    <div class="row">
        <div style="width: 30%; float: left; margin-left: 20px;" class="pop-col" ><a href="shop.php?search=drums" class="link" >
            <img src="images/drums_p.jpg">
            <div class="layer">
                <h3>DRUMS</h3>
            </div>
            </a>
        </div>

        <div style="width: 30%; float: left; margin-left: 5px;" class="pop-col">
            <img src="images/strings_p.jpeg">
            <div class="layer">
                <h3><a href="shop.php?search=guitars" class="link" >GUITARS</a></h3>
            </div>
        </div>
        <div style="width: 30%; float: left; margin-left: 20px;" class="pop-col">
            <img src="images/horn_p.jpg">
            <div class="layer">
                <h3><a href="shop.php?search=wind" class="link" >BRASS & WOODWIND</a></h3>
            </div>
        </div>
        <br>
        <h4>We also sell all kinds of other accessories<br>
        that you might need in your musical adventure.<br>
        Such as drum keys, guitar strings, sheet music and many more.</h4>
    </div>
</section>
</div>
<br><br><br><br>

<!---  SHOWCASE -->
<section class="showcase">
    <div style="background-color: #367479; width: auto; height: 80px; margin-top: -50px;"></div>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h1>Quality</h1>
                <p class=" mb-0">
                    Reliable tools made by established technology.
                </p>
            </div>
            <div class="col-lg-6 order-lg-2 text-white showcase-img imgSax" style="background-image: url('images/violin_s.jpeg');">
            </div>
        </div>
    </div>


<div class="row no-gutters">
    <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/piano_s.jpeg');"></div>
    <div class="col-lg-6 my-auto showcase-text">
        <h1>Long term support</h1>
        <p class="mb-0">
            Long warranty and care tips from our highly qualified specialists.
        </p>
    </div>
</div>
</section>
<div style="background-color: #367479; width: auto; height: 100px; margin-bottom: -20px;"></div>


<!---    FOOTER --->

<footer class="page-footer font-small mt-3" style="background-color:#1F1F1F;">

    <div class="footer-copyright text-center py-3" style="color:white">© 2022 Copyright:
        <a href="https://www.thomann.de/gb/index.html"> Tomann</a>
    </div>


</footer>


</body>