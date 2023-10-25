<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Agriculture Bihar</title>
  <style>
    .popup{
      position:absolute;
      top:10%;
      left:25%;
      height:60%;
      width:50%;
      box-shadow:10px 6px 6px black;
      border-radius:30px;
      transition:1s;
      transform:TranslateY(-150%);
      z-index: 1;
      background:lightblue;
     opacity:.9;
      
    }
    .popup p{
      position:relative;
    }
    .close:hover{
      cursor:pointer;
    }
  </style>
</head>

<body>

  <section class="middle">
    <!-- navbar start -->
    <?php include 'pages/navbar.html';?>
<!-- navbar end -->
    <!-- crousel slider -->
  
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img1" style="background-image: url(image/farmer4.jpeg);">
            <center>
              <h1>Management information <BR><span>System</span></h1>
            </center>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img2" style="background-image: url(image/farmer1.avif)">
            <center>
              <h1>PLEASE SUPPORT FARMER<BR><span>No Farmer No Food</span></h1>
            </center>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img3" style="background-image: url(image/farmer2.jpeg)">

          </div>
        </div>
        <div class="carousel-item">
          <div class="img4" style="background-image: url(image/farmer3.jpeg)">

          </div>
        </div>
        <div class="carousel-item">
          <div class="img5" style="background-image: url(image/farmer5.jpeg)">

          </div>

        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>
    <!-- end slide -->
    <div class="row cont-row">
      <div class="col-lg-8 col-sm-12">
        <h3><img src="image/up-logo@@@.png" class="rounded" style="height: 40px;"> राज्य फसल सहायता योजना<a
            href="pages/login_index.html" class="btnst">Click Here</a></h3>
        <p>बिहार राज्य फसल सहायता योजना हेतु आवेदन के लिए यहाँ क्लिक करें ! !
        </p>

      </div>
      <div class="col-lg-4 col-sm-12 helpline">
        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight"><img src="image/call.gif" class="rounded" alt="..."></div>
          <div class="p-2 bd-highlight">
            <h4>हेल्प लाईन नंबर<br>
              DIAL
              1800 1800 110</h4>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="box">
      <div class="col1">
        <p>बिहार राज्य फसल सहायता योजना</p>
        <hr>
        <p>( खरीफ 2022-23 )</p>
        <table align="center" width="100%">
          <tr>
            <td>कुल आवेदन</td>
            <td> रैयत कृषक </td>
            <td>गैर रैयत कृषक </td>
            <td>रैयत एवं गैर रैयत दोनों</td>
          </tr>
          <tr>
            <td>10000</td>
            <td> 2000</td>
            <td>1500 </td>
            <td>2090</td>
          </tr>
        </table>
        <p align="right">Updated On:-29/08/2023 21:00:01</p>
      </div>
      <div class="col2">
        <p>अधिप्राप्ति</p>
        <hr>
        <p>( धान अधिप्राप्ति 2022-23)</p>
        <table align="center" width="100%">
          <tr>
            <td>कुल आवेदन</td>
            <td> रैयत कृषक </td>
            <td>गैर रैयत कृषक</td>

          </tr>
          <tr>
            <td>10000</td>
            <td> 2000</td>
            <td>1500 </td>

          </tr>
        </table>
      </div>
      <div class="col3">
        <p>बिहार राज्य फसल सहायता योजना</p>
        <hr>
        <p>( रबी 2022-23 )</p>
        <table align="center" width="100%" class="txt">
          <tr>
            <td>कुल आवेदन</td>
            <td> रैयत कृषक </td>
            <td>गैर रैयत कृषक </td>
            <td>रैयत एवं गैर रैयत दोनों</td>
          </tr>
          <tr>
            <td>8787878</td>
            <td> 20098890</td>
            <td>15009 </td>
            <td>2099890</td>
          </tr>
        </table>
        <p align="right">Updated On:-29/08/2023 21:00:01</p>
      </div>
    </div>
  </section>
  <!-- popop -->
  <div class="popup" id="alt">
    <div class="d-flex justify-content-end text-danger" style="font-size:30px;padding:10px;">
    <p  class="close"><i class="fa-solid fa-xmark"></i><p>
  </div>
  <p class="d-flex justify-content-center text-warning" style="font-size:50px;text-decoration:underline">Disclaimer</p>
  <blockquote style="font-size:25px;padding:5px 10%; 0 10%;justify-content:center;font-weight:600">
    "This Website is clone of Bihar Government Agriculture Department. Which is only for studies purpose it will not going to affect any ongoing 
    Government Scheme and plan. We are not responsible for any kind of froudent activities. Be aware about this."
  </blockquote>
  <marquee class="bg-danger" scrollamount="15" style="opacity:1;">
    <p class="text-light" style="padding:10px;font-size:20px;font-weight:600">Contact.info: email:psuraj470@gmail.com , Mob.No.: 9006195930</p>
  </marquee>
  <a class="btn btn-success close">proceed to Home</a>
  </div>
  <footer>
    <div class="content">
      <h3>Designed By: <br> Suraj Kumar Pandey</h3>
      <p ><i>Student Of lovely professional University</i></p>
    </div>
    <div class="content">
      <h2>Important Reports
      </h2>
      <p><i>Student Of lovely professional University</i></p>
    </div>
    <div class="content">
      <h2>Contact Us: <br> psuraj470@gmail.com</h2>
      <p><i>Student Of lovely professional University</i></p>
    </div>
    <hr>
    <hr>
    <hr>
    <p align="center"> </p>
    <p align="center">&copy;pandey group of technology</p>

  </footer>

  <script src="JS/jquery.js"></script>
 <script>
 $(document).ready(function(){
    $('.popup').css({"transform":"TranslateY(0%)","transition":"2s"})
    $('.close').click(function(){
      $('.popup').css({"transform":"TranslateY(-150%)","transition":"1s"})
    });
  });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>